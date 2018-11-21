@extends('layouts.app')
@section('title')
	<title>Formulario de contacto Navalimp, empresa de limpieza profesional</title>
@endsection
@section('metas')
	<meta name="description" content="Contacta a nuestros asesores para que te den una mejor solución de limpieza para tu empresa">
	<meta name="keywords" content="" />
	<meta property="og:site_name" content="" />
	<!--<link rel="canonical" href="https://www.nscontrol.es">-->
@endsection
@section('content')
	<div class="container-fluid p-0">
		<img src="{{ asset('img/design-garden-header.jpg') }}" alt="">
	</div>
	@include('sections.contact.contact-form')
	</section>
@endsection
@section('scripts')
	<script>
		new WOW().init();

		$('input,textarea,p').focus(function(){
		   $(this).data('placeholder',$(this).attr('placeholder'))
		          .attr('placeholder','');
		}).blur(function(){
		   $(this).attr('placeholder',$(this).data('placeholder'));
		});
	</script>
@endsection