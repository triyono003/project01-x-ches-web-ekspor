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
    Schema::create("visitors", function (Blueprint $table) {
      $table->id();
              $table->string("phone", 50)->nullable(false);
      $table->string("desktop", 50)->nullable(false);
      $table->string("browser", 50)->nullable(false);
      $table->string("version", 50)->nullable(false);
      $table->string("platform", 50)->nullable(false);
      $table->string("vplatform", 50)->nullable(false);
      $table->string("clientip", 50)->nullable(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists("visitors");
  }
};
