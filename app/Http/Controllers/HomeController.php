<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Requests;
use App\galery;
use Auth;
use Appp\Libs\Imag;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
		\Config::set('site.bg','/media/img/font1.jpg');
    }

	  public function email()
    {
	
	Mail::send('test',['fio'=>'Vika'], function($message)
	{
		$message->to('halunova97@gmail.com', 'Виктория Голунова')->subject('Welcome!');
	});
	return 'Message sent';
    }
    public function index()
    {
		$all = Galery::where('user_id', Auth::user()->id)->orderBy('id','DESC')->paginate(5);
        return view('home')->with('all', $all);
    }
	 public function postIndex(Requests\galeryrequest $r){
		 $f=\App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name'],'/media/photos/');
		 if ($f){
			 $pica=$f;
		 }
		 else{
			 $pica='-';
		 }
		$r['user_id']=Auth::user()->id;
		$r['picture']=$pica;
		$r['picture_small']='s_'.$pica;
		Galery::create($r->all());
		return redirect('home');
	 }
	 
	 public function getDelete($id=null){
		 Galery::where('user_id',Auth::user()->id)->where('id',$id)->delete();
		 return redirect('home');
	 }
	 
	 public function getEdit($id=null){
		$one=Galery::where('id',$id)->where('user_id', Auth::user()->id)->first();
		return view('edit')->with('one',$one);
	 }
	 
	 public function postEdit(Requests\galeryrequest $r, $id){
		 Galery::updateOrCreate(['user_id'=>Auth::user()->id,'id'=>$id],$r->all());
		 return redirect('home');
	 }
}
