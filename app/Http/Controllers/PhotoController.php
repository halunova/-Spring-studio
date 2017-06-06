<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Requests;
use App\galery;
use App\User;
use App\Category;
use Auth;
use Appp\Libs\Imag;

class PhotoController extends BaseController
{
   public function index()
    {
		$all = Galery::orderBy('id','DESC')->paginate(30);
        return view('photo')->with('all', $all);
    }
	 public function getCategory($id=null){
		$all=Galery::where('cat_id',$id)->paginate(10);
		return view('photo')->with('all',$all);
	 }
	 public function getOne($id=null){
		$one=Galery::find($id);
		$user=User::find($one->user_id);
		$cat=Category::find($one->cat_id);
		return view('show')->with('one',$one)->with('user', $user)->with('cat', $cat);
	 }
}
