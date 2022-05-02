$(function () {
	formulario_servicios = {
		init: function () {
			formulario_servicios.events();
		},

		//Eventos de la ventana.
		events: function () {
			$(".showModalServicios").click(formulario_servicios.showModal);
			$("#btn_registrar").click(formulario_servicios.registrarAliado);
		},

		showModal: function(){
			$("#modal-xl").modal('show');
		},

		registrarAliado: function(){
			let flag = true;

			if(!helper.validarFormulario("regsiter_form")){
	          helper.miniAlert('Completa los campos obligatorios', 'error');
	          flag = false;
        	}

        	if ($("#txtPassword1").val() != $("#txtPassword2").val() && flag) {
				helper.miniAlert('Las contraseñas deben ser iguales', 'error');
				flag = false;
	        }

	        if(!helper.isChecked('agreeTerms') && flag){
				helper.miniAlert('Debes aceptar los términos', 'info'); 
				flag = false;
	        }

	        if (flag) {
				// Enviar formulario
				const data = {
					nombre_empresa: $("#txtNombreEmpresa").val(),
					nit: $("#txtNit").val(),
					correo_empresa: $("#txtEmail").val(),
					contacto_empresa: $("#txtTelefonoEmpresa").val(),
					nombre_representante: $("#txtRepresentante").val(),
					contacto_representante: $("#txtContactoRepresentante").val(),
					usuario: $("#txtNombreUsuario").val(),
					password: $("#txtPassword1").val()
				}

				$.post(base_url + '/Register/Register_ally_user', {
				    data:  data
				},
				// función que recibe los datos
				function(data) {
					const obj = JSON.parse(data);
					console.log(obj);
					if (obj.success) {
						helper.alerRedirect('OK!', obj.message, 'success', base_url + '/Login')
					} else {
					helper.alert('Error!', obj.message, 'error');
					}

				    // ingeniero.printTableAsignadas(obj);
				});



			}

		},

  };
  formulario_servicios.init();
});