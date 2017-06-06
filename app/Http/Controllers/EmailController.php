<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{
    public function Price()
    {
	return view('price');
    }
 
}
