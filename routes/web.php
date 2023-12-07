<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\SendEmailController;
use App\Http\Middleware\Authenticate;
//use App\Http\Controllers\VisitorController;
use App\Http\Controllers\RegisterController;

Route::get("/", [HomeController::class, "index"]);
Route::get("/src/blog", [BlogController::class, "create"]);
Route::get("/src/contact", [ContactController::class, "create"]);
Route::post("/src/contact", [ContactController::class, "saveMessage"]);

//////////////////////////////////////////////
Route::middleware("guest")->group(function () {
  Route::get("/src/auth/register", [RegisterController::class, "create"]);
  Route::post("/src/auth/register", [RegisterController::class, "store"])->name(
    "register"
  );
  Route::get("/src/auth/login", [LoginController::class, "create"])->name(
    "login"
  );
  Route::post("/src/auth/login", [LoginController::class, "store"]);
});

//////////////////////////////////////////////
Route::get("/src/auth/logout", [LoginController::class, "logout"])->name(
  "logout"
);

Route::middleware("auth")->group(function () {
  Route::get("/src/admin/list_admin", [AdminController::class, "listAdmin"]);
  Route::delete("/src/admin/list_admin/{id}", [AdminController::class, "destroy"]);

  Route::get("/src/admin/dashboard", [AdminController::class, "create"]);

  Route::get("/src/admin/list_product", [
    ProductController::class,
    "listProduct",
  ]);

  Route::get("/src/admin/upload_product", [
    ProductController::class,
    "pageUploadProduct",
  ]);
  Route::post("/src/admin/upload_product", [
    ProductController::class,
    "store",
  ])->name("product");
});

Route::get("/src/email/test_send_email", [SendEmailController::class, "index"]);

//////////////////////////////////////////////

Route::get("/src/auth/forgot_password", function () {
  return view("src.auth.forgot_password");
})
  ->middleware("guest")
  ->name("password.request");

Route::post("/src/auth/forgot_password", function (Request $request) {
  $request->validate(["email" => "required|email"]);

  $status = Password::sendResetLink($request->only("email"));

  return $status === Password::RESET_LINK_SENT
    ? back()->with(["status" => __($status)])
    : back()->withErrors(["email" => __($status)]);
})
  ->middleware("guest")
  ->name("password.email");

Route::get("/src/auth/reset_password/{token}", function (string $token) {
  return view("src.auth.reset_password", ["token" => $token]);
})
  ->middleware("guest")
  ->name("password.reset");

Route::post("/src/auth/reset_password", function (Request $request) {
  $request->validate([
    "token" => "required",
    "email" => "required|email",
    "password" => "required|min:8|confirmed",
  ]);

  $status = Password::reset(
    $request->only("email", "password", "password_confirmation", "token"),
    function (User $user, string $password) {
      $user
        ->forceFill([
          "password" => Hash::make($password),
        ])
        ->setRememberToken(Str::random(60));

      $user->save();

      event(new PasswordReset($user));
    }
  );

  return $status === Password::PASSWORD_RESET
    ? redirect()
      ->route("login")
      ->with("status", __($status))
    : back()->withErrors(["email" => [__($status)]]);
})
  ->middleware("guest")
  ->name("password.update");
