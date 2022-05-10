<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tarjetas.css"> -->

<section>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="carta text-center">
            <div class="title">
              <i class="fa fa-paper-plane" aria-hidden="true"></i>
              <h2>Basic</h2>
            </div>
            <div class="price">
              <h4><sup>$</sup>25</h4>
            </div>
            <div class="option">
              <ul>
              <li> <i class="fa fa-check" aria-hidden="true"></i> 10 GB Space </li>
              <li> <i class="fa fa-check" aria-hidden="true"></i> 3 Domain Names </li>
              <li> <i class="fa fa-check" aria-hidden="true"></i> 20 Email Address </li>
              <li> <i class="fa fa-times" aria-hidden="true"></i> Live Support </li>
              </ul>
            </div>
            <a class="showModalServicios">Seleccionar </a>
          </div>
        </div>
        <!-- END Col one -->
        <div class="col-sm-4">
          <div class="carta text-center">
            <div class="title">
              <i class="fa fa-plane" aria-hidden="true"></i>
              <h2>Standard</h2>
            </div>
            <div class="price">
              <h4><sup>$</sup>50</h4>
            </div>
            <div class="option">
              <ul>
              <li> <i class="fa fa-check" aria-hidden="true"></i> 50 GB Space </li>
              <li> <i class="fa fa-check" aria-hidden="true"></i> 5 Domain Names </li>
              <li> <i class="fa fa-check" aria-hidden="true"></i> Unlimited Email Address </li>
              <li> <i class="fa fa-times" aria-hidden="true"></i> Live Support </li>
              </ul>
            </div>
            <a class="showModalServicios">Seleccionar </a>
          </div>
        </div>
        <!-- END Col two -->
        <div class="col-sm-4">
          <div class="carta text-center">
            <div class="title">
              <i class="fa fa-rocket" aria-hidden="true"></i>
              <h2>Premium</h2>
            </div>
            <div class="price">
              <h4><sup>$</sup>100</h4>
            </div>
            <div class="option">
              <ul>
              <li> <i class="fa fa-check" aria-hidden="true"></i> Unlimited GB Space </li>
              <li> <i class="fa fa-check" aria-hidden="true"></i> 30 Domain Names </li>
              <li> <i class="fa fa-check" aria-hidden="true"></i> Unlimited Email Address </li>
              <li> <i class="fa fa-check" aria-hidden="true"></i> Live Support </li>
              </ul>
            </div>
            <a class="showModalServicios">Seleccionar </a>
          </div>
        </div>
        <!-- END Col three -->
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="modal-xl">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h4 class="modal-title">Ser parte de BSW</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div style="border: 1px solid #cccccc;">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title d-contents">Introduce los datos para el pago
                <div class="f-right">
                  <img src="<?php echo base_url(); ?>assets/images/medios_de_pago/26c6437a07e05ddf3f36b23e11866f34.svg" width="45" height="27">
                  <img src="<?php echo base_url(); ?>assets/images/medios_de_pago/8fcb89c457be0af51f5243e3173fbb8e.svg">
                  <img src="<?php echo base_url(); ?>assets/images/medios_de_pago/0fa8667516be0c0078c0fb3141ff93b4.svg">
                  <img src="<?php echo base_url(); ?>assets/images/medios_de_pago/afd5f9e481a08a529b1d3888b87c7baa.svg">
                  <img src="<?php echo base_url(); ?>assets/images/medios_de_pago/b654fccf1f1bebb51a1a88ea24f79598.svg">
                </div>
              </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label for="txtNombreTitular" class="col-sm-2 col-form-label">Nombre del titular</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="txtNombreTitular" placeholder="Nombre del titular" disabled>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="txtTarjeta" class="col-sm-2 col-form-label">Tarjeta</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="txtTarjeta" placeholder="Número de la tarjeta" disabled>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label for="txtFechaCaducidad" class="col-sm-2 col-form-label">Fecha caducidad</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="txtFechaCaducidad" placeholder="Fecha tarjeta" disabled>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="txtCVV" class="col-sm-2 col-form-label">Código de seguridad</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="txtCVV" placeholder="CVV" disabled>
                      </div>
                    </div>
                  </div>
                </div>  
               
                

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info" disabled>Registrar método de pago</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
        </div>

        <div style="border: 1px solid #cccccc;">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title d-contents">Introduce los siguientes datos</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" id="regsiter_form">
              <div class="card-body">
                <div class="form-group row">
                  <label for="txtNombreEmpresa" class="col-sm-2 col-form-label">Nombre de la empresa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="txtNombreEmpresa" placeholder="Empresa">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="txtNit" class="col-sm-2 col-form-label">Nit</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="txtNit" placeholder="Nit de la empresa">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="txtEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control required" id="txtEmail" placeholder="Email de la empresa">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="txtTelefonoEmpresa" class="col-sm-2 col-form-label">Teléfono</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="txtTelefonoEmpresa" placeholder="Teléfono de la empresa">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="txtRepresentante" class="col-sm-2 col-form-label">Nombre representante</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="txtRepresentante" placeholder="Nombre del representante">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="txtContactoRepresentante" class="col-sm-2 col-form-label">Contacto representante</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="txtContactoRepresentante" placeholder="Teléfono del representante">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="txtNombreUsuario" class="col-sm-2 col-form-label">Crea un Nick-name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="txtNombreUsuario" placeholder="Nombre de usuario">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="txtPassword1" class="col-sm-2 col-form-label">Crea un password</label>
                  <div class="col-sm-10">
                    <input type="password" minlength="5" class="form-control required" id="txtPassword1" placeholder="Password">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="txtPassword2" class="col-sm-2 col-form-label">Confirma el password</label>
                  <div class="col-sm-10">
                    <input type="password" minlength="5" class="form-control required" id="txtPassword2" placeholder="Confirma el password">
                  </div>
                </div>

                <div class="row">
                  <div class="col-8">
                    <div class="icheck-primary">
                      <input type="checkbox" id="agreeTerms" name="terms" value="1">
                      <label for="agreeTerms">
                       Estoy de acuerdo con los <a href="#">términos</a>
                      </label>
                    </div>
                  </div>
                </div>
                
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between bg-primary">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" id="btn_registrar">Guardar cambios</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal