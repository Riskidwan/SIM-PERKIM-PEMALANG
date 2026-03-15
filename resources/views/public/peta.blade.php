@extends('public.layouts.app')
@section('title', 'Peta (WebGIS)')

@push('styles')
   <link rel="stylesheet" href="{{ asset('css/public.css') }}?v=4">
  <style>
    body { padding-top: 80px; }
    #peta { padding-top: 30px !important; }
  </style>
@endpush

@section('content')
  <!-- ***** Peta Interaktif Section Start ***** -->
  <section class="section" id="peta" style="background: #f7f7f7; padding-top: 50px; padding-bottom: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center" style="margin-bottom: 40px;">
            <h2 style="font-weight: 700; color: #1e3c72; font-size: 2.5rem;">Peta Interaktif (WebGIS)</h2>
            <p style="margin-top: 15px; font-size: 15px; color: #666; max-width: 800px; margin-left: auto; margin-right: auto; line-height: 1.6;">
              Peta WebGIS ini merupakan visualisasi geografis khusus untuk memetakan jaringan jalan lingkungan di Kabupaten Pemalang. Peta ini dapat digunakan untuk melihat, memantau, dan menganalisis secara langsung informasi teknis tiap ruas jalan.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <!-- Pencarian Lokasi Jalan -->
          <div class="map-filter-bar" style="justify-content: center; padding: 15px 0;">
            <div class="search-wrap" style="position: relative; width: 100%; max-width: 600px;">
              <i class="fa fa-search" style="position: absolute; left: 18px; top: 13px; color: #aaa; font-size: 16px;"></i>
              <input type="text" id="pub-road-search-input" list="pub-road-list" placeholder="Cari lokasi jalan (Misal: Jl. Mawar)..." 
                onchange="pubGoToRoad(this.value)"
                style="width: 100%; border-radius: 25px; padding: 12px 20px 12px 45px; border: 1px solid #ddd; outline: none; font-size: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); transition: box-shadow 0.3s ease;" autocomplete="off">
              <datalist id="pub-road-list"></datalist>
            </div>
          </div>
          <!-- Map -->
          <div class="map-container-wrap" style="border-radius: 15px; overflow: hidden; box-shadow: 0 5px 25px rgba(0,0,0,0.1);">
            <div id="pub-map" style="height: 600px; width: 100%;"></div>
            <div class="map-legend">
              <h4><i class="fas fa-palette"></i> Keterangan</h4>
              <div class="legend-row"><span class="dot" style="background:#22c55e"></span> Baik</div>
              <div class="legend-row"><span class="dot" style="background:#eab308"></span> Sedang</div>
              <div class="legend-row"><span class="dot" style="background:#f97316"></span> Rusak Ringan</div>
              <div class="legend-row"><span class="dot" style="background:#ef4444"></span> Rusak Berat</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Detail Modal -->
  <div class="detail-modal-overlay" id="pub-detail-overlay">
    <div class="detail-modal" id="pub-detail-panel">
      <button class="close-btn" onclick="pubCloseDetail()">&times;</button>
      <h3 id="pub-detail-nama" style="margin-bottom: 20px;">-</h3>
      <div class="detail-grid">
        <div class="detail-item">
          <div class="label">Panjang</div>
          <div class="value" id="pub-detail-panjang">-</div>
        </div>
        <div class="detail-item">
          <div class="label">Lebar</div>
          <div class="value" id="pub-detail-lebar">-</div>
        </div>
        <div class="detail-item">
          <div class="label">Perkerasan</div>
          <div class="value" id="pub-detail-perkerasan">-</div>
        </div>
        <div class="detail-item">
          <div class="label">Kondisi</div>
          <div class="value">
            <span id="pub-detail-kondisi-text" style="display:none;">-</span>
            <span id="pub-detail-kondisi" class="kondisi-badge">-</span>
          </div>
        </div>
        <div class="detail-item">
          <div class="label">Kecamatan</div>
          <div class="value" id="pub-detail-kecamatan">-</div>
        </div>
        <div class="detail-item">
          <div class="label">Kelurahan</div>
          <div class="value" id="pub-detail-kelurahan">-</div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <!-- Data (Optional, but usually served by API now) -->
  <script src="{{ asset('js/data.js') }}"></script>
  <!-- Public Map Logic -->
  <script src="{{ asset('js/public-app.js') }}"></script>
@endpush
