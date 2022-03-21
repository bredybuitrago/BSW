$(function () {
	login = {
		init: function () {
			login.events();
		},

		//Eventos de la ventana.
		events: function () {
			$("form").submit(login.login_user);

			// $(".showModal").click(login.showModal)
		},

		showModal: function(){

		},

		login_user: function(e){
			e.preventDefault();
			let flag = true;

			if(!helper.validarFormulario("login_form")){
				helper.miniAlert('Completa los campos obligatorios', 'error');
				flag = false;
				return;
			}
        
			if (flag) {

				// Enviar formulario
				const data = {
					correo: $("#correo").val(),
					password: $("#Password").val()
				}
				$.post(base_url + '/Register/login_user', {
	                data:  data
	            },
	            // función que recibe los datos
	            function(data) {
	              const obj = JSON.parse(data);
	              console.log(obj);
	              if (obj.success) {
	              	console.log(obj);
	                // helper.alerRedirect('OK!', obj.message, 'success', base_url + '/Login')
	              } else {
	                helper.alert('Error!', obj.message, 'error');
	              }

	                // ingeniero.printTableAsignadas(obj);
	            }
	          );
			}







		}


  };
  login.init();
});