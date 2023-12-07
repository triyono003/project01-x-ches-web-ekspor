<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use App\Models\User;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    /*
    DB::table("users")->insert([
      [
        "name" => "triyono",
        "email" => "triyono@log.com",
        "location" => json_encode(["lat", "long"]),
        "image" => "public/post-images/lada.jpg",
        "password" => bcrypt("admin123"),
      ],
    ]);
    */
    /*
    $user = new User();
    $user->name = "triyono";
    $user->email = "triyono@log.com";
    $user->password = bcrypt("admin123");
    $user->save();
  */
  }
}
