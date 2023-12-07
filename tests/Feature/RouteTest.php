<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use App\Models\User;

class RouteTest extends TestCase
{
  use RefreshDatabase, WithFaker;

  public function test_HomePage(): void
  {
    $response = $this->get("/");
    $response->assertStatus(200);
    //$response->dump();
  }
/*
  public function test_ProductPage(): void
  {
    $response = $this->get("/src/product");
    $response->assertStatus(200);
  }
*/
  public function test_BlogPage(): void
  {
    $response = $this->get("/src/blog");
    $response->assertStatus(200);
  }

  public function test_ContactPage(): void
  {
    $response = $this->get("/src/contact");
    $response->assertStatus(200);
  }

  public function test_LoginPage(): void
  {
    $response = $this->get("/src/auth/login");
    $response->assertStatus(200);
  }

  public function test_DashboardPage_failed(): void
  {
    //hanya admin
    $response = $this->get("src/admin/dashboard");
    $response->assertStatus(302);

  }
}
