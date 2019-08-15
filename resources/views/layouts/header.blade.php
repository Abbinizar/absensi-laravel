<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Absensi</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{url('assets/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <!-- <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{url('assets/images/logo.svg')}}" class="mr-2" alt="logo"/></a> -->
        <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{url('images/logo-mini.svg')}}" alt="logo"/></a> -->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Cari.." aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{url('assets/images/faces/face28.jpg')}}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <!-- <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Pengaturan
              </a> -->
              <a class="dropdown-item" href="{{url('/')}}">
                <i class="ti-power-off text-primary"></i>
                Keluar
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('beranda')}}">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Beranda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form" aria-expanded="false" aria-controls="form">
              <i class="ti-layout-list-post menu-icon"></i>
              <span class="menu-title">Formulir</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('kegiatan')}}">Evaluasi Kegiatan</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('jurnal')}}">Jurnal Belajar</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Tabel data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('data-kegiatan')}}">Data Evaluasi Kegiatan</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('data-jurnal')}}">Data Jurnal Belajar</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Akun</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('daftar-akun')}}">Daftar Akun</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html">Data Akun</a></li> -->
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      @yield('content')
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{url('assets/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{url('assets/js/off-canvas.js')}}"></script>
    <script src="{{url('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{url('assets/js/template.js')}}"></script>
    <script src="{{url('assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{url('assets/js/file-upload.js')}}"></script>
    <!-- End custom js for this page-->
  </body>

  </html>
