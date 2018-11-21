<div class="container">
	<div class="py-5">
		<h2 data-wow-delay="0.5s" class="text-center text-secondary wow fadeInDown">Formulario de contacto.</h2>
		<div class="my-2 pb-4">
      	<div data-wow-delay="0.3s" class="hexagon hexagon1 wow zoomInDown" >
      	  <div class="hexagon-in1">
      	    <div class="hexagon-in2" style="background-color: #40acff"></div>
      	  </div>
      	</div>
      </div>
		<form role="form" name="contacto_form" id="contacto_form" novalidate class="my-4">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<div class="row py-1">
				<div data-wow-delay="0.1s"  class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp" >
					<input class="form-control my-4" type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido">
				</div>
				<div data-wow-delay="0.2s" class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
					<input class="form-control my-4"  type="mail" name="email" id="email" placeholder="Correo electrónico">
				</div>
				<div data-wow-delay="0.3s" class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
					<input class="form-control my-4"  type="text" name="telefono" id="telefono" placeholder="Móvil">
				</div>
			</div>
			<div data-wow-delay="0.4s" class="col p-0 wow fadeInUp">
				<textarea class="form-control"  name="mensaje" id="mensaje" rows="5" placeholder="Escríbenos tu consulta"></textarea>
			</div>
		</form>
		<div class="row">
    		<div data-wow-delay="0.5s" class="col-12 text-center py-3 wow fadeInUp">
      			<button
					id="boton-enviar" 
		            class="g-recaptcha btn btn-primary btn btn-outline-primary btn-md " 
		            data-sitekey="6LcJe3oUAAAAAJbC2z-WwSsv0C6gnY62P1JAnvF6"
		            data-callback="enviar_form" 
      			>Enviar</button>
    		</div>
  		</div>
	</div>
</div>


