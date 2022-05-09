$(function () {
	login = {
		init: function () {
			login.events();
			login.showMessage();
			
		},

		//Eventos de la ventana.
		events: function () {
			$("#btn_submit_form").click(login.login_user);
		},

		showMessage: function(){
			const msg = JSON.parse(response);
			if (msg) {
				helper.alert('Error!', msg.msg.message, 'error');
			}
		},

		login_user: function(){
			// e.preventDefault();
			let flag = true;

			if(!helper.validarFormulario("login_form")){
				helper.miniAlert('Completa los campos obligatorios', 'error');
				flag = false;
				return;
			}

			$("#login_form").submit();
        

			// if (flag) {

			// 	// Enviar formulario
			// 	const data = {
			// 		correo: $("#correo").val(),
			// 		password: $("#Password").val()
			// 	}
			// 	$.post(base_url + '/Register/login_user', {
	  //               data:  data
	  //           },
	  //           // función que recibe los datos
	  //           function(data) {
	  //             const obj = JSON.parse(data);
	  //             if (obj.success) {
	  //               // helper.alerRedirect('OK!', obj.message, 'success', base_url + '/Login')




	  //             } else {
	  //               helper.alert('Error!', obj.message, 'error');
	  //             }
	  //           }
	  //         );
			// }







		}


  };
  login.init();
});