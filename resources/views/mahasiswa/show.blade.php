@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="fas fa-user-circle me-2"></i>Detail Mahasiswa
                    </h4>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-sm btn-outline-light">
                        <i class="fas fa-arrow-left me-1"></i>Kembali
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-4 text-center">
                        <div class="avatar mb-3" style="font-size: 80px; color: #667eea;">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h5 class="text-primary">{{ $mahasiswa->nama }}</h5>
                        <span class="badge bg-primary">{{ $mahasiswa->nim }}</span>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tr>
                                <td width="30%"><strong>NIM:</strong></td>
                                <td>{{ $mahasiswa->nim }}</td>
                            </tr>
                            <tr>
                                <td><strong>Nama Lengkap:</strong></td>
                                <td>{{ $mahasiswa->nama }}</td>
                            </tr>
                            <tr>
                                <td><strong>Kelas:</strong></td>
                                <td>
                                    <span class="badge bg-info">{{ $mahasiswa->kelas }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Mata Kuliah:</strong></td>
                                <td>{{ $mahasiswa->matakuliah }}</td>
                            </tr>
                            <tr>
                                <td><strong>Tanggal Daftar:</strong></td>
                                <td>{{ $mahasiswa->created_at->format('d F Y H:i') }}</td>
                            </tr>
                            <tr>
                                <td><strong>Terakhir Diperbarui:</strong></td>
                                <td>{{ $mahasiswa->updated_at->format('d F Y H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}" class="btn btn-warning me-2">
                        <i class="fas fa-edit me-2"></i>Edit Data
                    </a>
                    <form action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" method="POST" 
                          class="d-inline" onsubmit="return confirmDelete()">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash me-2"></i>Hapus Data
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection