<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>SIGJALAN - Sistem Informasi Geografis Jalan</title>

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}?v=2" />

    <!-- Extra per-page styles -->
    @stack('styles')
  </head>

  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">
          <i class="fa-solid fa-road"></i> SIGJALAN
        </a>

        <button
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#menu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}#beranda">Beranda</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}#profil">Profil</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Program</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:;">Agenda Kerja</a></li>
                <li><a class="dropdown-item" href="javascript:;">Program Kegiatan</a></li>
                <li><a class="dropdown-item" href="javascript:;">Target Capaian Program Keg</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Data</a>
              <ul class="dropdown-menu">
                <li><h6 class="dropdown-header">Jalan Lingkungan</h6></li>
                <li><a class="dropdown-item" href="/peta">WebGIS</a></li>
                <li><a class="dropdown-item" href="/kondisi-jalan-tahunan">Data Kondisi Jalan</a></li>
                <li><a class="dropdown-item" href="/sk-jalan-lingkungan">SK Jalan Lingkungan</a></li>
                
                <li><hr class="dropdown-divider"></li>
                <li><h6 class="dropdown-header">Data PSU</h6></li>
                <li><a class="dropdown-item" href="/permohonan-psu">Serah Terima PSU</a></li>
                <li><a class="dropdown-item" href="/template-data-teknis">Template Data Teknis</a></li>
                <li><a class="dropdown-item" href="javascript:;">Data Jumlah Perumahan</a></li>
                <li><a class="dropdown-item" href="javascript:;">Perumahan yang sudah serah terima</a></li>
                
                <li><hr class="dropdown-divider"></li>
                <li><h6 class="dropdown-header">Kawasan Kumuh</h6></li>
                <li><a class="dropdown-item" href="/peta">SK Kawasan Kumuh</a></li>
                <li><a class="dropdown-item" href="javascript:;">Intervensi Kawasan Kumuh</a></li>
                <li><a class="dropdown-item" href="javascript:;">BA Penangan Kumuh</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}#galeri">Galeri</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}#download">Download</a>
            </li>

            <li class="nav-item ms-3">
              <a class="btn btn-light" href="/admin/dashboard">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <!-- FOOTER -->
    @include('public.layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
  </body>
</html>
