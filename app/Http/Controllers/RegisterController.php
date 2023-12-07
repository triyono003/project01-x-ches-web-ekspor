<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
  public function create()
  {
    return view("src.auth.register_admin");
  }

  public function store(Request $request)
  {
    //try {
      $request->validate([
        "image" => ["required", "mimes:jpg,jpeg,png", "max:2045"],
        "username" => ["required", "string", "max:15"],
        "email" => ["required", "email"],
        "password" => ["required"],
      ]);
      User::create([
        "image" => $request->file("image")->store("post-images"),
        "username" => $request->username,
        "email" => $request->email,
        "password" => Hash::make($request->password),
      ]);

      return redirect("/src/auth/login")->with(
        "success",
        "Registrasi Akun Berhasil"
      );
  
  }
}
