<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denomination extends Model
{
	use HasFactory;

	protected $fillable = [
		//'type',
		'type_id',
		'value',
		'image'
	];
	public function type(){return $this->belongsTo(Type::class);}
	public function sale(){return $this->hasMany(Sale::class);}


	


}
