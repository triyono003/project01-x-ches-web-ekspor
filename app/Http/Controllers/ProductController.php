<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Quality;
use App\Providers\AppServiceProvider;

class ProductController extends Controller
{
  public function create(Request $request)
  {
    return view("/src/product");
  }

  public function productHome()
  {
    return view("src.product", [
      "product" => Product::with("quality")->get(),
    ]);
  }

  public function listProduct(Request $request)
  {
    $keyword = $request->search;
    // dd($keyword);
    $query = Product::query()->with("quality");

    if ($keyword) {
      $query = $query
        ->where("products.name", "LIKE", "%" . $keyword . "%")
        ->orWhereHas("quality", function ($query) use ($keyword) {
          $query->where("qualities.name", "LIKE", "%" . $keyword . "%");
        });
    }
    $productList = $query->paginate(10);
    return view("src.admin.list_product", [
      "productList" => $productList,
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
      "image" => ["required", "mimes:jpg,jpeg,png", "max:2048"],
      "price" => ["required", "numeric"],
    ]);

    Product::create([
      "name" => $request->name,
      "quality_id" => $request->quality_id,
      "deskripsi" => $request->deskripsi,
      "image" => $request->file("image")->store("post-images"),
      "price" => $request->price,
    ]);
    return redirect()
      ->back()
      ->with("success", "upload success");
  }
  public function destroy($id)
  {
    Product::find($id)->delete();
    return back();
  }
}
