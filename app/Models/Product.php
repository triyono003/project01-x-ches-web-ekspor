<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Quality;

class Product extends Model
{
  use HasFactory;
  protected $fillable = ["name", "quality_id", "deskripsi", "image"];

  public function quality(): belongsTo
  {
    return $this->belongsTo(Quality::class,"quality_id");
  }
}
