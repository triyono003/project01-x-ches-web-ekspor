<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Product;
use App\Models\Quality;
class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function boot()
  {
    view()->composer("src.product", function ($view) {
      $products = Product::with("quality")->get();
      $view->with("products", $products);

      $view->with("getColorByQuality", [$this, "getColorQuality"]);
    }); // Panggil metode getColorByQuality });//
  }

  function getColorQuality($quality)
  {
    switch ($quality) {
      case "Premium":
        return "#D62828";
      case "standar":
        return "#38B000";
      case "Sertifikasi":
        return "#6C757D";
    }
  }
}

/**
 * Bootstrap any application services.
 */
