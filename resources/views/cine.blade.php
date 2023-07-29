<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Multicines Cinestar es una empresa pionera en el formato de multicines en el Perú. Información de películas, estrenos, concursos y más">
    <link rel="shortcut icon" href="{{ asset('img/varios/favicon.ico') }}">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet" type="text/css">
    <title>Multicines Cinestar</title>
</head>
<body>
	<header>
		<nav class="nav-sec">
			<a href="{{ url('/') }}">Inicio</a>&nbsp;&nbsp;l&nbsp;&nbsp;
			<a href="http://www.cinestar.com.pe/quienes_somos">Quiénes somos</a>&nbsp;&nbsp;l&nbsp;&nbsp;
			<a href="http://www.cinestar.com.pe/trabaja_con_nosotros">Trabaja con nosotros</a>&nbsp;&nbsp;l&nbsp;&nbsp;
			<a href="https://www.efact.pe/consult.html" target="_blank">Consulta tu comprobante de pago</a>&nbsp;&nbsp;l&nbsp;&nbsp;
			<a href="http://www.cinestar.com.pe/contactenos/#contenido_titulo" class="anchorLink">Contáctenos</a>
		</nav>
		<div class="area-logo">
			<a href="{{ url('/') }}"><img src="{{ asset('img/varios/logo-cinestar.png') }}" alt="Logo de Cinestar"/></a>
		</div>
		<nav class="menu">
			<span class="img-social">
				<a href="http://www.facebook.com/multicinestar" target="_blank"><img src="{{ asset('img/varios/ico-face.png') }}" alt="Facebook"></a>
				<a href="http://www.twitter.com/multicinestar" target="_blank"><img src="{{ asset('img/varios/ico-twitter.png') }}" alt="Twitter"></a>
			</span>
			<span class="social">Síguenos en: </span>
			<ul class="menu-principal">
				<li class="menu-item"><a href="/proximo">Cartelera</a></li>
				   <li class="menu-item"><a href="/proximo">Próximos estrenos</a></li>
				   <li class="menu-item"><a href="http://www.cinestar.com.pe/starcard">Star Card</a></li>
				<li class="menu-item"><a href="{{url('datos-cine')}}">Nuestros Cines</a></li>
				<li class="menu-item"><a href="http://www.cinestar.com.pe/ventas_corporativas">Ventas Corporativas</a></li>
				<li class="menu-item"><a href="http://www.cinestar.com.pe/promociones">Promociones</a></li>
				<li class="menu-item"><a href="http://www.cinestar.com.pe/cinefilo_star">Blog</a></li>
			</ul>
			<div class="slider">

			</div>
			<div class="papaya">
				<a href="http://www.cinepapaya.com/pe/cinestar" target="_blank"><img src={{asset("img/varios/bg-papaya.jpg")}}></a>
			</div>
		</header>
		<div class="contenido">
			<div class="publicidad">
				<a href="http://www.cinestar.com.pe/starcard/"><img src={{asset("img/varios/starcard.jpg")}}></a>
				<a href="http://www.cinestar.com.pe/cinefilo_star/"><img src={{asset("img/varios/cinefilo-star.jpg")}}></a>
			</div>
			<div class="contenido-interno" id="contenido-interno">
				<h2>{{$cine->RazonSocial}}</h2>
				<div class="cine-info">
					<div class="cine-info datos">
        @foreach ($info as $cinetarifa)
					
            <p>Días Semana: {{ $cinetarifa->DiasSemana }}, Precio: {{ $cinetarifa->Precio }}</p>
        @endforeach
		<div class="aviso">
			<p>A partir del 1ro de julio de 2016, Cinestar Multicines realizará el cobro de la comisión de S/. 1.00 adicional al tarifario vigente, a los usuarios que compren sus entradas por el aplicativo de Cine Papaya para Cine Star Comas, Excelsior, Las Américas, Benavides, Breña, San Juan, UNI, Aviación, Sur, Porteño, Tumbes y Tacna.</p>
		</div>
	</div>
	<img src={{asset("img/cine/1.2.jpg")}}/>
	<br/><br/><h4>Los horarios de cada función están sujetos a cambios sin previo aviso.</h4><br/>
	<div class="cine-info peliculas">
		<div class="tabla">
			<div class="fila">
				<div class="celda-cabecera">Películas</div>
				<div class="celda-cabecera">Horarios</div>
			</div>
			@foreach ($peliculas as $pelicula)
                <div class="fila">
                    <div class="celda-cabecera">Película: {{ $pelicula->Titulo }}</div>
                    <div class="celda-cabecera">Horarios: {{ $pelicula->Horarios }}</div>
                </div>
            @endforeach
			