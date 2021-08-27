<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Paradise cosmetics</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
		<link rel="stylesheet" href="{{ asset('css/estilos.css')}}">
	</head>
	<body>
		<header>
			<div class="contenedor">
				<nav class="menu">
					<a href="#">Inicio</a>
					<a href="#">Registrarse</a>
					<a href="#">Iniciar sesion</a>
				</nav>
                @yield('usuario')
			</div>
		</header>

		<section class="main">
            @yield('content')
		</section>

		<footer>
			<section class="redes-sociales">
                @yield('footer')
			</section>
		</footer>
	</body>
</html>
