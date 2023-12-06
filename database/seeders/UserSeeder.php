<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $user = new User();
    $user->name = "triyono";
    $user->email = "triyono@log.com";
    $user->password = bcrypt("admin123");

    $user->save();
  }
}
