<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iva extends Model
{
    use HasFactory;
    protected $fillable = [
        'tax'
    ];
    //public function products()  {  return $this->hasMany(Product::class);    }
}
