<?php
return array(
'title'=>'Galeries',
'single'=>'Galery',
'model'=>'App\Galery',
'columns'=>array(
	'id',
	'user_id',
	'cat_id',
	'name',
	'picture'=>array(
	 'output'=>'<img src="/media/photos/s_(:value)" />'
	)),
'filters'=>array(
	'id',
	'user_id',
	'cat_id',
	'name'),
'edit_fields'=>array(
	'id',
	'user_id',
	'cat_id',
	'name',
	'picture'),
);