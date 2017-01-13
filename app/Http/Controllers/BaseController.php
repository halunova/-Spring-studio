<?php

namespace App\Http\Controllers;
use App\Maintext;
use Illuminate\Http\Request;

use App\Http\Requests;

class BaseController extends Controller
{ 
	   public function getFont()
	   {
	   $bg= 'media/img/pink.jpg';
	   return view('layouts.app')->with('bg',$bg);
	   }
   public function getIndex() {
	   $text=Maintext::where('url','index')->first();
	   return view('base');
   }
}
