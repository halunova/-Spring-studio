@extends('layouts.app')
@section('content')
	<div class="outputtovar"> 
	<h3>Категория: {{$cat->name}} <br>
		{{$one->name}}  <br><br> </h3>
		<img src="{{asset('media/photos/'.$one->picture )}}" width="700px"/>
			<br><br>Добавлено пользователем {{$user->name}} {{$one->created_at}}
	</div>		
@endsection