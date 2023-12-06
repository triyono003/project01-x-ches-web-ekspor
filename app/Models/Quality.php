<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use App\Models\Product;

class Quality extends Model
{
  use HasFactory;
  protected $fillable = ["name"];
  
  public function product(): hasMany
  {
    return $this->hasMany(Product::class);
  }
}
