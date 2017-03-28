<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Comments;
use App\Http\Requests;
use Auth;

class CommentController extends Controller
{
	public function index()
    {
		$all = Comments::orderBy('id','DESC')->paginate(5);
        return view('comment')->with('all', $all);
    }
	
	public function postIndex(Requests\commentrequest $r){
		Comments::create($r->all());
		return redirect('comment');
	}
        public function getIndex()
	{
		return view('comment');
	}
}
