$(function () {
  helper = {
      init: function () {
          helper.events();
      },

      //Eventos de la ventana.
      events: function () {

      },

      validarFormulario: function(id_form){
        let valido = true;
        const inputs = document.querySelectorAll(`#${id_form} .required`);

        inputs.forEach(function(input){
          if(input.value == ''){
            input.classList.add('bc-red');
            valido = false;
          } else {
            input.classList.remove('bc-red');
          }
        });

        return valido;
      },

      isChecked: function(id_checkbox){
        let is_check = false;
        if ($(`#${id_checkbox}`).is(':checked') ) {
          is_check = true;      
        }
        return is_check;
      },

      alert: function(title = 'OK!', message, icon = 'success'){
        Swal.fire(
          title,
          message,
          icon
        );
      },

      alerRedirect: function(title = 'OK!', message, icon = 'success', url){
        Swal.fire({
          title: title,
          text: message,
          icon: icon,
          showDenyButton: false,
          showCancelButton: false,
          confirmButtonText: 'Comenzar!',
          allowOutsideClick: false,
          allowEscapeKey: false
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            window.location.href = url
          } 
        })
      },

      miniAlert: function(message = 'Acción cancelada', icon = 'error'){
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: icon,
          title: message
        })
      }



  };
  helper.init();
});