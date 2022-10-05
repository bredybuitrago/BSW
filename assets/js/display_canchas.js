$(function () {
	display = {
		init: function () {
			display.getLocales();
			display.getBarriosCanchas();
			display.events();
		},

		//Eventos de la ventana.
		events: function () {
			// $(".showModalServicios").click(display.showModal);
		},

		getLocales: function(){

			$.post(base_url + '/Canchas/Get_all_locales_activos',
            {
                order_by: $("#ddl_order_by").val()
            },
            function (data) {
                const obj = JSON.parse(data);
                display.printTableCanchasDisponibles(obj);
                display.printTableCanchasDisponiblesList(obj);
            });
		},

		printTableCanchasDisponibles: function(canchas){
			canchas.forEach(function(cancha) {
				$('#div_content_canchas').append(
					`<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
					    <div class="products-single fix">
					      <div class="box-img-hover">
					        <div class="type-lb">
					          <p class="sale">${cancha.barrio}</p>
					        </div>
					        <img src="${base_url}${cancha.ruta}" class="img-fluid" alt="${cancha.nombre_local}" style="max-height: 225px;">
					        <div class="mask-icon">
					          <ul>
					            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
					            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
					            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="far fa-heart"></i></a></li>
					          </ul>
					          <a class="cart" href="${base_url}Canchas/Reservar_cancha/${cancha.local_id}">Reservar</a>
					        </div>
					      </div>
					      <div class="why-text">
					        <h4>Cantidad de canchas: ${cancha.numero_canchas}</h4>
					        <h5>Local "${cancha.nombre_local}"</h5>
					      </div>
					    </div>
					 </div>`)

			});

		},

		printTableCanchasDisponiblesList: function(canchas){
			canchas.forEach(function(cancha) {
				$('#list-view').append(

					`<div class="list-view-box">
                      <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                          <div class="products-single fix">
                            <div class="box-img-hover">
                              <div class="type-lb">
                                <p class="new">${cancha.barrio}</p>
                              </div>
                              <img src="${base_url}${cancha.ruta}" class="img-fluid" alt="${cancha.nombre_local}">
                              <div class="mask-icon">
                                <ul>
                                  <li><a href="#" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="far fa-heart"></i></a></li>
                                </ul>

                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                          <div class="why-text full-width">
                            <h4>${cancha.nombre_local}</h4>
                            <h5>${cancha.numero_canchas} Canchas</h5>
                            <p>${cancha.descripcion}</p>
                            <a class="btn hvr-hover" href="${base_url}Canchas/Reservar_cancha/${cancha.local_id}">Reservar</a>
                          </div>
                        </div>
                      </div>
                    </div>`)
		    });
		},

		getBarriosCanchas: function (){
			$.post(base_url + '/Canchas/Get_barrios_locales',
      {
      },
      function (data) {
          const obj = JSON.parse(data);
          console.log(obj)
          display.printFilterBarrios(obj);
          // display.printTableCanchasDisponiblesList(obj);
      });
		},

		printFilterBarrios: function(barrios){
			let info_local = '';
			let expandido = '';
			let show = '';


			barrios.forEach(function(data, indice) {
				info_local = ''
				
				//Recorer las locales de cada barrio para mostrar las locales
				data.data.forEach(function(local, indice_local){
					info_local += `<a href="#" class="list-group-item list-group-item-action">${local.nombre_local} <small class="text-muted">(${local.direccion})</small> </a>`;
				})

				expandido = (indice == 0)? "true" : "false";
				show = (indice == 0)? "show" : "";
				$('#list-group-men').append(
					`
						<div class="list-group-collapse sub-men">
              <a class="list-group-item list-group-item-action" href="#sub-men${indice}" data-toggle="collapse" aria-expanded="${expandido}" aria-controls="sub-men${indice}">${data.barrio} <small class="text-muted">(${data.cantidad})</small> <i class="far fa-futbol float-right text-success"></i></a>
              <div class="collapse ${show}" id="sub-men${indice}" data-parent="#list-group-men">
                <div class="list-group">
                  ${info_local}
                </div>
              </div>
            </div>
					`)
		    });
		}

	}
	display.init();
});