@extends('layouts.app')
@section('content')
                    
						<div class='galery'>
							@foreach ($all as $one)					
								@if($one->picture != '-')
									<a href="{{asset('photo/'.$one->id)}}" target='_self'><img src="{{asset('media/photos/'.$one->picture_small)}}"/><a/>
								@endif	
							@endforeach
						</div>
							{!!$all->links()!!}
						
@endsection