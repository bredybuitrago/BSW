$(function () {
	reservar = {

		diasDeshabilitados: [],
		hora_inicio_local: "",
		hora_final_local: "",

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
				console.log(local);
				reservar.hora_inicio_local = local.hora_inicio.replace(":00","");
				reservar.hora_final_local = local.hora_fin.replace(":00","");
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
				reservar.crearHorariosCanchas(canchas,fecha_calendario);
			});
		},

		crearHorariosCanchas: function(canchas, fecha_calendario){
			const es_hoy = fecha_calendario == moment().format("YYYY-MM-DD");
			const horas_toda_franja = ['12am','1am','2am','3am','4am','5am','6am','7am','8am','9am','10am','11am','12pm','1pm','2pm','3pm','4pm','5pm','6pm','7pm','8pm','9pm','10pm','11pm'];
			const horas_laborales = [];
			const indice_inicio = horas_toda_franja.indexOf(reservar.hora_inicio_local);
			const indice_final = horas_toda_franja.indexOf(reservar.hora_final_local);

			for (var i = indice_inicio; i < horas_toda_franja.length; i++) {
				if (i <= indice_final) {
					horas_laborales.push(horas_toda_franja[i]);
				}
			}

			let celda;
			let tabla = '';
			const hora_actual = moment().format('h');
			const franja_actual = moment().format('a');
			const horas = [12,1,2,3,4,5,6,7,8,9,10,11];
			const horas_franja_am = ['12am','1am','2am','3am','4am','5am','6am','7am','8am','9am','10am','11am'];
			const horas_franja_pm = ['12pm','1pm','2pm','3pm','4pm','5pm','6pm','7pm','8pm','9pm','10pm','11pm'];
			
			const posicion_hora_am = horas_franja_am.indexOf(`${hora_actual}${franja_actual}`);
			const posicion_hora_pm = horas_franja_pm.indexOf(`${hora_actual}${franja_actual}`);


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
			                     	tabla += `<td class="${( (es_hoy && (ihora_am < posicion_hora_am || posicion_hora_am == -1)) || (horas_laborales.indexOf(`${horas[ihora_am]}am`) == -1) )? "out-time": "td_hora"}" id="${cancha.cancha_id}_${horas[ihora_am]}_am" data-hour="${horas[ihora_am]}" data-franja="am" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">${horas[ihora_am]}</td>`;
			                    }
			                     
		                     	tabla +=  `<td class="franja_am">am <i class="far fa-sun"></i></td></tr> <tr>`

			                    for (var ihora_pm = 0; ihora_pm < horas.length; ihora_pm++) {
			                     	tabla += `<td class="${( (es_hoy && (ihora_pm < posicion_hora_pm) ) || (horas_laborales.indexOf(`${horas[ihora_pm]}pm`) == -1) ) ? "out-time": "td_hora"}" id="${cancha.cancha_id}_${horas[ihora_pm]}_pm" data-hour="${horas[ihora_pm]}" data-franja="pm" data-cancha_id="${cancha.cancha_id}" data-cancha_identificacion="${cancha.identificacion}">${horas[ihora_pm]}</td>`;
			                    }
			                      
	                    		tabla +=   `<td class="franja_pm">pm <i class="far fa-moon"></i></td></tr>

			                  </tbody>
			                </table>
		            	</fieldset>`


			});

			$('#canchas_horarios').append(tabla);
			canchas.forEach(function(cancha, indice_cancha){

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
			let tr;

			let maximo = 1;


			const horas_toda_franja = ['12_am','1_am','2_am','3_am','4_am','5_am','6_am','7_am','8_am','9_am','10_am','11_am','12_pm','1_pm','2_pm','3_pm','4_pm','5_pm','6_pm','7_pm','8_pm','9_pm','10_pm','11_pm'];
			let indice_hour = horas_toda_franja.indexOf(`${hora}_${franja}`);


			console.log('`${hora}${franja}` ' +  `${hora}${franja}`)

			console.log('indice_hour ' + indice_hour);

			while(maximo < 4){
				indice_hour += 1;
				tr = $(`#${cancha_id}_${horas_toda_franja[indice_hour]}`);

				if (tr.hasClass('reservado') || tr.hasClass('out-time') || tr.length == 0) {
					break;
				}
				maximo += 1;
			}

			console.log('maximo ' + maximo);


			// if (hora == '9' && franja == 'pm') {
			// 	maximo = '3';
			// } else if (hora == '10' && franja == 'pm') {
			// 	maximo = '2';
			// } else if (hora == '11' && franja == 'pm') {
			// 	maximo = '1';
			// }

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
					  		const datos = {
					  			cancha_id: cancha_id,
					  			hora_inicio: hora,
					  			franja_inicio: franja,
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