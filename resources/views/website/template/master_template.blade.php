<!DOCTYPE HTML>
<html>
	<head>
		<title>Emagrecendo com Dieta - @yield('titulo')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--[if IE]><link rel="shortcut icon" href="images/favicon.ico"><![endif]-->
		<link rel="icon" href="{{ asset('images/favicon.png') }}">
		<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
		<!-- Custom Theme files -->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
		<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />	
		<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<!-- animation-effect -->
		<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet"> 
		<script src="{{ asset('js/wow.min.js') }}"></script>
		<script>
		 new WOW().init();
		</script>
		@yield('head')
		<!-- //animation-effect -->
	</head>
<body>
	
	@include('website.template.menu_template') 		<!-- Menu & Banner -->

	@include('website.template.top_template') 		<!-- TOP 3 -->

	@yield('conteudo')

	@include('website.template.footer_template') 	<!-- Footer & Créditos -->

	<div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<div class="container">
					<p>© 2018 - Emagrecendo com Dieta | Todos direitos reservados.</p>
				</div>
			</div>
</body>
</html>