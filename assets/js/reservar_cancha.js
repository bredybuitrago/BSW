$(function () {
	reservar = {
		init: function () {
			reservar.getDataLocal();
			reservar.events();
		},

		//Eventos de la ventana.
		events: function () {
			// $(".showModalServicios").click(reservar.showModal);
		},

		getDataLocal: function() {

			// const data = {};
			// get data local
			$.post(base_url + '/Canchas/Get_data_local', {
				local_id : local_id
			},
			// función que recibe los datos
			function(data) {
				const local = JSON.parse(data);
				consoler.log(local)
			});


			
		}
		
	}
	reservar.init();
});