@extends('public.layouts.app')

@section('content')

    <!-- HERO -->
    <section class="hero" id="beranda">
      <div class="container">
        <div class="row align-items-center">
          <!-- LOGO KIRI -->
          <div class="col-md-5 text-center">
            <img src="/img/logoKab.Pemalang.png" width="260" />
          </div>

          <!-- TEKS KANAN -->
          <div class="col-md-7">
            <h1>Sistem Informasi Geografis Jalan</h1>

            <p>
              SIGJALAN adalah platform digital untuk pengelolaan data jaringan
              jalan berbasis peta interaktif guna mendukung perencanaan
              pembangunan infrastruktur secara transparan dan terintegrasi.
            </p>

            <a href="#program" class="btn btn-light btn-lg mt-3 me-2">
              Lihat Program
            </a>

            <a href="/login" class="btn btn-outline-light btn-lg mt-3">
              Login Sistem
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- PROFIL -->
    <section class="section" id="profil">
      <div class="container">
        <h2 class="text-center mb-5">Profil SIGJALAN</h2>

        <div class="row align-items-center">
          <div class="col-md-6">
            <p>
              SIGJALAN merupakan sistem informasi berbasis web yang digunakan
              untuk mengelola data jaringan jalan, kondisi jalan serta lokasi
              geografis jalan secara digital menggunakan peta interaktif.
            </p>

            <p>
              Sistem ini membantu pemerintah dalam proses monitoring,
              perencanaan serta pengambilan keputusan pembangunan infrastruktur
              jalan yang lebih efektif.
            </p>
          </div>

          <div class="col-md-6 text-center">
            <img
              src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png"
              width="280"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- DATA -->
    <section class="section" id="data">
      <div class="container">
        <h2 class="text-center mb-5">Data Sistem</h2>

        <div class="row text-center">
          <div class="col-md-3">
            <h2>120</h2>
            <p>Data Jalan</p>
          </div>

          <div class="col-md-3">
            <h2>25</h2>
            <p>Kecamatan</p>
          </div>

          <div class="col-md-3">
            <h2>350 km</h2>
            <p>Total Panjang Jalan</p>
          </div>

          <div class="col-md-3">
            <h2>40</h2>
            <p>Proyek Perbaikan</p>
          </div>
        </div>
      </div>
    </section>

    <!-- GALERI -->
    <section class="section bg-light" id="galeri">
      <div class="container">
        <h2 class="text-center mb-5">Galeri Kegiatan</h2>

        <div class="row g-4 gallery">
          <div class="col-md-4">
            <img src="https://picsum.photos/400/300?1" />
          </div>

          <div class="col-md-4">
            <img src="https://picsum.photos/400/300?2" />
          </div>

          <div class="col-md-4">
            <img src="https://picsum.photos/400/300?3" />
          </div>
        </div>
      </div>
    </section>

    <!-- DOWNLOAD -->

    <section class="section" id="download">
      <div class="container">
        <h2 class="text-center mb-5">Download Dokumen</h2>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="download-box">
              <i class="fa fa-file-pdf fa-3x text-danger"></i>

              <h5 class="mt-3">Data Jalan</h5>

              <a href="#" class="btn btn-primary mt-2">Download</a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="download-box">
              <i class="fa fa-file-pdf fa-3x text-danger"></i>

              <h5 class="mt-3">Peta Jalan</h5>

              <a href="#" class="btn btn-primary mt-2">Download</a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="download-box">
              <i class="fa fa-file-pdf fa-3x text-danger"></i>

              <h5 class="mt-3">Laporan Infrastruktur</h5>

              <a href="#" class="btn btn-primary mt-2">Download</a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
