<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quality;

class QualitySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $quality = new Quality();
    $quality->name = "Premium";

    $quality2 = new Quality();
    $quality2->name = "Standar";

    $quality3 = new Quality();
    $quality3->name = "Sertifikasi";

    $quality->save();
    $quality2->save();
    $quality3->save();
  }
}
