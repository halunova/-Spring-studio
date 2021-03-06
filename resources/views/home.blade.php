@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавление товара</div>
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
							<div class="form-group">
								<label for='cat_id'>Категория</label>
								<select class="form-control" name='cat_id' id='cat_id'>
									<option value="1">Букеты</option>
									<option value="2">Бокалы</option>
									<option value="3">Бутоньерки</option>
									<option value="4">Подвязки</option>
									<option value="5">Семейный очаг</option>
									<option value="6">Свадебное шампанское</option>
									<option value="7">Подушечки для колец</option>
									<option value="8">Наборы</option>
									<option value="9">Пригласительные</option>
									<option value="10">Бабочки</option>
									<option value="11">Бонбоньерки</option>
								</select>	
							</div>
							<!--<a href="#" class="button7"><button type="submit">Добавить</button></a>-->
                            <button type="submit" class="button7">Добавить</button>
                        </form>
						<div class='galery'>
							@foreach ($all as $one)
							<div class='product'>
								<div class='menu'>			
									<a href="{{asset('home/edit/'.$one->id)}}" class="button13">Редактировать</a>
									<a href="{{asset('home/delete/'.$one->id)}}" class="button13">Удалить</a>
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
