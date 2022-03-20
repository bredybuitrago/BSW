<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BSW | Registrar</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Utils/helper.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary" style="width: 30rem;">
    <div class="card-header text-center">
      <a href="<?php echo base_url(); ?>Inicio" class="h1"><b>BSW</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Registrar nuevo usuario</p>

      <form  method="post" id="regsiter_form" action="<?php echo base_url(); ?>Register/Register_user">
        <div class="input-group mb-3">
          <input type="text" class="form-control required" placeholder="Nombre" name="nombre">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control required" placeholder="Crea un usuario" name="usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-male"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control required" placeholder="Correo" name="correo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" minlength="5" class="form-control required" placeholder="Password" name="password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" minlength="5" class="form-control required" placeholder="Confirma el password" name="password_2" id="password_2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
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
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" id="btn_register" >Registrarse</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Registrarse usando Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Registrarse usando Google+
        </a>
      </div>

      <a href="<?php echo base_url(); ?>Login" class="text-center">Ya estoy registrado</a><br>
      <a href="<?php echo base_url(); ?>Login" class="text-center">Quiero ofrecer mis servicios</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<script type="text/javascript"> const base_url = "<?php echo base_url(); ?>";</script>


<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- Sweet Alert -->
<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>






<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/Utils/helper.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/login/register.js"></script>

</body>
</html>
