<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;

class AuthTest extends TestCase
{
  public function test_login_success(): void
  {
    $response = User::create([
      "image" => "admin.jpg",
      "username" => "admin",
      "email" => "admin@log.com",
      "password" => bcrypt("admin123"),
    ]);
    $response = $this->post("/src/auth/login", [
      "email" => "admin@log.com",
      "password" => "admin123",
    ]);
    $response->assertRedirect("/src/admin/dashboard");
  }

  public function test_login_failed(): void
  {
    $response = $this->post("/src/auth/login", [
      "email" => "dmin@log.com",
      "password" => "dmin123",
    ]);
    $response->assertRedirect("/src/auth/login");
  }
}
