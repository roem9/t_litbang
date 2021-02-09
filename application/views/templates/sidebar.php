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
          <i class="fas fa-fw fa-user-plus"></i>
          <span>Tambah Civitas</span></a>
      </li>

      <li class="nav-item" id="civitas">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dropone" aria-expanded="true" aria-controls="dropone">
          <i class="fas fa-users"></i>
          <span>Civitas</span>
        </a>
        <div id="dropone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header text-light">Civitas</h6>
            <a class="collapse-item text-light" href="<?= base_url()?>civitas/karyawan">Karyawan</a>
            <a class="collapse-item text-light" href="<?= base_url()?>civitas/kpq">KPQ</a>
            <a class="collapse-item text-light" href="<?= base_url()?>civitas/download">Download Data</a>
          </div>
        </div>
      </li>
      
      <li class="nav-item" id="kelas">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#droptwo" aria-expanded="true" aria-controls="droptwo">
          <i class="fas fa-fw fa-building"></i>
          <span>Kelas Pembinaan</span>
        </a>
        <div id="droptwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header text-light">Kelas Pembinaan</h6>
            <a class="collapse-item text-light" href="<?= base_url()?>kelas/aktif">Kelas Aktif</a>
            <a class="collapse-item text-light" href="<?= base_url()?>kelas/nonaktif">Kelas Nonaktif</a>
          </div>
        </div>
      </li>
      
      <!-- <li class="nav-item" id="kelas">
        <a class="nav-link" href="<?=base_url()?>kelas/">
          <i class="fas fa-fw fa-building"></i>
          <span>Kelas Pembinaan</span></a>
      </li> -->
      
      <li class="nav-item" id="Peserta">
        <a class="nav-link" href="<?= base_url()?>login/logout">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Keluar</span></a>
      </li>
    </ul>
    <!-- End of Sidebar -->
