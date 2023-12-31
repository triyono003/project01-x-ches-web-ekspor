<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create("products", function (Blueprint $table) {
      $table->IntegerIncrements("id");
      $table->foreignId("quality_id");
      $table->string("name")->nullable(false);
      $table->string("deskripsi")->nullable(false);
      $table->string("image");
      $table->bigInteger("price");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists("products");
  }
};
