<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    use HasFactory;
    protected $fillable = [
		'fecha',
        'product_id',
        'stock',
        'stockI',
        'ingreso',
        'salida'
	];
	public function product(){return $this->belongsTo(Product::class);}	
}
