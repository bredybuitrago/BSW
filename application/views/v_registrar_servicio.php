<style type="text/css">


.upload__box p {
  margin: 0;
}

.upload__box {
  padding: 40px;
}
.upload__inputfile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}
.upload__btn {
  display: inline-block;
  font-weight: 600;
  color: #fff;
  text-align: center;
  min-width: 116px;
  padding: 5px;
  transition: all 0.3s ease;
  cursor: pointer;
  border: 2px solid;
  background-color: #17a2b8;
  border-color: #17a2b8;
  border-radius: 10px;
  line-height: 26px;
  font-size: 14px;
}
.upload__btn:hover {
  background-color: unset;
  color: #17a2b8;
  transition: all 0.3s ease;
}
.upload__btn-box {
  margin-bottom: 10px;
}
.upload__img-wrap {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -10px;
}
.upload__img-box {
  width: 200px;
  padding: 0 10px;
  margin-bottom: 12px;
}
.upload__img-close {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 10px;
  right: 10px;
  text-align: center;
  line-height: 24px;
  z-index: 1;
  cursor: pointer;
}
.upload__img-close:after {
  content: "✖";
  font-size: 14px;
  color: white;
}

.img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding-bottom: 100%;
}


</style>

<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Registrar servicio</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Inicio</a></li>
					<li class="breadcrumb-item active">Registrar Servicio</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<div class="row content">
	<div class="col-md-6">

		<div class="card card-success">
			<div class="card-header">
				<h3 class="card-title">Datos del local</h3>
			</div>
			<div class="card-body">
				<div id="form_registar_local">
					<div class="row">
						<div class="col-md-6">
							<label>SELECCIONE LOCAL</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-thumbtack"></i></span>
								</div>
								<select class="form-control is-valid form-control-sm" id="ddl_select_local"></select>
							</div>
						</div>
						<div class="col-md-6">
							<label>Nombre del local</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-building"></i></span>
								</div>
								<input type="text" class="form-control required form-control-sm" id="txt_nombre_local">
							</div>
						</div>
					</div>					

					<div class="row">

						<div class="col-md-6 ">
							<label>Días servicio</label>
							<div class="form-group"  style="border: 1px solid #e9ecef;">
								<div class="row" style="margin-left: 2px;">
									<div class="col-sm-6 ">
										<div class="custom-control custom-checkbox">
											<input class="custom-control-input dias_servicio" type="checkbox" name="dias_servicio" id="lunes" value="lunes" checked>
											<label for="lunes" class="custom-control-label">lunes</label>
										</div>
										<div class="custom-control custom-checkbox">
											<input class="custom-control-input dias_servicio" type="checkbox" name="dias_servicio" id="martes" value="martes" checked>
											<label for="martes" class="custom-control-label">martes</label>
										</div>
										<div class="custom-control custom-checkbox">
											<input class="custom-control-input dias_servicio" type="checkbox" name="dias_servicio" id="miercoles" value="miercoles" checked>
											<label for="miercoles" class="custom-control-label">miércoles</label>
										</div>
										<div class="custom-control custom-checkbox">
											<input class="custom-control-input dias_servicio" type="checkbox" name="dias_servicio" id="jueves" value="jueves" checked>
											<label for="jueves" class="custom-control-label">jueves</label>
										</div>
									</div>
									<div class="col-sm-6 ">
										<div class="custom-control custom-checkbox">
											<input class="custom-control-input dias_servicio" type="checkbox" name="dias_servicio" id="viernes" value="viernes" checked>
											<label for="viernes" class="custom-control-label">viernes</label>
										</div>
										<div class="custom-control custom-checkbox">
											<input class="custom-control-input dias_servicio" type="checkbox" name="dias_servicio" id="sabado" value="sabado" checked>
											<label for="sabado" class="custom-control-label">sábado</label>
										</div>
										<div class="custom-control custom-checkbox">
											<input class="custom-control-input dias_servicio" type="checkbox" name="dias_servicio" id="domingo" value="domingo" checked>
											<label for="domingo" class="custom-control-label">domingo</label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="row">							
								<div class="col-md-6">
									<label>Hora inicio servicio</label>
									<div class="form-group input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-clock"></i></i></span>
										</div>
										<select class="form-control required form-control-sm" id="ddl_hora_inicio">
											<option value="">...</option>
											<option value="1:00">1:00</option>
											<option value="2:00">2:00</option>
											<option value="3:00">3:00</option>
											<option value="4:00">4:00</option>
											<option value="5:00">5:00</option>
											<option value="6:00">6:00</option>
											<option value="7:00">7:00</option>
											<option value="8:00">8:00</option>
											<option value="9:00">9:00</option>
											<option value="10:00">10:00</option>
											<option value="11:00">11:00</option>
											<option value="12:00">12:00</option>
										</select>						
									</div>
								</div>
								<div class="col-md-6">
									<label>franja</label>
									<div class="form-group input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-clock"></i></i></span>
										</div>
										<select class="form-control form-control-sm" id="ddl_franja_inicio">
											<option>pm</option>
											<option>am</option>
										</select>						
									</div>
								</div>
							</div>

							<div class="row">							
								<div class="col-md-6">
									<label>Hora fin servicio</label>
									<div class="form-group input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-clock"></i></i></span>
										</div>
										<select class="form-control required form-control-sm" id="ddl_hora_fin">
											<option value="">...</option>
											<option value="1:00">1:00</option>
											<option value="2:00">2:00</option>
											<option value="3:00">3:00</option>
											<option value="4:00">4:00</option>
											<option value="5:00">5:00</option>
											<option value="6:00">6:00</option>
											<option value="7:00">7:00</option>
											<option value="8:00">8:00</option>
											<option value="9:00">9:00</option>
											<option value="10:00">10:00</option>
											<option value="11:00">11:00</option>
											<option value="12:00">12:00</option>
										</select>						
									</div>
								</div>
								<div class="col-md-6">
									<label>franja</label>
									<div class="form-group input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-clock"></i></i></span>
										</div>
										<select class="form-control form-control-sm" id="ddl_franja_fin">
											<option>pm</option>
											<option>am</option>
										</select>						
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="row">
						<div class="col-md-6">
							<label>Cantidad canchas</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-futbol"></i></span>
								</div>
								<input type="number" class="form-control required form-control-sm" id="txt_cantidad_canchas">
							</div>
						</div>
						<div class="col-md-6">
							<label>Barrio</label>
							<div class="form-group input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-house-damage"></i></span>
								</div>
								<select class="form-control required form-control-sm" id="ddl_barrio"></select>						
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-md-6">
							<label>Dirección local</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
								</div>
								<input type="text" class="form-control required form-control-sm" id="txt_direccion">
							</div>
						</div>
						<div class="col-md-6">
							<label>Nombre Administrador del local</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-id-badge"></i></span>
								</div>
								<input type="text" class="form-control required form-control-sm" id="txt_nombre_administrador_del_local">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label>Teléfono Administración</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-phone"></i></span>
								</div>
								<input type="text" class="form-control form-control-sm " id="txt_telefono_administracion">
							</div>
						</div>

						<div class="col-md-6">
							<label>Correo local</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-envelope"></i></span>
								</div>
								<input type="email" class="form-control form-control-sm" id="txt_correo_local">
								<input type="hidden" id="txt_coordenadas_lat">
								<input type="hidden" id="txt_coordenadas_lng">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label>Descripción de tu local</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-quote-left"></i></span>
								</div>
								<textarea id="txt_descripcion_local" class="form-control" rows="3" placeholder="Esto lo leerá el usuario" maxlength="255"></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<label>Indique en el mapa el punto donde está ubicado el local</label>
							<div id="map" style="  top:0; bottom:0; width:100%; min-height: 500px;"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 m-top-10">
							<button class="btn btn-success" id="btn_guardar_local">guardar local <i class="fas fa-save"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>

		

	</div>
	<!-- /.col (left) -->
	<div class="col-md-6">
		<!-- general form elements disabled -->
		<div class="card card-success">
			<div class="card-header">
				<h3 class="card-title">Registrar Nueva Cancha</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body" id="form_register_cancha">
				<div class="row">
					<div class="col-md-6">
						<label>Identificación de la cancha</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-caret-square-right"></i></span>
							</div>
							<input type="text" class="form-control required" id="txt_identificacion" placeholder="Ejemplo... primera, central, fondo">
						</div>
					</div>
					<div class="col-md-6">
						<label>Tipo de cancha</label>
						<div class="form-group input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-list-ol"></i></span>
							</div>
							<select class="form-control required" id="ddl_tipo_cancha"></select>						
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label>Tarifa por hora</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
							</div>
							<input type="text" class="form-control required" id="txt_tarifa_por_hora" placeholder="Tarifa por hora">
						</div>
					</div>
					<div class="col-md-6">
						<!-- textarea -->
						<div class="form-group">
							<label>Observaciones</label>
							<textarea class="form-control" id="txt_observaciones" rows="3"></textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label></label>
							<button class="btn btn-success" id="btn_guardar_cancha">Guardar cancha <i class="fas fa-save"></i></button>
						</div>
					</div>
					<div class="col-md-6">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" id="cancha_activa"  checked>
							<label for="cancha_activa" class="custom-control-label">Cancha activa</label>
						</div>
					</div>
				</div>
			</div>
			<!-- /.card-body -->
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title">Subir Fotos de las canchas del local<small><em></em></small></h3>
					</div>
					<div class="card-body" id="myDrop_Canchas">

					   	<!-- <form method="POST" action="<?= base_url('Gestor/recibirArchivos') ?>" enctype="multipart/form-data">
						    <div>
						      <span>Upload a File:</span>
						      <input type="file" name="uploadedFile[]" multiple/>
						    </div>
						 
					  	</form> -->

					  	<form method="POST" action="<?= base_url('Gestor/recibirArchivos') ?>" enctype="multipart/form-data" id="images_form">
					  		<input type="hidden" name="hiden_local_id" id="hiden_local_id">
						  	<div class="upload__box">
							  <div class="upload__btn-box">
							    <label class="btn btn-default">
							      <p>Seleccionar Imágenes</p>
							      <input type="file" multiple="" data-max_length="20" class="upload__inputfile" name="uploadedFile[]" id="uploadedFile" accept="image/*">
							    </label>
						    	<button type="button" name="uploadBtn" class="btn btn-app bg-primary float-right" id="uploadBtn">
						    		<i class="fas fa-cloud-upload-alt"></i>
						    		Subir
						    	</button> 
							  </div>
							  <div class="upload__img-wrap"></div>
							</div>
					  	</form>


					  	<?php echo $this->session->flashdata('response'); ?>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script type="text/javascript">
	const message = "<?php echo $this->session->flashdata('response'); ?>";

	if(message != '')
		Swal.fire('Arención',	message,'info');

</script>