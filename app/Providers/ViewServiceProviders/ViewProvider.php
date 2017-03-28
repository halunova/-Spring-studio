<?php
namespace App\Providers\ViewServiceProviders;
use Illuminate\Contracts\View\View;
use App\Category;
class ViewProvider{
	public function compose(View $view){
		$bg=\Config::get('site.bg');
		$cats=Category::where('showhide', 'show')->get();
		$view->with('bg', $bg)->with('cats',$cats);
}
}