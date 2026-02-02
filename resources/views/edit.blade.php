@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">
                    <i class="fas fa-edit me-2"></i>Edit Data Mahasiswa
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" 
                               class="form-control bg-light" 
                               id="nim" 
                               value="{{ $mahasiswa->nim }}"
                               readonly>
                        <small class="text-muted">NIM tidak dapat diubah</small>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" 
                               class="form-control @error('nama') is-invalid @enderror" 
                               id="nama" 
                               name="nama" 
                               value="{{ old('nama', $mahasiswa->nama) }}"
                               required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select @error('kelas') is-invalid @enderror" 
                                id="kelas" 
                                name="kelas"
                                required>
                            <option value="TI-5A" {{ old('kelas', $mahasiswa->kelas) == 'TI-5A' ? 'selected' : '' }}>TI-5A</option>
                            <option value="TI-5B" {{ old('kelas', $mahasiswa->kelas) == 'TI-5B' ? 'selected' : '' }}>TI-5B</option>
                            <option value="SI-5A" {{ old('kelas', $mahasiswa->kelas) == 'SI-5A' ? 'selected' : '' }}>SI-5A</option>
                            <option value="SI-5B" {{ old('kelas', $mahasiswa->kelas) == 'SI-5B' ? 'selected' : '' }}>SI-5B</option>
                        </select>
                        @error('kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="matakuliah" class="form-label">Mata Kuliah</label>
                        <select class="form-select @error('matakuliah') is-invalid @enderror" 
                                id="matakuliah" 
                                name="matakuliah"
                                required>
                            <option value="Pemrograman Web" {{ old('matakuliah', $mahasiswa->matakuliah) == 'Pemrograman Web' ? 'selected' : '' }}>Pemrograman Web</option>
                            <option value="Basis Data" {{ old('matakuliah', $mahasiswa->matakuliah) == 'Basis Data' ? 'selected' : '' }}>Basis Data</option>
                            <option value="Algoritma" {{ old('matakuliah', $mahasiswa->matakuliah) == 'Algoritma' ? 'selected' : '' }}>Algoritma</option>
                            <option value="Struktur Data" {{ old('matakuliah', $mahasiswa->matakuliah) == 'Struktur Data' ? 'selected' : '' }}>Struktur Data</option>
                        </select>
                        @error('matakuliah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times me-2"></i>Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Update Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection