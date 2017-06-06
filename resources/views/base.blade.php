
@extends('layouts.app')
@section ('content')




<div class="container" >
    <div class="row">
        <div class="col-md-10">
          
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
  <div class="carousel-inner" role="listbox" align=center >
    <div class="item active">
      <img src="/media/img/5.jpg" height='360px' alt="Наши работы">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item"  height='360px'>
      <img src="/media/img/2.jpg" height='360px' alt="Наши работы">
      <div class="carousel-caption">
      </div>
    </div>
	 <div class="item"  height='360px'>
      <img src="/media/img/3.jpg" height='360px' alt="Наши работы">
      <div class="carousel-caption">
      </div>
    </div>
	 <div class="item"  height='360px'>
      <img src="/media/img/4.jpg" height='360px' alt="Наши работы">
      <div class="carousel-caption">
      </div>
    </div>
	 <div class="item"  height='360px'>
      <img src="/media/img/1.jpg" height='360px' alt="Наши работы">
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

 <section id="faq" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h2 class="heading">Frequently ask Questions</h2>
      <hr class="heading_space">
        <div class='faq_wrapper'>
          <ul class='items'>
            <li>
              <a href='#'> Lorem ipsum dolor sit amet, an eripuit laboramus sententiae duo lorem sio?</a>
              <ul class='sub-items'>
                <li>
                  <p class="half_space">Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look 
                  like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search 
                  for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                  <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose Many desktop publishing packages and web page 
                  editors now use Lorem Ipsum as their default model text (injected humour and the like).</p>
                </li>
              </ul>
            </li>
            <li>
              <a href='#'>There are many variations of passages of Lorem Ipsum available?</a>
              <ul class='sub-items'>
                <li>
                  <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose Many desktop publishing packages and web page 
                  editors now use Lorem Ipsum as their default model text (injected humour and the like).</p>
                </li>
              </ul>
            </li>
            <li>
              <a href='#'>It is a long established fact that a reader will be distracted by the readable content looking at its layout.</a>
              <ul class='sub-items'>
                <li>
                  <p class="half_space">Various versions have evolved over the years, sometimes by accident, sometimes on purpose Many desktop publishing packages and web page 
                  editors now use Lorem Ipsum as their default model text (injected humour and the like).</p>
                  <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose Many desktop publishing packages and web page 
                  editors now use Lorem Ipsum as their default model text (injected humour and the like).</p>
                </li>
              </ul>
            </li>
            <li>
              <a href='#'>We offer lot of service in a best price</a>
              <ul class='sub-items'>
                <li>
                  <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose Many desktop publishing packages and web page 
                  editors now use Lorem Ipsum as their default model text (injected humour and the like).</p>
                </li>
              </ul>
            </li>
            <li>
              <a href='#'>will be distracted by the readable standard Lorem Ipsum content looking at its layout.</a>
              <ul class='sub-items'>
                <li>
                  <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose Many desktop publishing packages and web page 
                  editors now use Lorem Ipsum as their default model text (injected humour and the like).</p>
                </li>
              </ul>
            </li>
            <li>
              <a href='#'>The standard Lorem Ipsum passage, used since the 1500s</a>
              <ul class='sub-items'>
                <li>
                  <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose Many desktop publishing packages and web page 
                  editors now use Lorem Ipsum as their default model text (injected humour and the like).</p>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection