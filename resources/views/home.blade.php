@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавление изображения</div>
                    <div class="panel-body">
                        @if (count($errors)>0)
							<div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div class="errors"> {{$error}} </div>
                        @endforeach
                        </div>
						@endif
                        <form method='POST' action='home' enctype='multipart/form-data'>
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for='name'> Название </label>
                                <input type='text' name='name' id='name' class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for='picture'> Изображение </label>
                                <input type='file' name='picture1' id='picture1' class="form-control"/>
                            </div>
                            <button type="submit" class="btn btn-default">Добавить</button>
                        </form>
						<div class='galery'>
							@foreach ($all as $one)
							<div class='product'>
								<div class='menu'>			
									<a href="{{asset('home/edit/'.$one->id)}}" class='btn btn-block btn-default'>Редактировать</a>
									<a href="{{asset('home/delete/'.$one->id)}}" class='btn btn-block btn-default'>Удалить</a>
								</div>
								<div class='picture'>
								@if($one->picture != '-')
									<a href="{{asset('media/photos/'.$one->picture)}}" target='_blank'/>
									<img src="{{asset('media/photos/'.$one->picture_small)}}"/>
								@else 
									<img src="media/photos/nophoto.jpg"/>
								@endif
								</div>
								<div class='home'>
								{{$one->name}}
								</div>
							<br style='clear:both'/>	
							</div>
							@endforeach
							</div>
							{!!$all->links()!!}
						</div>	
                    </div>
                </div>
            </div>
        </div>
@endsection
