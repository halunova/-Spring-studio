@extends('layouts.app')

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
                            <button type="submit" class="btn btn-default">Добавить</button>
                        </form>
						