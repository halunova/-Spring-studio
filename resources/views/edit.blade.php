@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Редактирование изображения</div>
                    <div class="panel-body">
                        <form method='POST' action='' enctype='multipart/form-data'>
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for='name'>Название</label>
                                <input type='text' name='name' id='name' class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for='picture'> Выберите файл</label>
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
                            <button type="submit" class="btn btn-default">Добавить</button>
                        </form>
						</div>	
                    </div>
                </div>
            </div>
			</div>
        
					
@endsection