<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BSW | Log in</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Utils/helper.css">

  <style >
    
  </style>
</head>
<body class="hold-transition login-page fondo-login">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary translucido">
    <div class="card-header text-center">
      <a href="<?php echo base_url(); ?>Inicio" class="h1"><b>BSW</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Inicia sesión</p>

      <form  method="post" id="login_form" action="<?php echo base_url(); ?>Register/login_user">
        <div class="input-group mb-3">
          <input type="email" class="form-control required" placeholder="Email" id="correo" name="correo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control required" placeholder="Password" id="Password" name="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recuérdame
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="button" id="btn_submit_form" class="btn btn-primary btn-block">Iniciar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Iniciar usando Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Iniciar usando Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="<?php echo base_url(); ?>ForgotPassword">Olvidé mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo base_url(); ?>register" class="text-center">Registrarse</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>


<!-- /.login-box -->
<script type="text/javascript"> const base_url = "<?php echo base_url(); ?>";</script>
<script type="text/javascript"> const response = '<?php echo json_encode( $this->session->flashdata("msg")); ?>';</script>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/Utils/helper.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/login/login.js"></script>
</body>
</html>
