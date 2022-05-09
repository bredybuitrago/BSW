$(function () {
	registrar_servicio = {
		init: function () {
			registrar_servicio.events();
			registrar_servicio.llenar_selects();


		},

		//Eventos de la ventana.
		events: function () {
			$("#btn_guardar_local").click(registrar_servicio.registrar_local);
			$("#btn_guardar_cancha").click(registrar_servicio.registrar_cancha);
			$("#ddl_select_local").change(registrar_servicio.llenar_formulario_local);
		},

		llenar_selects: function(){
			// llenar barrio
			$.post(base_url + '/Canchas/Get_all_canchas', {},
			// función que recibe los datos
			function(data) {
				const canchas = JSON.parse(data);
				helper.set_select('ddl_barrio', canchas, {primer_opcion: 'Seleccione...'});
				registrar_servicio.llenar_formulario_local();
			});

			// llenar tipo de cancha
			$.post(base_url + '/Canchas/Get_all_tipo_canchas', {},
			// función que recibe los datos
			function(data) {
				const canchas = JSON.parse(data);
				helper.set_select('ddl_tipo_cancha', canchas, {primer_opcion: 'Seleccione...'});
				registrar_servicio.llenar_formulario_local();
			});

			// llenar ddl local
			$.post(base_url + '/Canchas/Get_all_local_by_empresa_session', {},
			// función que recibe los datos
			function(data) {
				const locales = JSON.parse(data);
				helper.set_select('ddl_select_local', locales);

				$('#ddl_select_local').append('<option value="0">Crear Nuevo Local</option>');
				registrar_servicio.llenar_formulario_local();
			});

		},
		

		registrar_local: function(){
			let flag = true;

			if(!helper.validarFormulario("form_registar_local")){
	          helper.miniAlert('Completa los campos obligatorios', 'error');
	          flag = false;
        	}

        	if ($('#txt_coordenadas_lat').val() == '') {
        		helper.miniAlert('Ubique en el mapa el punto donde se encuentra el local', 'error');
				flag = false;	
        	}
        	
			// Enviar formulario
	        if (flag) {
	        	let dias_servicio = '|';
	        	$('.dias_servicio:checked').each(function() {
					dias_servicio += $( this ).val() + '|';
				});

				const data = {
					dias: dias_servicio,
					nombre_local: $("#txt_nombre_local").val(),
					hora_inicio: $("#ddl_hora_inicio").val() + $("#ddl_franja_inicio").val(),
					hora_fin: $("#ddl_hora_fin").val() + $("#ddl_franja_fin").val(),
					barrio: $("#ddl_barrio").val(),
					numero_canchas: $("#txt_cantidad_canchas").val(),
					contacto: $("#txt_telefono_administracion").val(),
					correo: $("#txt_correo_local").val(),
					administrador: $("#txt_nombre_administrador_del_local").val(),
					direccion: $("#txt_direccion").val(),
					coordenadas_lat: $("#txt_coordenadas_lat").val(),
					coordenadas_lon: $("#txt_coordenadas_lng").val(),
				}

				$.post(base_url + '/Canchas/Register_local', {
				    data:  data
				},
				// función que recibe los datos
				function(data) {
					const obj = JSON.parse(data);
					if (obj.success) {
						helper.alert_refresh('OK!', obj.message, 'success')
					} else {
						helper.alert_refresh('Error!', obj.message, 'error');
					}

				});
			}

		},

		registrar_cancha: function(){
			let flag = true;

			if(!helper.validarFormulario("form_register_cancha")){
	          helper.miniAlert('Completa los campos obligatorios', 'error');
	          flag = false;
	          return;
        	}

        	const local_id = $("#ddl_select_local").val();
        	if (local_id == 0) {
        		helper.alert('Atención', 'debes seleccionar o crear un local', 'warning');
        		$('#ddl_select_local').addClass('is-invalid');
        		return;
        	}

        	// Enviar formulario
	        if (flag) {
				const data = {
					local_id: local_id,
		        	identificacion: $("#txt_identificacion").val(),
					tipo_cancha: $("#ddl_tipo_cancha").val(),
					tarifa_por_hora: $("#txt_tarifa_por_hora").val(),
					observacion: $("#txt_observaciones").val(),
					estado_id: $("#cancha_activa").prop('checked')
				}

				$.post(base_url + '/Canchas/Register_cancha', {
				    data:  data
				},
				// función que recibe los datos
				function(data) {
					const obj = JSON.parse(data);
					if (obj.success) {
						helper.alert_refresh('OK!', obj.message, 'success')
					} else {
					helper.alert('Error!', obj.message, 'error');
					}

				});
			}

		},

		llenar_formulario_local: function () {
			const id_local = $("#ddl_select_local").val();

			if (id_local == 0) {
				registrar_servicio.reset_formulario_local();
				registrar_servicio.unlock_formulario_local();
			} else {
				// llenar el formulario del local

				const data = {
					local_id: id_local					
				}

				$.post(base_url + '/Canchas/Get_local_by_local_id', {
					data:  data
				},
				// función que recibe los datos
				function(data) {
					const obj = JSON.parse(data);
					registrar_servicio.set_formulario_local(obj);
					registrar_servicio.lock_formulario_local();
				});
			}


		},

		reset_formulario_local: function(){
			$("#txt_nombre_local").val('');
			$("#ddl_hora_inicio").val('') ;
			$("#ddl_franja_inicio").val('pm');
			$("#ddl_hora_fin").val('') ;
			$("#ddl_franja_fin").val('pm');
			$("#ddl_barrio").val('');
			$("#txt_cantidad_canchas").val('');
			$("#txt_telefono_administracion").val('');
			$("#txt_correo_local").val('');
			$("#txt_nombre_administrador_del_local").val('');
			$("#txt_direccion").val('');
			$("#txt_coordenadas_lat").val('');
			$("#txt_coordenadas_lng").val('');
			$('.dias_servicio').each(function() {
				$( this ).prop('checked', true) ;
			});
			clearing();
		},

		set_formulario_local: function(data){
			$("#txt_nombre_local").val(data.nombre_local);
			$("#ddl_hora_inicio").val(data.horario.hora_inicio.replace('am', '').replace('pm', ''));
			$("#ddl_franja_inicio").val(data.horario.hora_inicio.substr(-2));
			$("#ddl_hora_fin").val(data.horario.hora_fin.replace('am', '').replace('pm', '')) ;
			$("#ddl_franja_fin").val(data.horario.hora_fin.substr(-2));
			$("#ddl_barrio").val(data.barrio_id);
			$("#txt_cantidad_canchas").val(data.numero_canchas);
			$("#txt_telefono_administracion").val(data.contacto);
			$("#txt_correo_local").val(data.correo);
			$("#txt_nombre_administrador_del_local").val(data.administrador);
			$("#txt_direccion").val(data.direccion);
			$("#txt_coordenadas_lat").val(data.cordenadas_lat);
			$("#txt_coordenadas_lng").val(data.cordenadas_lon);

			$('.dias_servicio').each(function() {
				$( this ).prop('checked', false) ;
			});

			const dias = data.horario.dias.split('|');

			for (var i = 0; i < dias.length; i++) {
				if (!dias[i] == '') {
					$(`#${dias[i]}`).prop('checked', true);
				}
			}

			clearing();
			const coordinates = {lng: data.cordenadas_lon , lat: data.cordenadas_lat }
			c.push(coordinates);
			createMarker();
		},

		lock_formulario_local: function(){
			$("#txt_nombre_local").attr('disabled', true);
			$("#ddl_hora_inicio").attr('disabled', true);
			$("#ddl_franja_inicio").attr('disabled', true);
			$("#ddl_hora_fin").attr('disabled', true);
			$("#ddl_franja_fin").attr('disabled', true);
			$("#ddl_barrio").attr('disabled', true);
			$("#txt_cantidad_canchas").attr('disabled', true);
			$("#txt_telefono_administracion").attr('disabled', true);
			$("#txt_correo_local").attr('disabled', true);
			$("#txt_nombre_administrador_del_local").attr('disabled', true);
			$("#txt_direccion").attr('disabled', true);
			$("#btn_guardar_local").attr('disabled', true);			

			$('.dias_servicio').each(function() {
				$( this ).attr('disabled', true) ;
			});



		},

		unlock_formulario_local: function(){
			$("#txt_nombre_local").attr('disabled', false);
			$("#ddl_hora_inicio").attr('disabled', false);
			$("#ddl_franja_inicio").attr('disabled', false);
			$("#ddl_hora_fin").attr('disabled', false);
			$("#ddl_franja_fin").attr('disabled', false);
			$("#ddl_barrio").attr('disabled', false);
			$("#txt_cantidad_canchas").attr('disabled', false);
			$("#txt_telefono_administracion").attr('disabled', false);
			$("#txt_correo_local").attr('disabled', false);
			$("#txt_nombre_administrador_del_local").attr('disabled', false);
			$("#txt_direccion").attr('disabled', false);
			$("#btn_guardar_local").attr('disabled', false);		

			$('.dias_servicio').each(function() {
				$( this ).attr('disabled', false) ;
			});
		}


  };
  registrar_servicio.init();
});
  