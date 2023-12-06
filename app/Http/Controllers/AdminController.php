<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use App\Models\Product;
use App\Models\Quality;

class AdminController extends Controller
{
  public function create()
  {
    return view("src.admin.dashboard", [
      "qualities" => Quality::all(),
    ]);
  }

  public function store(Request $request)
  {
    try {
      $request->validate([
        "name" => ["required", "string"],
        "quality_id" => ["required"],
        "deskripsi" => ["required", "string"],
        "image" => "required",
        "mimes:jpg,jpeg,png",
        "max:2048",
      ]);
      Product::create([
        "name" => $request->name,
        "quality_id" => $request->quality_id,
        "deskripsi" => $request->deskripsi,
        "image" => $request->file("image")->store("post-images"),
      ]);
      return redirect("/src/admin/dashboard")->with(
        "success",
        "upload success"
      );
    } catch (\Exception $e) {
      return back()->withError("error", "upload Failed");
    }
  }
}
