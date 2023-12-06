<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $blog = new Blog();
    $blog->id = 1;
    $blog->content =
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptates tempora voluptatem consequatur harum ab debitis consectetur recusandae reiciendis, maiores nobis quo soluta dolore ipsa sunt asperiores unde consequuntur est.";
      $blog->save();
  }
}
