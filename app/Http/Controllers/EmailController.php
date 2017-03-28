<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{
    	  public function email()
    {
	$name=Auth::user()->name;
	Mail::send('test',['fio'=>$name], function($message)
	{
		$email = Auth::user()->email;
		$name = Auth::user()->name;
		$message->to($email, $name)->subject('Welcome!');
	});
	return view('email')->with('name', $name);
    }
 
}
