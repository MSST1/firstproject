<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
	@include('parts.head')
</head>
<body class="home-page">
	<div class="wrap-body">
		<header class="">
			@include('parts.header')
		</header>
		<!--Container-->
		<section id="container">
			<div class="wrap-container">
				<!--Сontent-->
				@yield('content')
			</div>
				<!--Footer-->
		<footer>
			@include('parts.footer')
		</footer>
	</div>
	@include('widgets.__JS')
	@yield('JS')
</body>
</html>
