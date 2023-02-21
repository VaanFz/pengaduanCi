 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Pengaduan Masyarakat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url('assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image');?>">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('dashboard');?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          
          <li class="nav-header">Administrator</li>
          <li class="nav-item">
            <a href="<?= base_url('Administrator');?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Daftar Anggota
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-header">Aduan Masyarakat</li>
          <li class="nav-item">
            <a href="<?= base_url('Aduan');?>" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Aduan
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-header">Pengaduan</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Daftar Pengaduan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Nonvalid');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengaduan Nonvalid</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Valid');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengaduan Valid</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Proses');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengaduan Proses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Selesai');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>pengaduan Selesai</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">Generate Laporan</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fas fa-copy"></i>
              <p>
                Laporan Pengaduan
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>