@extends('admin.layouts.app')
@section('title', 'Detail Permohonan PSU')

@php /** @var \App\Models\PsuSubmission $submission */ @endphp

@section('content')
<div class="row" style="display: flex; gap: 32px; align-items: start;">
    <!-- LEFT: Details -->
    <div style="flex: 1;">
        <div class="table-container" style="padding: 32px; margin-bottom: 0;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px; border-bottom: 2px solid #f1f5f9; padding-bottom: 24px;">
                <div>
                    <h3 style="margin: 0; font-size: 1.5rem; color: var(--text-primary);">{{ $submission->no_registrasi }}</h3>
                    <p style="margin: 6px 0 0; color: var(--text-muted); font-size: 0.875rem;">
                        <i class="far fa-calendar-alt" style="margin-right: 6px;"></i> Pengajuan: {{ $submission->created_at->format('d M Y, H:i') }}
                    </p>
                </div>
                <div>
                    @if($submission->status === 'verifikasi dokumen')
                        <span class="badge" style="background-color: #fef0c7; color: #915d0a; font-size: 0.875rem; padding: 6px 16px;">{{ $submission->status }}</span>
                    @elseif($submission->status === 'perbaikan dokumen')
                        <span class="badge" style="background-color: #fee4e2; color: #b42318; font-size: 0.875rem; padding: 6px 16px;">{{ $submission->status }}</span>
                    @else
                        <span class="badge" style="background-color: #ecfdf3; color: #027a48; font-size: 0.875rem; padding: 6px 16px;">{{ $submission->status }}</span>
                    @endif
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px; margin-bottom: 40px;">
                <div>
                    <label style="display: block; font-size: 0.75rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 8px;">Nama Pemohon</label>
                    <p style="margin: 0; font-size: 1rem; color: var(--text-primary); font-weight: 500;">{{ $submission->nama_pemohon }}</p>
                </div>
                <div>
                    <label style="display: block; font-size: 0.75rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 8px;">Jenis Permohonan</label>
                    <p style="margin: 0; font-size: 1rem; color: var(--text-primary); font-weight: 500;">{{ $submission->jenis_permohonan }}</p>
                </div>
                <div style="grid-column: span 2;">
                    <label style="display: block; font-size: 0.75rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 8px;">Lokasi Pembangunan</label>
                    <p style="margin: 0; font-size: 1rem; color: var(--text-primary); font-weight: 500;">{{ $submission->lokasi_pembangunan }}</p>
                </div>
            </div>

            <h4 style="font-size: 1.125rem; color: var(--text-primary); margin: 0 0 20px; font-weight: 700;">Dokumen Terlampir</h4>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                @php
                    $docs = [
                        'fc_ktp' => 'FC KTP',
                        'fc_akta_pendirian' => 'FC Akta Pendirian',
                        'fc_sertifikat_tanah' => 'FC Sertifikat Tanah',
                        'siteplan' => 'Siteplan',
                        'daftar_psu_nilai' => 'Daftar PSU & Nilai',
                        'fc_imb_pbg' => 'FC IMB/PBG'
                    ];
                @endphp
                @foreach($docs as $key => $label)
                    <a href="{{ asset('storage/' . $submission->$key) }}" target="_blank" class="nav-item" style="border: 1px solid var(--border); background: #f8fafc; color: var(--text-primary); gap: 16px; padding: 16px;">
                        <i class="fas fa-file-pdf" style="color: #ef4444; font-size: 1.5rem;"></i>
                        <span style="font-size: 0.875rem; font-weight: 600;">{{ $label }}</span>
                        <i class="fas fa-external-link-alt" style="margin-left: auto; font-size: 0.75rem; color: var(--text-muted);"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- RIGHT: Verification -->
    <div style="width: 350px;">
        <div class="card" style="background: white; border-radius: 12px; padding: 24px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); position: sticky; top: 24px;">
            <h4 style="font-size: 1rem; margin: 0 0 20px;">Verifikasi Permohonan</h4>
            
            <form action="{{ route('admin.psu-submissions.update', $submission->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 0.875rem; font-weight: 500; margin-bottom: 8px;">Ubah Status</label>
                    <select name="status" id="status-select" class="form-input" style="width: 100%;" required>
                        <option value="verifikasi dokumen" {{ $submission->status === 'verifikasi dokumen' ? 'selected' : '' }}>Verifikasi Dokumen</option>
                        <option value="perbaikan dokumen" {{ $submission->status === 'perbaikan dokumen' ? 'selected' : '' }}>Perbaikan Dokumen</option>
                        <option value="BA terima terbit" {{ $submission->status === 'BA terima terbit' ? 'selected' : '' }}>BA Terima Terbit</option>
                    </select>
                </div>

                <div id="note-section" style="margin-bottom: 20px; display: {{ $submission->status === 'perbaikan dokumen' ? 'block' : 'none' }};">
                    <label style="display: block; font-size: 0.875rem; font-weight: 500; margin-bottom: 8px;">Keterangan Kesalahan / Perbaikan</label>
                    <textarea name="catatan_perbaikan" class="form-input" style="width: 100%; min-height: 120px;" placeholder="Tuliskan bagian mana yang perlu diperbaiki oleh pemohon...">{{ $submission->catatan_perbaikan }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">
                    <i class="fas fa-save" style="margin-right: 8px;"></i> Simpan Verifikasi
                </button>
                
                <a href="{{ route('admin.psu-submissions.index') }}" class="btn btn-secondary" style="width: 100%; margin-top: 10px; text-decoration: none; display: block; text-align: center;">Kembali</a>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.getElementById('status-select').addEventListener('change', function() {
        const noteSection = document.getElementById('note-section');
        if (this.value === 'perbaikan dokumen') {
            noteSection.style.display = 'block';
        } else {
            noteSection.style.display = 'none';
        }
    });
</script>
@endpush
@endsection
