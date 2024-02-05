<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white"
    id="sidenav-main" data-color="info">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/">
            <img src="<?= base_url()?>/assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold"></span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto pb-0" id="sidenav-collapse-mai">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ($sidebar == "tambah civitas") ? 'active' : '' ?>" href="
                    <?= base_url('civitas/tambahcivitas') ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Tambah Civitas</span>
                </a>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#civitasMenu" class="nav-link <?= ($sidebar == "civitas") ? 'active' : '' ?>" aria-controls="civitasMenu"
                    role="button" aria-expanded="<?= ($sidebar == "civitas") ? 'true' : 'false' ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Civitas</span>
                </a>
                <div class="collapse <?= ($sidebar == "civitas") ? 'show' : '' ?>" id="civitasMenu" style="">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item ">
                            <a class="nav-link <?= ($sidebarDropdown == "karyawan") ? 'active' : '' ?>" href="
                                <?= base_url()?>civitas/karyawan">
                                <span class="sidenav-normal"> Karyawan </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link <?= ($sidebarDropdown == "kpq") ? 'active' : '' ?>" href="
                                <?= base_url()?>civitas/kpq">
                                <span class="sidenav-normal"> KPQ </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link <?= ($sidebarDropdown == "download") ? 'active' : '' ?>" href="
                                <?= base_url()?>civitas/download">
                                <span class="sidenav-normal"> Download </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#kelasPembinaan" class="nav-link <?= ($sidebar == "kelas") ? 'active' : '' ?>" aria-controls="kelasPembinaan"
                    role="button" aria-expanded="<?= ($sidebar == "kelas") ? 'true' : 'false' ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
                                <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                            </svg>
                    </div>
                    <span class="nav-link-text ms-1">Kelas Pembinaan</span>
                </a>
                <div class="collapse <?= ($sidebar == "kelas") ? 'show' : '' ?>" id="kelasPembinaan" style="">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item ">
                            <a class="nav-link <?= ($sidebarDropdown == "kelas aktif") ? 'active' : '' ?>" href="
                                <?= base_url()?>kelas/aktif">
                                <span class="sidenav-normal"> Kelas Aktif </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link <?= ($sidebarDropdown == "kelas nonaktif") ? 'active' : '' ?>" href="
                                <?= base_url()?>kelas/nonaktif">
                                <span class="sidenav-normal"> Kelas Nonaktif </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" onclick="logout()">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                            <path fill-rule="evenodd"
                                d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 border-radius-xl shadow-none" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                            href="javascript:void(0);">Pages</a></li>
                    <?php if (isset($breadcrumbs)) : ?>
                    <?php foreach ($breadcrumbs as $breadcrumb) : ?>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                        <?= $breadcrumb ?>
                    </li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if (isset($breadcrumbSelect)) : ?>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                        <select name="moveSelected" id="moveSelected" style="border:none; background-color: inherit">
                            <?php foreach ($breadcrumbSelect as $select) : ?>
                            <?= $select ?>
                            <?php endforeach; ?>
                        </select>
                    </li>
                    <?php endif; ?>
                </ol>
                <h6 class="font-weight-bolder mb-0">
                    <?= $title ?>
                </h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 justify-content-end" id="navbar">
                <div
                    class="navbar-nav <?= (isset($searchButton) && $searchButton) ? 'justify-content-between' : 'justify-content-end' ?>">
                    <?php if (isset($searchButton) && $searchButton) : ?>
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="cari client" id="formSearch">
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <div class="container-fluid py-4">
        