@extends('layouts.app')
@section('content')
	<link href="{{asset ('/media/styles/maplocation.css')}}" rel="stylesheet">


<h1>Самовывоз возможен по адресу:</h1> <h2> г.Минск, ул. Уборевича 64</h2>
<section class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="map"></div>
        <div class="search_location">
          <form>
          <input id="geocomplete" type="text" placeholder="Type in an address" class="search" />
          <button id="find" type="button" class="find-btn"><i class="fa fa-map-marker fa-2x"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>



<script src="{{asset ('/media/js/maplocation/jquery-2.2.3.js')}}"> </script>
<script src="{{asset ('/media/js/maplocation/jquery.geocomplete.min.js')}}"> </script>
<script src="{{asset ('/media/js/maplocation/map.js')}}"> </script>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U&amp;libraries=places"></script>



<!--<div class="footercontact"> 
Самовывоз возможен по адресу: <br> г.Минск, ул. Уборевича 64 <br> /описание проезда/<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.1420330691008!2d27.649663649501964!3d53.84181616714799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbd2139e2c0235%3A0xf016614139c06b04!2z0YPQu9C40YbQsCDQo9Cx0L7RgNC10LLQuNGH0LAgNjQsINCc0LjQvdGB0LosINCR0LXQu9Cw0YDRg9GB0Yw!5e0!3m2!1sru!2sru!4v1491587536137" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>	-->
@endsection