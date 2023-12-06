<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ProductTest extends TestCase
{
  public function test_user_input_product_success(): void
  {
    /*
    Storage::fake("post-images");
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post("/src/admin/dashboard", [
      "name" => "laptop",
      "quality_id" => 1,
      "deskripsi" => "ladaku ladamu juga",
      "image" => UploadedFile::fake()->image("photo.jpg"),
    ]);

    //Storage::disk("post-images")->assertExists("photo.jpg");
    //self::assertTrue(true);
    $response->assertStatus(302);
    $response->assertSessionHas("success", "upload success");
    $response->assertRedirect("/src/admin/dashboard");

    //$response->dump();
    */
  }

  public function test_user_input_product_failed()
  {
    $user = User::factory()->create();
    $response = $this->actingAs($user)->post("/src/admin/dashboard", [
      "name" => 1901,
      "image" => "",
    ]);

    $response->assertStatus(302);
    //$response->assertRedirect("/src/admin/dashboard");
  }
}
