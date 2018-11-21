<nav data-wow-delay="0.05s" class="navbar navbar-expand-lg navbar-light styles fixed-top wow fadeInDown" >
   <div class="container ">
      <a id="logolink" name="logolink" class="navbar-brand" href="{{ asset('/') }}"><img data-wow-delay="0.3s" src="{{ asset('img/logo_2.png') }}" alt="Ir a inicio" class="img-fluid wow fadeInDown" style="height: 34px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto ">
            <li data-wow-delay="0.3s"  class="nav-item dropdown  wow fadeInDown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Servicios de Limpieza
               </a>
               <div data-wow-delay="0.1s" class="dropdown-menu wow fadeIn" aria-labelledby="navbarDropdown1">
                  <a class="dropdown-item" href="{{ url('/servicios-de-limpieza/de-locales') }}">Limpieza de locales</a>
                  <a class="dropdown-item" href="{{ url('/servicios-de-limpieza/de-oficinas') }}">Limpieza de Oficinas</a>
                  <a class="dropdown-item" href="{{ url('/servicios-de-limpieza/de-ventanas') }}">Limpieza de Ventanas</a>
                  <a class="dropdown-item" href="{{ url('/servicios-de-limpieza/industrial') }}">Limpieza Industrial</a>
                  <a class="dropdown-item" href="{{ url('/servicios-de-limpieza/de-comunidades') }}">Limpieza de Comunidades</a>
                  <a class="dropdown-item" href="{{ url('/servicios-de-limpieza/de-edificios') }}">Limpieza de Edificios</a>
               </div>
            </li>
            <li data-wow-delay="0.4s"  class="nav-item dropdown  wow fadeInDown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Servicios de Jardinería
               </a>
               <div data-wow-delay="0.1s" class="dropdown-menu wow fadeIn" aria-labelledby="navbarDropdown2">
                  <a class="dropdown-item" href="{{ url('/servicios-de-jardineria/diseno-y-paisajismo') }}">Diseño y Paisajismo</a>
                  <a class="dropdown-item" href="{{ url('/servicios-de-jardineria/jardines-verticales') }}">Jardines Verticales</a>
                  <a class="dropdown-item" href="{{ url('/servicios-de-jardineria/mantenimiento') }}">Mantenimiento</a>
                  <a class="dropdown-item" href="{{ url('/servicios-de-jardineria/podas-y-desbroces') }}">Podas y Desbroces</a>
                  <a class="dropdown-item" href="{{ url('/servicios-de-jardineria/construccion-de-jardines') }}">Construcción de Jardines</a>
                  <a class="dropdown-item" href="{{ url('/servicios-de-jardineria/tala-de-arboles') }}">Tala de Árboles</a>
               </div>
            </li>
            <li data-wow-delay="0.5s" class="nav-item wow fadeInDown">
               <a class="nav-link" href="{{ url('/contacto') }}">Contáctanos</a>
            </li>
         </ul>
      </div>
   </div>
</nav>

<style>
   nav.styles{
      background: rgba(255, 255, 255, 0.95);
      z-index: 1024;
      width: 100%;
      min-height: 80px;
      box-shadow: 0 1px 5px rgba(0,0,0,.2);
      border-top: solid 2px #40acff;
   }


   .navbar-light .navbar-nav .nav-link {
       color: #40acff;
   }

   .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
       color: #40acff;
       font-weight: 600;
       
   }

   .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active {
       color: #40acff;
       font-weight: 600;
   }
   .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: #40acff;
       font-weight: 600;
}
</style>