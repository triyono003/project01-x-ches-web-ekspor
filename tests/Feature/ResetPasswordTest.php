<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResetPasswordTest extends TestCase
{
  public function test_get_forgot_password(): void
  {
    $response = $this->get("/src/auth/forgot_password");

    $response->assertStatus(200);
  }
}
