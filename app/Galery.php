<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $fillable= [
	'user_id',
	'name',
	'picture',
	'picture_small',
	'showhide',
	];
}
