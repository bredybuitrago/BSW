  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(); ?>" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/images/logo_sin_letras.png" alt="BSW Logo" class="brand-image img-circle elevation-3" style="opacity: .8; background: #FFF; max-height: 45px;">
      <span class="brand-text font-weight-light"><b>BSW</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">      
      <!-- SidebarSearch Form -->
      <div class="form-inline mt-3">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Principal Aliado" class="nav-link <?php if ($this->uri->segment(1) == 'PrincipalAliado'): ?> active <?php endif ?> ">
              <i class="fas fa-edit"></i>
              <p>Principal</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url(); ?>RegistrarServicio" class="nav-link <?php if ($this->uri->segment(1) == 'RegistrarServicio'): ?> active <?php endif ?>">
              <i class="fas fa-edit"></i>
              <p>Registrar Servicio</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">