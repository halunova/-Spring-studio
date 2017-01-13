@extends('layouts.app')
@section('content')
                    
						<div class='galery'>
							@foreach ($all as $one)					
								@if($one->picture != '-')
									<a href="{{asset('media/photos/'.$one->picture)}}" target='_blank'><img src="{{asset('media/photos/'.$one->picture_small)}}"/><a/>
								@endif	
							@endforeach
						</div>
							{!!$all->links()!!}
						
@endsection