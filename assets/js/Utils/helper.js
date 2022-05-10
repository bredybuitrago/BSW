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

      // muestra un alert y al confirmar se refresca la pantalla
        alert_refresh: function (title = 'ok', text = 'Se realizó con exito', icon = 'success') {
            Swal.fire({
                title: title,
                html: text,
                icon: icon,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'continuar!'
            }).then((result) => {
                location.reload();
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
      },

      set_select: function(id_select, data, primer_opcion = null){
        let options = '';
          let contador = 0;
          if (primer_opcion) {
              options += `<option value="">${primer_opcion.primer_opcion}</option>`;
          }
          for (var i = 0; i < data.length; i++) {
              for (var j in data[i]) {
                  if (contador == 0) {
                      options += `<option value="${data[i][j]}">`;
                      contador = 1;
                  } else {
                      options += `${data[i][j]}</option>`;
                      contador = 0;
                  }
              }
          }
          $(`#${id_select}`).html(options);

      }

    



  };
  helper.init();
});