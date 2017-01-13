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
    <link href="media/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/media/styles/style.css" rel="stylesheet">
	<script src="/media/js/jquery-3.1.1.min.js"> </script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
	
</head>
<body style="background:url({{$bg}})"> 


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
                                    <a href="{{ asset('/home') }}">
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
<div class="left">
		<h2>Категории</h2>
		<ul>
			<li><a href="/photo">Букеты</a></li>
			<li><a href="/photo">Бокалы</a></li>
			<li><a href="/photo">Бутоньерки</a></li>
			<li><a href="/photo">Подвязки</a></li>
			<li><a href="/photo">Семейный очаг</a></li>
			<li><a href="/photo">Свадебное шампанское</a></li>
			<li><a href="/photo">Подушечки для колец</a></li>
			<li><a href="/photo">Наборы</a></li>
		</ul>
	</div>
    @yield('content')
<div class="footer"align=center>
			<div class="footercontact"> Наши контакты </div>
				<a href="https://vk.com/vesnaby"><img src="media/img/vk.png" /></a>
				<a href=""><img src="media/img/twitter.png" /></a>
				<a href=""><img src="media/img/instagram.png" /></a>

	</div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
 <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Язык страницы<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">русский</a></li>
			<li><a href="#">english</a></li>
		</ul>
 </li>	
</body>
</html>
