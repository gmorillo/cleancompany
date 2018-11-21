<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="name" content="content">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#1d3176" />

     @yield('title')
      @yield('metas')
    <link rel="preload" href="{{ asset('css/app.css') }}" as="style">
    <link rel="preload" href="{{ asset('css/animate.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('css/fontawesome.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('css/toastr.css') }}" as="style">
    <link rel="shortcut icon" href="{{asset('img/favico.png')}}" type="image/x-icon">
    
    <style>
        .grecaptcha-badge {
            display: none;
        }
    </style>
     @yield('stylesheet')
</head>
<body>
    <div class="page" id="app">
    <header>
        @include('sections.plantilla_base.nav')
        @yield('header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer >
        @include('sections.plantilla_base.footer')
    </footer>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" defer>
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}" defer>
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet" defer>
    <link rel="preload" href="{{ asset('js/app.js')}}" as="script">
    <script src="{{ asset('js/app.js')}}" type="text/javascript" charset="utf-8" ></script>
    <script src="{{ asset('js/lozad.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js')}}" type="text/javascript" charset="utf-8"  ></script>
    <script src='https://www.google.com/recaptcha/api.js' defer></script>
    <script src="{{ asset('js/formulario.js')}}" type="text/javascript" charset="utf-8" async ></script>
    <script src="{{ asset('js/toastr.js')}}" type="text/javascript" charset="utf-8" async ></script>

    <script>
        const observer = lozad();
        observer.observe();
    </script>
    @yield('scripts')
    </div>
</body>
</html>

