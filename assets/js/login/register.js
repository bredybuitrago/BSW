
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
          $('form').unbind('submit').submit();
          
          // // Enviar formulario
          // const data = {


          // }


          // $.post(base_url + '/Register/Register_user', {
          //       data:  data
          //   },
          //   // función que recibe los datos
          //   function(data) {
          //       // convertir el json a objeto de javascript
          //       const obj = JSON.parse(data);
          //       console.log(data);
          //       // ingeniero.printTableAsignadas(obj);
          //   }
          // );



        }



      }


  };
  register.init();
});