<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserRegisterTest extends TestCase
{
  public function test_redirect_to_form_register()
  {
    $response = $this->get("/src/auth/register");

    $response->assertStatus(200);
  }

  public function test_register_success()
  {
    /*
    $response = User::create([
      "image" => "image.jpg",
      "username" => "triyono",
      "email" => "admin@log.com",
      "password" => bcrypt("admin123"),
    ]);
    */
    /*
    $response = $this->post("/src/auth/register", [
      "image" => "image.jpg",
      "username" => "triyono",
      "email" => "admin@log.com",
      "password" => bcrypt("admin123"),
    ]);
    */
    $response->assertRedirect("/src/auth/login");
  }
}
