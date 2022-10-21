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
			$('#canchas_horarios').on('click','td.td_hora', reservar.hora_click);
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
			$('#h2_nombre_local').text("LOCAL: " + local.nombre_local);
			$('#h5_barrio').text("BARRIO: " + local.barrio);


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
				const canchas = JSON.parse(data);
				console.log(canchas)
				reservar.crearHorariosCanchas(canchas);
			});
		},

		crearHorariosCanchas: function(canchas){
			$('#canchas_horarios').html('');
			canchas.forEach(function(cancha, indice_cancha){
				$('#canchas_horarios').append(
					`
					<fieldset class="border p-2 single-product-details fs_canchas">
		                <legend  class="float-none w-auto p-2">${cancha.identificacion}</legend>
		                <h5>${cancha.tipo_cancha}</h5>              
		                <p>${cancha.observacion}</p>
		                <table class="table table-bordered text-center tabla_standar table-sm">
		                  <tbody>
		                    <tr>
		                      <td class="td_hora" data-hour="12" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">12</td>
		                      <td class="td_hora" data-hour="1" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">1</td>
		                      <td class="td_hora" data-hour="2" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">2</td>
		                      <td class="td_hora" data-hour="3" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">3</td>
		                      <td class="td_hora" data-hour="4" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">4</td>
		                      <td class="td_hora" data-hour="5" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">5</td>
		                      <td class="td_hora" data-hour="6" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">6</td>
		                      <td class="td_hora" data-hour="7" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">7</td>
		                      <td class="td_hora" data-hour="8" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">8</td>
		                      <td class="td_hora" data-hour="9" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">9</td>
		                      <td class="td_hora" data-hour="10" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">10</td>
		                      <td class="td_hora" data-hour="11" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">11</td>
		                      <td class="franja_am">am <i class="far fa-sun"></i></td>
		                    </tr>
		                    <tr>
		                      <td class="td_hora" data-hour="12" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">12</td>
		                      <td class="td_hora" data-hour="1" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">1</td>
		                      <td class="td_hora" data-hour="2" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">2</td>
		                      <td class="td_hora" data-hour="3" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">3</td>
		                      <td class="td_hora" data-hour="4" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">4</td>
		                      <td class="td_hora" data-hour="5" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">5</td>
		                      <td class="td_hora" data-hour="6" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">6</td>
		                      <td class="td_hora" data-hour="7" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">7</td>
		                      <td class="td_hora" data-hour="8" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">8</td>
		                      <td class="td_hora" data-hour="9" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">9</td>
		                      <td class="td_hora" data-hour="10" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">10</td>
		                      <td class="td_hora" data-hour="11" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">11</td>
		                      <td class="franja_pm">pm <i class="far fa-moon"></i></td>
		                    </tr>

		                  </tbody>
		                </table>
		            </fieldset>
					`
				);


			});
		},

		hora_click: function(){
			const hora = $(this).data('hour');
			const franja = $(this).data('franja');
			const cancha_id = $(this).data('cancha_id');
			const cancha_identificacion = $(this).data('cancha_identificacion');
			const nombre_local = $('#h2_nombre_local').text();

			let maximo = '4';

			console.log(hora)
			console.log(franja)
			if (hora == '9' && franja == 'pm') {
				maximo = '3';
			} else if (hora == '10' && franja == 'pm') {
				maximo = '2';
			} else if (hora == '11' && franja == 'pm') {
				maximo = '1';
			}

			Swal.fire({
		        html: `
		        	<h2 class="swal2-title" id="swal2-title" style="display: block;">¿Cuántas horas quieres reservar?</h2>
		        	<label for="swal2-input" class="swal2-input-label">ingresa máximo ${maximo}</label>
		        	<input type="number" value="1" class="swal2-input" id="range-value" max="${maximo}" min="1" style="text-align: center;">
		        `,
		        icon: 'question',
		        confirmButtonText: 'Confirmar',
		        showCancelButton: true,
		       	cancelButtonText: 'Cancelar',
		       	confirmButtonColor: '#1f844b',
  				//cancelButtonColor: '#d33',
  				width: '800px',
		        preConfirm: function() {
		            return new Promise((resolve, reject) => {
		                resolve(
		                    $('input[type="number"]').val()
		                );
		            });
		        }
		    }).then((data) => {
		        console.log(data);
		    	if (data.isConfirmed) {
		    		const date = $('#datetimepicker13').datetimepicker('viewDate');
		    		const fecha_calendario = moment(date._d).format("YYYY-MM-DD");
		    		Swal.fire({
					  	html: `
			        		<h2 class="swal2-title" id="swal2-title" style="display: block;">¡Confirma estos datos!</h2>
			        		<label for="swal2-input" class="swal2-input-label">fecha : ${fecha_calendario}</label>
			        		<label for="swal2-input" class="swal2-input-label">Hora inicio: ${hora}:00${franja}</label>
			        		<label for="swal2-input" class="swal2-input-label">Cantidad horas: ${data.value}</label>
			        		<label for="swal2-input" class="swal2-input-label">${nombre_local} | cancha: ${cancha_identificacion}</label>
			        	`,
					  	icon: 'warning',
					  	showCancelButton: true,
					  	confirmButtonColor: '#1f844b',
					  	cancelButtonColor: '#d33',
					  	confirmButtonText: 'Sí, Separar cancha!',
					  	cancelButtonText: 'Cancelar',
					}).then((result) => {
					  	if (result.isConfirmed) {
					    	Swal.fire(
						     	'Deleted!',
						      	'Your file has been deleted.',
						      	'success'
						    )
					  	} else {
					  		helper.miniAlert();
					  	}
					})
		    	}


		    });




		}


	}
	reservar.init();
});