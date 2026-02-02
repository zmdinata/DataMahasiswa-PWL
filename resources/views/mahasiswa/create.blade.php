@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">
                    <i class="fas fa-user-plus me-2"></i>Tambah Data Mahasiswa Baru
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nim" class="form-label">
                                <i class="fas fa-id-card me-1"></i>NIM
                            </label>
                            <input type="text" 
                                   class="form-control @error('nim') is-invalid @enderror" 
                                   id="nim" 
                                   name="nim" 
                                   value="{{ old('nim') }}"
                                   placeholder="Masukkan NIM">
                            @error('nim')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Contoh: 2023081001</small>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label">
                                <i class="fas fa-user me-1"></i>Nama Lengkap
                            </label>
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
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kelas" class="form-label">
                                <i class="fas fa-users me-1"></i>Kelas
                            </label>
                            <select class="form-select @error('kelas') is-invalid @enderror" 
                                    id="kelas" 
                                    name="kelas">
                                <option value="" selected disabled>Pilih Kelas</option>
                                <option value="SI-KIP-P1" {{ old('kelas') == 'SI-KIP-P1' ? 'selected' : '' }}>SI-KIP-P1</option>
                                <option value="SI-KIP-P2" {{ old('kelas') == 'SI-KIP-P2' ? 'selected' : '' }}>SI-KIP-P2</option>
                                <option value="SI-KIP-P3" {{ old('kelas') == 'SI-KIP-P3' ? 'selected' : '' }}>SI-KIP-P3</option>
                            </select>
                            @error('kelas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="matakuliah" class="form-label">
                                <i class="fas fa-book me-1"></i>Mata Kuliah
                            </label>
                            <select class="form-select @error('matakuliah') is-invalid @enderror" 
                                    id="matakuliah" 
                                    name="matakuliah">
                                <option value="" selected disabled>Pilih Mata Kuliah</option>
                                <option value="Pemrograman Web Lanjut" {{ old('matakuliah') == 'Pemrograman Web Lanjut' ? 'selected' : '' }}>Pemrograman Web Lanjut</option>
                                <option value="Data Mining" {{ old('matakuliah') == 'Data Mining' ? 'selected' : '' }}>Data Mining</option>
                                <option value="Manajemen proyek SI" {{ old('matakuliah') == 'Manajemen proyek SI' ? 'selected' : '' }}>Manajemen proyek SI</option>
                                <option value="AI Automation" {{ old('matakuliah') == 'AI Automation' ? 'selected' : '' }}>AI Automation</option>
                            </select>
                            @error('matakuliah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary me-md-2">
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