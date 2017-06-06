<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Главная') }}</title>

    <!-- Styles -->
    <link href="{{asset ('media/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset ('/media/styles/styles.css')}}" rel="stylesheet">
	<link href="{{asset ('/media/styles/left-nav-style.css')}}" rel="stylesheet">
	<script src="{{asset ('/media/js/jquery-3.1.1.min.js')}}"> </script>

<!-- Scripts for STRELKA NAVERH -->
    <script src="{{asset ('/media/js/jquery-2.2.3.js')}}"> </script>

<script src="{{asset ('/media/js/owl.carousel.min.js')}}"> </script>

<script src="{{asset ('/media/js/functions.js')}}"> </script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
	
</head>
<body style="background-color: #C0E7F1;"> 
 <div class="allcontent">   
	<input type="checkbox" id="nav-toggle-left-menu" hidden>
	 <nav class="navleftmenu">
	 <label for="nav-toggle-left-menu" class="nav-toggle-left-menu" onclick></label>
	  <h2 class="logo"> 
            Категории
        </h2>
        <ul>
		@foreach ($cats as $one)
		<li><a href="{{asset('/category/'.$one->id)}}">{{$one->name}}</a></li>
		@endforeach
        </ul>
    </nav>
	<div class="mask-content"></div>


    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Главная
                </a>
				<a href="/contacts" class="navbar-brand">
				О нас
				</a>
				<a href="/photo" class="navbar-brand">
				Наши работы
				</a>
				<a href="/comment" class="navbar-brand">
				Комментарии
				</a>
				<a href="/price" class="navbar-brand">
				Price-лист
				</a>
				<a href="/place" class="navbar-brand" id="rightafterSAMOVIVOZ">
				Самовывоз
				</a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
								<li>
                                    <a href="{{ asset('/home') }}" class="borderafterdropmenu">
                                        Добавить товар
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
									
                                        {{ csrf_field() }}
										
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
	
	
	
	
	
	


<div class="ourcontent">
    @yield('content')

<div class="ourfooter">
    <section id="contact-section">
			<div class="contact-info">
				<div class="container">
					<div class="title-section">
						<span></span>
					</div>
					<div class="contact-info-box">
						<div class="row">
							<div class="col-md-3">
							
								<h2>Наш офис</h2>
								<p>795 Fake Ave, Door 6 <br> Wonderland</p>
							</div>
							<div class="col-md-3">
							
								<h2>Телефоны</h2>
								<p> Phone: +351123456789 <br> Fax: +351987654321</p>
							</div>
							<div class="col-md-3">
								
								<h2>Email</h2>
								<p> info@marble.com <br> support@marble.com</p>
							</div>
                            <div class="col-md-2">
							
								<h2>Мы в Контакте</h2>
								<a href="https://vk.com/vesnaby"><img src="{{asset ('media/img/vk.png')}}" /></a>
							</div>
							<div class="col-md-1">
								
								<h2>Instagram</h2>
								<a href=""><img src="{{asset ('media/img/instagram.png')}}" /></a>
							</div>
				</div>
			</div>
        </section>
</div>
</div>
<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>
</body>
</html>
