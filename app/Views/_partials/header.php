<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Masjid Al Hikmah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/logo/brand.jpg" rel="icon">
    <link href="assets/logo/brand.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('dash/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('dash/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('dash/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('dash/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('dash/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('dash/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('dash/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('dash/css/style.css'); ?>" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?php echo base_url('/dashboard'); ?>" class="logo d-flex align-items-center">
                <img src="assets/logo/brand.jpg" alt="">
                <span class="d-none d-lg-block">Web Application</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number"></span>
                    </a><!-- End Notification Icon -->

                    <!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number"></span>
                    </a><!-- End Messages Icon -->
                    <!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="dash/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Administrator</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <span>IT Application App</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center"
                                href="<?php echo base_url('/profile'); ?>">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('/faq'); ?>">
                                <i class="bi bi-question-circle"></i>
                                <span>Butuh Bantuan?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('/logout'); ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>

        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/dashboard'); ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-heading">Manajemen Masjid</li>

            <!-- KEUANGAN -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#keuangan-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-cash-stack"></i><span>Keuangan</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="keuangan-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?= base_url('transaksi'); ?>">
                            <i class="bi bi-credit-card"></i><span>Transaksi Keuangan</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="<?= base_url('laporan-keuangan'); ?>">
                            <i class="bi bi-file-earmark-bar-graph"></i><span>Laporan Keuangan</span>
                        </a>
                    </li> -->
                </ul>
            </li>

            <!-- ASET -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#aset-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-building"></i><span>Manajemen Aset</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="aset-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?= base_url('inventaris'); ?>">
                            <i class="bi bi-archive"></i><span>Inventaris Masjid</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('pemeliharaan'); ?>">
                            <i class="bi bi-tools"></i><span>Maintenance</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- KEGIATAN -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#kegiatan-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-calendar-event"></i><span>Kegiatan & Dakwah</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="kegiatan-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?= base_url('kegiatan'); ?>">
                            <i class="bi bi-book"></i><span>Kegiatan Masjid</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('pengumuman'); ?>">
                            <i class="bi bi-person-circle"></i><span>Pengumuman</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- JAMAAH -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#jamaah-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people"></i><span>Manajemen Jamaah</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="jamaah-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?= base_url('jamaah'); ?>">
                            <i class="bi bi-person"></i><span>Data Jamaah</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- PANDUAN -->
            <li class="nav-heading">Panduan</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('pusat-bantuan'); ?>">
                    <i class="bi bi-question-circle"></i>
                    <span>Pusat Bantuan</span>
                </a>
            </li>
    </aside>
    ><!-- End Sidebar-->