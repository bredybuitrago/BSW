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
                console.log(obj)

                display.printTableCanchasDisponibles(obj);
            });
		},

		printTableCanchasDisponibles: function(obj){
			const order_by = $('#ddl_order_by').val();

			obj.each(function( cancha ) {
				//TODO
			 	$('#div_content_canchas').append()
			});
		}
	
	

  };
  display.init();
});