<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Quality;

class HomeController extends Controller
{
  public function index()
  {
    return view("index",
    ["data" => Product::orderBy("id","desc")->get()]
    );
  }
}
