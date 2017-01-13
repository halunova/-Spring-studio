<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Requests;
use App\galery;
use Auth;
use Appp\Libs\Imag;

class PhotoController extends BaseController
{
   public function index()
    {
		$all = Galery::orderBy('id','DESC')->paginate(30);
        return view('photo')->with('all', $all);
    }
}
