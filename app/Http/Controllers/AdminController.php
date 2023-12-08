<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Product;
use App\Models\Quality;
use App\Models\Visitor;

use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
  public function create()
  {
    return view("src.admin.dashboard", [
      "userAuth" => Auth::user(),
      "user" => User::all(),
      //"productList" => Product::latest()->first(),
      "productList" => Product::orderBy("id", "desc")->cursorPaginate(4),
      "adminCount" => User::count(),
      "visitorCount" => Visitor::count(),
    ]);
  }

  public function listAdmin(Request $request)
  {
    return view("/src/admin/list_admin", [
      "user" => User::all(),
    ]);
  }
  public function destroy($id)
  {
    User::find($id)->delete();
    return back();
  }
}
