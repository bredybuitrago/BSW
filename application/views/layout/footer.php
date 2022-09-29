  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://uninpahu.edu.co">Universidad Uninpahu</a>.</strong>
    Todos los derechos reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Versión</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<script type="text/javascript"> const base_url = "<?php echo base_url(); ?>";</script>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>
<!-- Sweet Alert -->
<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>


<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>





<script src="<?php echo base_url(); ?>assets/js/Utils/helper.js"></script>

<?php if ($this->uri->segment(1) == 'Inicio' || $this->uri->segment(1) == ''): ?>
    <script src="<?php echo base_url(); ?>assets/plugins/mapbox/mapbox-gl.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/mapbox/mapbox-gl-geocoder.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/map_inicio.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/map_inicio_datos.js"></script>
    <!-- e-commerce -->
    <script src="<?php echo base_url(); ?>assets/commerce/js/jquery.superslides.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/bootstrap-select.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/inewsticker.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/bootsnav.js."></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/images-loded.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/baguetteBox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/form-validator.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/contact-form-script.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/custom.js"></script>
    <!-- controlador de canchas -->
    <script src="<?php echo base_url(); ?>assets/js/display_canchas.js"></script>



<?php endif ?>

<!-- ecommerce -->
<?php if ($this->uri->segment(1) == 'canchas' || $this->uri->segment(2) == 'Reservar_cancha'): ?>
    <!-- e-commerce -->
    <script src="<?php echo base_url(); ?>assets/commerce/js/jquery.superslides.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/bootstrap-select.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/inewsticker.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/bootsnav.js."></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/images-loded.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/baguetteBox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/form-validator.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/contact-form-script.js"></script>
    <script src="<?php echo base_url(); ?>assets/commerce/js/custom.js"></script>


<?php endif ?>

<?php if ($this->uri->segment(1) == 'RegistrarServicio'): ?>
    <script src="<?php echo base_url(); ?>assets/plugins/mapbox/mapbox-gl.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/mapbox/mapbox-gl-geocoder.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/dropzone/min/dropzone.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/map_registrar_servicio.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/gestor_archivos.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/registrar_servicio.js"></script>
<?php endif ?>

<?php if ($this->uri->segment(1) == 'Servicios'): ?>
    <script src="<?php echo base_url(); ?>assets/js/formulario_servicios.js"></script>
<?php endif ?>

<?php if ($this->uri->segment(1) == 'PrincipalAliado'): ?>
    <script src="<?php echo base_url(); ?>assets/js/principal_aliado.js"></script>
<?php endif ?>

<?php if ($this->uri->segment(1) == 'Canchas' && $this->uri->segment(2) == 'Reservar_cancha'): ?>
    <script src="<?php echo base_url(); ?>assets/js/reservar_cancha.js"></script>
<?php endif ?>


</body>
</html>
