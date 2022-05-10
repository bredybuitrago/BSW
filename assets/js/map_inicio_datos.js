$(function () {
	map_datos = {
		init: function () {
			map_datos.events();
			map_datos.get_datos_mapa();

		},

		//Eventos de la ventana.
		events: function () {
			// $("#btn_registrar").click(map_datos.registrarAliado);
		},

		get_datos_mapa: function(){
			// console.log('cordenadas_locales')
			// console.log(cordenadas_locales)
			// $.post(base_url + '/Canchas/Get_all_locales_cordenades', {
			//     //data:  data
			// },
			// // función que recibe los datos
			// function(data) {
			// 	const obj = JSON.parse(data);
			// 	let coordinates;
			// 	var cord = [];
			// 	for (var i = 0; i < obj.length; i++) {
			// 		coordinates = {Lng: obj[i].cordenadas_lon, Lat: obj[i].cordenadas_lat};
			// 		cord.push(coordinates);
			// 	}
				
			// });
		}

  };
  map_datos.init();
});