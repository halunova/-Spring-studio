@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Отправил сообщение;)</div>
					<div class='panel-body'>Для пользователя {{$name}}. Верю, что он рад!:)<br>
					<img src="{{asset('media/img/smile.png')}}" />
					</div>
					</div>	
                    </div>
                </div>
            </div>
        </div>
@endsection