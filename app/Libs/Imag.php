<?php
namespace App\Libs;
use Image;
class Imag {
	public function url ( $puth=null, $direction=null, $name=null){
			if($puth!=null){
				$dir=public_path().$direction;
				if(!file_exists($dir)){
					mkdir($dir,0777,true);
				}
				$img=Image::make($puth);
				if(!$name){
					$f_name=date('y_m_d_h_i_s').'.jpg';
				} else {
					$f_name=$name;
				}
				$img->save($dir.$f_name);
				$small_name='s_'.$f_name;
				$img->resize(200,null,function($c){
					$c->aspectRatio();
				});
				$img->save($dir.$small_name);			
				return $f_name;			
			}

	}
}