$(function () {
  register = {
      init: function () {
          register.events();
      },

      //Eventos de la ventana.
      events: function () {
        $('#btn_register').onClick(register_user);

        // $(".showModal").click(register.showModal)
      },

      showModal: function(){
 
      },

      register_user: function(){
        alert("Hola inmundo");
      }


  };
  register.init();
});