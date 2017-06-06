<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
	public function getIndex() {
	   return view('place');
   }
}
