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
				reservar.crearHorariosCanchas(canchas);
			});
		},

		crearHorariosCanchas: function(canchas){
			let celda;
			let tabla = '';
			const hora_actual = moment().format('h');
			const franja_actual = moment().format('a');
			const horas = [12,1,2,3,4,5,6,7,8,9,10,11];
			const horas_franja_am = ['12am','1am','2am','3am','4am','5am','6am','7am','8am','9am','10am','11am'];
			const horas_franja_pm = ['12pm','1pm','2pm','3pm','4pm','5pm','6pm','7pm','8pm','9pm','10pm','11pm'];
			
			const posicion_hora_am = horas_franja_am.indexOf(`${hora_actual}${franja_actual}`);
			const posicion_hora_pm = horas_franja_pm.indexOf(`${hora_actual}${franja_actual}`);

			console.log('posicion_hora_am:' + ' ' + posicion_hora_am)
			console.log('posicion_hora_pm:' + ' ' + posicion_hora_pm)


			console.log(canchas)
			$('#canchas_horarios').html('');
			canchas.forEach(function(cancha, indice_cancha){
					
				tabla += `<fieldset class="border p-2 single-product-details fs_canchas">
			                <legend  class="float-none w-auto p-2">${cancha.identificacion}</legend>
			                <h5>${cancha.tipo_cancha}</h5>              
			                <p>${cancha.observacion}</p>
			                <table class="table table-bordered text-center tabla_standar table-sm">
			                  <tbody>
			                    <tr>`

			                    for (var ihora_am = 0; ihora_am < horas.length; ihora_am++) {
			                    	
			                    	// console.log(ihora_am + " " +  posicion_hora_am + " " +"am")
			                    		
			                     	tabla += `<td class="${(ihora_am < posicion_hora_am || posicion_hora_am == -1)? "out-time": "td_hora"}" id="${cancha.cancha_id}_${horas[ihora_am]}_am" data-hour="${horas[ihora_am]}" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">${horas[ihora_am]}</td>`;
			                     
			                    }
			                     
		                     	tabla +=  `<td class="franja_am">am <i class="far fa-sun"></i></td></tr> <tr>`

			                    for (var ihora_pm = 0; ihora_pm < horas.length; ihora_pm++) {
			                     	
			                    	// console.log(ihora_pm + " " +  posicion_hora_pm + " " +"pm")
			                     	tabla += `<td class="${(ihora_pm < posicion_hora_pm )? "out-time": "td_hora"}" id="${cancha.cancha_id}_${horas[ihora_pm]}_pm" data-hour="${horas[ihora_pm]}" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">${horas[ihora_pm]}</td>`;
			                    
			                    }
			                      
	                    		tabla +=   `<td class="franja_pm">pm <i class="far fa-moon"></i></td></tr>

			                  </tbody>
			                </table>
		            	</fieldset>`

				$('#canchas_horarios').append(tabla);

				for (var i = 0; i < canchas[indice_cancha].reservas.length; i++) {
					celda = $(`#${cancha.cancha_id}_${canchas[indice_cancha].reservas[i].hora}_${canchas[indice_cancha].reservas[i].franja}`);
					celda.addClass('reservado');
					celda.removeClass('td_hora');

				}

			});

			
			


		},

		hora_click: function(){
			const hora = $(this).data('hour');
			const franja = $(this).data('franja');
			const cancha_id = $(this).data('cancha_id');
			const cancha_identificacion = $(this).data('cancha_identificacion');
			const nombre_local = $('#h2_nombre_local').text();

			let maximo = '4';

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
		    	if (data.isConfirmed) {
		    		const date = $('#datetimepicker13').datetimepicker('viewDate');
		    		const fecha_calendario = moment(date._d).format("LL");
		    		const fecha = moment(date._d).format("YYYY-MM-DD");
		    		Swal.fire({
					  	html: `
			        		<h2 class="swal2-title" id="swal2-title" style="display: block;">¡Confirma estos datos!</h2>
			        		<label for="swal2-input" class="swal2-input-label">Fecha : ${fecha_calendario}</label>
			        		<label for="swal2-input" class="swal2-input-label">Hora inicio: ${hora}:00${franja}</label>
			        		<label for="swal2-input" class="swal2-input-label">Cantidad horas: ${data.value}</label>
			        		<label for="swal2-input" class="swal2-input-label">${nombre_local} | cancha: ${cancha_identificacion}</label>
			        	`,
					  	icon: 'warning',
					  	showCancelButton: true,
					  	confirmButtonColor: '#1f844b',
					  	cancelButtonColor: '#d33',
					  	confirmButtonText: 'OK, Separar cancha!',
					  	cancelButtonText: 'Cancelar',
					}).then((result) => {
					  	if (result.isConfirmed) {

					  		//hora_fin = helper.calcular_hora_fin(hora, franja, data.value);

					  		const datos = {
					  			cancha_id: cancha_id,
					  			hora_inicio: hora,
					  			franja_inicio: franja,
					  			// hora_fin: hora_fin.hora_final,
					  			// franja_fin: hora_fin.franja_final,
					  			fecha: fecha,
					  			cantidad_horas: data.value
					  		};



					    	reservar.setReservarCanchaHorario(datos);
					  	} else {
					  		helper.miniAlert();
					  	}
					})
		    	}

		    });

		},

		setReservarCanchaHorario: function(data){

			$.post(base_url + '/Reserva/set_reservar_cancha', {
				data : data				
			},
			// función que recibe los datos
			function(data) {
				const response = JSON.parse(data);
				if(response.success)				
					helper.alert('OK!', 'Espacio reservado con exito!', 'success');
				else{
					helper.alert('Ooops!', response.message, 'error');
					console.log(response.error_detail);
				}

				reservar.listarCanchasHorarios();

			});

		}


	}
	reservar.init();
});