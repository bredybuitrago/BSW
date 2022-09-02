$(function () {
	display = {
		init: function () {
			display.getCanchas();
			display.events();
		},

		//Eventos de la ventana.
		events: function () {
			// $(".showModalServicios").click(display.showModal);
		},

		getCanchas: function(){

			$.post(base_url + '/Canchas/Get_all_canchas_activas',
            {
                order_by: $("#ddl_order_by").val()
            },
            function (data) {
                const obj = JSON.parse(data);
                
               

                // display.printTableCanchasDisponibles(obj.canchas);
            });
		}
	
	

  };
  display.init();
});