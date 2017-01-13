
@extends('layouts.app')
@section ('content')
<div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> 
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	<li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" align=center>
    <div class="item active">
      <img src="/media/img/5.jpg" alt="Наши работы">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="/media/img/2.jpg" alt="Наши работы">
      <div class="carousel-caption">
      </div>
    </div>
	 <div class="item">
      <img src="/media/img/3.jpg" alt="Наши работы">
      <div class="carousel-caption">
      </div>
    </div>
	 <div class="item">
      <img src="/media/img/4.jpg" alt="Наши работы">
      <div class="carousel-caption">
      </div>
    </div>
	 <div class="item">
      <img src="/media/img/1.jpg" alt="Наши работы">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="l carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
 <div class="name">Студия свадебного декора "Весна"</div>

@endsection