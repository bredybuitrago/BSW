$(function () {
	reservar = {

		diasDeshabilitados: [],

		init: function () {
			reservar.getDataLocal();
			reservar.events();
		},



		//Eventos de la ventana.
		events: function () {
			$('#datetimepicker13').on("change.datetimepicker", reservar.listarCanchasHorarios);
		},

		getDataLocal: function() {
			// get data local
			$.post(base_url + '/Canchas/get_data_local', {
				local_id : local_id
			},
			// función que recibe los datos
			function(data) {
				const local = JSON.parse(data);
				console.log(local)
				reservar.mostrarCarrusel(local.fotos);
				reservar.llenarIndicadoresFotos(local.fotos);
				reservar.llenarDatosLocal(local);

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
		},

		llenarDatosLocal: function(local){
			$('#p_descripcion').text(local.descripcion);
			$('#h2_nombre_local').text(local.nombre_local);
			$('#h5_barrio').text(local.barrio);


			let diasDeshabilitados = [0,1,2,3,4,5,6];

			const diasQueLabora = local.dias.split("|");

			diasQueLabora.forEach(function(dia, indiceDia){
				switch(dia) {
				  case "domingo":
				    diasDeshabilitados[0] = -1;
				    break;
				  case "lunes":
				    diasDeshabilitados[1] = -1;
				    break;
				  case "martes":
				    diasDeshabilitados[2] = -1;
				    break;
				  case "miercoles":
				    diasDeshabilitados[3] = -1;
				    break;
				  case "jueves":
				    diasDeshabilitados[4] = -1;
				    break;
				  case "viernes":
				    diasDeshabilitados[5] = -1;
				    break;
				  case "sabado":
				    diasDeshabilitados[6] = -1;
				    break;
				 
				}
			});

			reservar.diasDeshabilitados = diasDeshabilitados.filter((diaDeshabilitado, indice) => diaDeshabilitado != -1);

			calendario = $('#datetimepicker13').datetimepicker({
          inline: true,
          format: 'L',
          daysOfWeekDisabled: reservar.diasDeshabilitados,
          locale: moment.locale('es'),
          minDate: new Date()
      });

		},

		listarCanchasHorarios: function(){
			const date = $('#datetimepicker13').datetimepicker('viewDate');			
			const fecha_calendario = moment(date._d).format("YYYY-MM-DD");
			const dia_semana = date.days();

			// get data canchas del local
			$.post(base_url + '/Canchas/get_data_canchas_local', {
				local_id : local_id,
				fecha: fecha_calendario
			},
			// función que recibe los datos
			function(data) {
				const obj = JSON.parse(data);
				console.log(obj)
				
			});



		}


	}
	reservar.init();
});