@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="row mb-4">
    <div class="col">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">
                    <i class="fas fa-users me-2"></i>Data Mahasiswa
                </h4>
                <span class="badge bg-light text-dark">
                    <i class="fas fa-database me-1"></i> Total: {{ $mahasiswas->count() }} Data
                </span>
            </div>
            <div class="card-body">
                @if($mahasiswas->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIM</th>
                                <th>Nama Lengkap</th>
                                <th>Kelas</th>
                                <th>Mata Kuliah</th>
                                <th>Tanggal Daftar</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswas as $index => $mahasiswa)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <span class="badge bg-primary">
                                        <i class="fas fa-id-card me-1"></i> {{ $mahasiswa->nim }}
                                    </span>
                                </td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>
                                    <span class="badge bg-info text-dark">
                                        {{ $mahasiswa->kelas }}
                                    </span>
                                </td>
                                <td>{{ $mahasiswa->matakuliah }}</td>
                                <td>{{ $mahasiswa->created_at->format('d/m/Y') }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('mahasiswa.show', $mahasiswa->nim) }}" 
                                           class="btn btn-sm btn-info action-btn" 
                                           title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}" 
                                           class="btn btn-sm btn-warning action-btn" 
                                           title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirmDelete()">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn btn-sm btn-danger action-btn" 
                                                    title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="text-center py-5">
                    <i class="fas fa-database fa-4x text-muted mb-3"></i>
                    <h5 class="text-muted">Belum ada data mahasiswa</h5>
                    <p class="text-muted">Mulai tambahkan data pertama Anda</p>
                    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus-circle me-2"></i>Tambah Data Pertama
                    </a>
                </div>
                @endif
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle me-2"></i>Tambah Data Baru
                </a>
            </div>
        </div>
    </div>
</div>
@endsection