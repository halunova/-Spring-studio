@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Комментарии</div><br>
							<div class='comments'>
							@foreach ($all as $one)
							<div class='product'>
								
								<div class='comment'>
								{{$one->updated_at}}
								{{$one->name}}<br>
									{{$one->text}}
								</div>
							<br style='clear:both'/>	
							</div>
							@endforeach
				
							{!!$all->links()!!}
							<form method='POST' action='comment' enctype='multipart/form-data'>
                            {{csrf_field()}}
                            <div class="form-group">
								<h3> Ваш комментарий </h3>
                                <label for='name'> Ваше имя </label>
                                <input type='text' name='name' id='name' class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for='text'> Комментарий </label>
                                <input type='text' name='text' id='text' class="form-control"/> <br>
                            </div>
                            <button type="submit" class="btn btn-default">Добавить</button>
                        </form>
						</div>
						</div>	
                    </div>
                </div>
            </div>
        </div>
@endsection








