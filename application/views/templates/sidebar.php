    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-tools"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Penelitian Dan Pengembangan</div>
      </a>

      
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Penelitian Dan Pengembangan
      </div>

      <li class="nav-item" id="sidebarTambah">
        <a class="nav-link" href="<?=base_url()?>civitas/tambahcivitas">
          <i class="fas fa-fw fa-user"></i>
          <span>Tambah Civitas</span></a>
      </li>

      <li class="nav-item" id="sidebarKpq">
        <a class="nav-link" href="<?=base_url()?>civitas/listkpq">
          <i class="fas fa-fw fa-user"></i>
          <span>KPQ</span></a>
      </li>

      <li class="nav-item" id="sidebarKaryawan">
        <a class="nav-link" href="<?=base_url()?>civitas/listkaryawan">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>Karyawan</span></a>
      </li>
      
      <li class="nav-item" id="Peserta">
        <a class="nav-link" href="<?= base_url()?>login/logout">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Keluar</span></a>
      </li>
    </ul>
    <!-- End of Sidebar -->
