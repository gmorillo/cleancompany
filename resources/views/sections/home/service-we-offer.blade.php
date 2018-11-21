<main>
	<section class="well2">
    <div class="container">
      <h2 data-wow-delay="0.5s" class="text-center text-secondary wow fadeInDown">Algunos de nuestros servicios de limpieza<span></span></h2>
      <div class="my-2 pb-4">
      	<div data-wow-delay="0.3s" class="hexagon hexagon1 wow zoomInDown" >
      	  <div class="hexagon-in1">
      	    <div class="hexagon-in2" style="background-color: #40acff"></div>
      	  </div>
      	</div>
      </div>
      <p data-wow-delay="0.3s" class="text-center py-4 text-secondary wow fadeInLeft">Nuestro lema de empresa es Seguridad, Rapidez y Confianza. Trabajamos con esfuerzo para conseguir nuestro reto: satisfacer las necesidades de nuestros clientes. Llámanos y te damos presupuesto para tu limpieza</p>
      <div class="row text-secondary">
        <div class="col-xs-12 col-sm-3 col-md-4">
        	<div data-wow-delay="0.1s" class="wr wow fadeInRight">
            <h6><a href="{{ url('/servicios-de-limpieza/de-locales') }}"><strong><i class="fas fa-store"></i> Limpieza de locales</strong></a></h6>
            <p>Limpieza de suelos integral con maquinaria especializada. Pulidoras, barredoras, abrillantadoras...</p>
          </div>
          <div data-wow-delay="0.2s" class="wr right-mod wow fadeInLeft">
            <h6><a href="{{ url('/servicios-de-limpieza/de-oficinas') }}"><strong><i class="fas fa-briefcase text-uppercase"></i>  Limpieza de Oficinas</strong></a></h6>
            <p>Limpieza de oficinas, despachos, edificios e instalaciones empresariales.</p>
          </div>                
          <div data-wow-delay="0.3s" class="wr right-mod wow fadeInLeft">
            <h6><a href="{{ url('/servicios-de-limpieza/de-ventanas') }}"><strong><i class="fas fa-compress"></i> Limpieza de ventanas</strong></a></h6>
            <p>Limpieza de ventanas y cristales con raqueta y borrego, pértiga u otras limpiezas en altura.</p>
          </div>
        </div>
        <div data-wow-delay="0.3s" class="col-xs-12 col-sm-6 col-md-4 align-self-center wow zoomIn ">
          <div class="center-block"><img data-src="{{ asset('img/page-1_img01.jpg') }}" alt="" class="img_add mx-auto d-block lozad img-fluid"></div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-4">
          <div data-wow-delay="0.2s" class="wr wow fadeInRight">
            <h6><a href="{{ url('/servicios-de-limpieza/industrial') }}"><strong><i class="fas fa-city"></i> Limpieza Industrial</strong></a></h6>
            <p>Limpieza y mantenimiento profesional. Recogida de basuras en comunidades, oficinas, industrias, etc.</p>
          </div>
          <div data-wow-delay="0.3s" class="wr right-mod wow fadeInLeft">
            <h6><a href="{{ url('/servicios-de-limpieza/de-comunidades') }}"><strong><i class="fas fa-users"></i> Limpieza de comunidades</strong></a></h6>
            <p>Limpieza de comunidades, portales, escaleras y todo tipo de edificios e instalaciones comunitarias.</p>
          </div>
          <div data-wow-delay="0.4s" class="wr wow fadeInRight">
            <h6><a href="{{ url('/servicios-de-limpieza/de-edificios') }}"><strong><i class="fas fa-building"></i> Limpieza de Edificios</strong></a></h6>
            <p>Limpieza y mantenimiento integral de edificios. Mantenimiento en general de edificios e instalaciones.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  @include('sections.home.garden-services')
</main>

<style>
  .bg-secondary.bg-round.bg-round_bot {
    background: transparent;
}
.bg-round_bot {
    overflow: hidden;
}
.bg-round {
    position: relative;
    z-index: 1;
}
.bg-round_bot:before {
    background: #fcfcfc;
    bottom: 0;
}
.bg-round:before {
    content: '';
    height: 1700px;
    width: 4000px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    position: absolute;
    left: 50%;
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    z-index: -1;
}
</style>