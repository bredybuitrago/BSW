
$(function () {
  register = {
      init: function () {
          register.events();
      },

      //Eventos de la ventana.
      events: function () {
        $("form").submit(register.register_user);

        // $(".showModal").click(register.showModal)
      },

      showModal: function(){
 
      },

      register_user: function(e){
        e.preventDefault();
        let flag = true;
        
        if(!helper.validarFormulario("regsiter_form")){
          helper.miniAlert('Completa los campos obligatorios', 'error');
          flag = false;
        }
        

        if ($("#password").val() != $("#password_2").val() && flag) {
          helper.miniAlert('Las contraseñas deben ser iguales', 'error');
          flag = false;
        }

        if(!helper.isChecked('agreeTerms') && flag){
          helper.miniAlert('Debes aceptar los términos', 'info'); 
          flag = false;
        }

        if (flag) {
          // $('form').unbind('submit').submit();
          
          // Enviar formulario
          const data = {
            nombre: $("#nombre").val(),
            usuario: $("#usuario").val(),
            correo: $("#correo").val(),
            password: $("#password").val()

          }


          $.post(base_url + '/Register/Register_user', {
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
            }
          );



        }



      }


  };
  register.init();
});