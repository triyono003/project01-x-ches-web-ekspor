<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
  public function create()
  {
    return view("src.auth.login");
  }

  public function store(Request $request)
  {
    $credentials = $request->validate([
      "email" => ["required", "email"],
      "password" => ["required"],
    ]);
    if (Auth::attempt($credentials)) {
      return redirect("/src/admin/dashboard")->with("succes", "login berhasil");
    } else {
      return redirect("/src/auth/login");
    }
  }

  public function logout(Request $request)
  {
    $request->session()->flush();
    Auth::logout();
    return redirect("src/auth/login");
  }
}
