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
                                <input type='file' name='picture' id='picture' class="form-control"/>
								 <p class="help-block"> путь к файлу</p>
                            </div>

                            <button type="submit" class="btn btn-default">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
