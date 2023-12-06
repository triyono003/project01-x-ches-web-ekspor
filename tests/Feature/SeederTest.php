<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\ProductSeeder;
use Database\Seeders\BlogSeeder;
use Database\Seeders\ContactSeeder;
use Database\Seeders\QualitySeeder;
use Database\Seeders\UserSeeder;
use Database\Factories\ProductFactory;
use App\Models\Product;
use App\Models\Quality;
use App\Models\User;

class SeederTest extends TestCase
{
  /**
   * A basic feature test example.
   */
  public function test_save_seed(): void
  {
    //  Product::factory(10)->create();

    $product = $this->seed([
      ProductSeeder::class,
      QualitySeeder::class,
      BlogSeeder::class,
      ContactSeeder::class,
      UserSeeder::class,
    ]);
    self::assertNotNull($product);
  }
/*
  public function test_quality_seed(): void
  {
    $quality = $this->seed([QualitySeeder::class]);
    self::assertNotNull($quality);
  }
  */
}
