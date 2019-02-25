<div class="row">
	<div class="col-sm-12">
		<div id="map" style="width: 100%; height: 400px;"></div>
	</div>
</div>
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<h5 class="text-center">Teléfono</h5>
			<p class="text-center">(81) 81 2050 2030<br><b>(81) 81 2050 2030</b></p>
		</div>
		<div class="col-sm-4">
			<h5 class="text-center">Dirección</h5>
			<p class="text-center">Av. Siempre Viva #223<br>Col. Industrial<br>Monterrey, N.L.</p>
		</div>
		<div class="col-sm-4">
			<h5 class="text-center">Correo Electrónico</h5>
			<p class="text-center">contacto@ly.mx</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h4 class="text-center text-orange">Transforma tus espacios con nosotros, contáctanos.</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="">Nombre*</label>
				<input type="text" class="form-control" style="background: #ccc;">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="">Correo Electrónico*</label>
				<input type="email" class="form-control" style="background: #ccc;">
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group">
				<textarea name="" id="" cols="30" rows="10" placeholder="Escribenos tus dudas" class="form-control" style="background: #ccc;"></textarea>
			</div>
		</div>
		<div class="col-sm-12">
			<p class="text-right">
				<a href="" class="btn btn-orange">Enviar</a>
			</p>
		</div>
	</div>
</div>
<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 25.724418, lng: -100.237035},
          zoom: 15
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFCP13AmeMjs7qC0kJoT7vMuDAnkM9x8&callback=initMap" async defer></script>