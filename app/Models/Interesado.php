<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interesado extends Model
{
    use HasFactory;

	protected $fillable = [
		'user_id',
		'carrea_id'
	];

	public function user(){
		return $this->belongsTo(User::class);
	}
}
