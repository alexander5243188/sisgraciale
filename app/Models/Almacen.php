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
        'proveedor_id',
        'stock',
        'stockI',
        'stockS',
        'ingreso',
        'salida',
        'nombrevendedor'
	];
	public function product(){return $this->belongsTo(Product::class);}	
}
