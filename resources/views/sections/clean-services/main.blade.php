@extends('layouts.app')
@section('title')
	<title>Navalimp, Limpieza profesional de locales</title>
@endsection
@section('metas')
	<meta name="description" content="Servicios de locales, servicio profesional de limpieza de locales>
	<meta name="keywords" content="" />
	<meta property="og:site_name" content="" />
	<!--<link rel="canonical" href="https://www.nscontrol.es">-->
@endsection
@section('content')
	@include('sections.clean-services.header')
	@include('sections.clean-services.local-cleaning')
@endsection

@section('stylesheet')
	
@endsection

@section('scripts')
	<script>
		new WOW().init();
	</script>
@endsection


