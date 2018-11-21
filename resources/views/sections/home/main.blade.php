@extends('layouts.app')
@section('title')
	<title>Navalimp, empresa de limpieza profesional</title>
@endsection
@section('metas')
	<meta name="description" content="Empresa dedicada a servicios de jardinería y limpieza ubicxados en madrid con sedes en toda españa">
	<meta name="keywords" content="" />
	<meta property="og:site_name" content="" />
	<!--<link rel="canonical" href="https://www.nscontrol.es">-->
@endsection
@section('header')
 @include('sections.home.slideshow')
@endsection
@section('content')
	@include('sections.home.about-us')
	@include('sections.home.service-we-offer')
	@include('sections.contact.contact-form')
@endsection

@section('stylesheet')
    <link rel="preload" href="{{ asset('css/slideshow.css') }}" as="style">
	<link rel="stylesheet" href="{{ asset('css/slideshow.css') }}" defer>
	<style>
		
	</style>
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


