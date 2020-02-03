<?php

namespace App\SupplierModels;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
	protected $fillable = [

		'name', 'phonenumber',
		'city','address',

	];
}
