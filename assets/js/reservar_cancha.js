$(function () {
	reservar = {
		init: function () {
			reservar.getDataLocal();
			reservar.events();
		},

		//Eventos de la ventana.
		events: function () {
			// $(".showModalServicios").click(reservar.showModal);
		},

		getDataLocal: function() {

			// get data local
			$.post(base_url + '/Canchas/get_data_local', {
				local_id : local_id
			},
			// función que recibe los datos
			function(data) {
				const local = JSON.parse(data);
				reservar.mostrarCarrusel(local.fotos);
				reservar.llenarIndicadoresFotos(local.fotos);

				console.log(local)
			});
		},
		

		mostrarCarrusel: function(fotos){
			let active = '';

			fotos.forEach(function(foto, indice_foto) {
				active = (indice_foto == 0)? "active" : "";
				$('#carousel-inner').append(
					`<div class="carousel-item ${active}"> <img class="d-block w-100" src="${base_url}${foto.ruta}" alt="Foto Local"> </div>`)
			});
		},

		llenarIndicadoresFotos: function (fotos){
			let active = '';

			fotos.forEach(function(foto, indice_foto) {
				active = (indice_foto == 0)? 'class="active"' : "";


				$('#carousel-indicators').append(
					`
						<li data-target="#carousel-example-1" data-slide-to="${indice_foto}" ${active}><img class="d-block w-100 img-fluid" src="${base_url}${foto.ruta}" alt="Foto Local" /></li>
					`)
			});
		}


	}
	reservar.init();
});