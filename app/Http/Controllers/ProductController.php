<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Quality;

class ProductController extends Controller
{
  public function listProduct()
  {
    return view("src.admin.list_product", [
      "productList" => Product::orderBy("id","desc")->get(),
    ]);
  }

  public function pageUploadProduct()
  {
    return view("src.admin.upload_product", [
      "qualities" => Quality::all(),
    ]);
  }
  public function store(Request $request)
  {
    $req = $request->validate([
      "name" => ["required", "string"],
      "quality_id" => ["required"],
      "deskripsi" => ["required", "string"],
      "image" => "required",
      "mimes:jpg,jpeg,png",
      "max:2048",
      "price" => ["required", "numeric"],
    ]);

    Product::create([
      "name" => $request->name,
      "quality_id" => $request->quality_id,
      "deskripsi" => $request->deskripsi,
      "image" => $request->file("image")->store("post-images"),
      "price" => $request->price,
    ]);
    return back()->with("success", "upload success");
  }
}
