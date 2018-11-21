@extends('layouts.app')
@section('title')
	<title>Navalimp, Limpieza profesional de cristales, ventanas</title>
@endsection
@section('metas')
	<meta name="description" content="Servicio profesional de limpieza de ventanas, ventanales, edificios">
	<meta name="keywords" content="" />
	<meta property="og:site_name" content="" />
	<!--<link rel="canonical" href="https://www.nscontrol.es">-->
@endsection
@section('content')
	<div class="container-fluid p-0">
		<img src="{{ asset('img/windows-cleaning-header.jpg') }}" alt="">
	</div>
	<section class="well2 bg-round bg-round_bot well2__ins1" style="background-color: #40acff; padding-bottom: 150px;">
		<div class="container">
			<h3 class="center">Limpieza de Ventanas<span></span></h3>
			<div class="hexagon hexagon1">
				<div class="hexagon-in1">
					<div class="hexagon-in2"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h6>accumsan sed malesuada ac</h6>
					<p class="off2">Mauris efficitu faucibus leo id iaculis. Fusce elem entum sapien nec augue rhoncus convallis. Aliquam erat volutpat. Sed viverra varius scelerisque. Mauris bibendum, massa quis digni <br><br>Essim faucibus, felis dolor facilisis diam, at rutrum justo odio in eros. Praesent efficitur ligula non tinci dunt sodales. Curabitur placerat</p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<ul class="marked-list">
						<li><a href="#">Morbi volutpat enim placerat ipsum</a></li>
						<li><a href="#">Praesent porttitor congue elit non tempus</a></li>
						<li><a href="#">Sed libero purus vulputate</a></li>
						<li><a href="#">Lorem ipsum dolor sed leoraesent laoreet</a></li>
						<li><a href="#">Pestibulum molestieenean nonummy</a></li>
						<li><a href="#">Hendreritivamus eget nibh vel metus</a></li>
						<li><a href="#">Etiam cursus leo psum</a></li>
						<li><a href="#">Nulla facilisii primis neclaoreet</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<ul class="marked-list">
						<li><a href="#">Pestibulum molestieenean non</a></li>
						<li><a href="#">Hendreritivamus eget nibh vel metus</a></li>
						<li><a href="#">Etiam cursus leo psum</a></li>
						<li><a href="#">Nulla facilisii primis neclaoreet</a></li>
						<li><a href="#">Aenean nec eros luctus</a></li>
						<li><a href="#">Vestibulum ante faucibus orci</a></li>
						<li><a href="#">Ultrices posuere</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('scripts')
	<script>
		new WOW().init();
	</script>
@endsection