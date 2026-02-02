@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">
                    <i class="fas fa-user-plus me-2"></i>Tambah Data Mahasiswa
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" 
                               class="form-control @error('nim') is-invalid @enderror" 
                               id="nim" 
                               name="nim" 
                               value="{{ old('nim') }}"
                               placeholder="Contoh: 2023081001">
                        @error('nim')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" 
                               class="form-control @error('nama') is-invalid @enderror" 
                               id="nama" 
                               name="nama" 
                               value="{{ old('nama') }}"
                               placeholder="Masukkan nama lengkap">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select @error('kelas') is-invalid @enderror" 
                                id="kelas" 
                                name="kelas">
                            <option value="" selected disabled>Pilih Kelas</option>
                            <option value="TI-5A" {{ old('kelas') == 'TI-5A' ? 'selected' : '' }}>TI-5A</option>
                            <option value="TI-5B" {{ old('kelas') == 'TI-5B' ? 'selected' : '' }}>TI-5B</option>
                            <option value="SI-5A" {{ old('kelas') == 'SI-5A' ? 'selected' : '' }}>SI-5A</option>
                            <option value="SI-5B" {{ old('kelas') == 'SI-5B' ? 'selected' : '' }}>SI-5B</option>
                        </select>
                        @error('kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="matakuliah" class="form-label">Mata Kuliah</label>
                        <select class="form-select @error('matakuliah') is-invalid @enderror" 
                                id="matakuliah" 
                                name="matakuliah">
                            <option value="" selected disabled>Pilih Mata Kuliah</option>
                            <option value="Pemrograman Web" {{ old('matakuliah') == 'Pemrograman Web' ? 'selected' : '' }}>Pemrograman Web</option>
                            <option value="Basis Data" {{ old('matakuliah') == 'Basis Data' ? 'selected' : '' }}>Basis Data</option>
                            <option value="Algoritma" {{ old('matakuliah') == 'Algoritma' ? 'selected' : '' }}>Algoritma</option>
                            <option value="Struktur Data" {{ old('matakuliah') == 'Struktur Data' ? 'selected' : '' }}>Struktur Data</option>
                        </select>
                        @error('matakuliah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection