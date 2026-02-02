@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="mb-0">
            <i class="fas fa-users me-2"></i>Data Mahasiswa
        </h4>
    </div>
    <div class="card-body">
        @if($mahasiswas && $mahasiswas->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Mata Kuliah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswas as $mahasiswa)
                        <tr>
                            <td>{{ $mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>{{ $mahasiswa->kelas }}</td>
                            <td>{{ $mahasiswa->matakuliah }}</td>
                            <td>
                                <a href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}" 
                                   class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" 
                                      method="POST" 
                                      class="d-inline"
                                      onsubmit="return confirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
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
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle me-2"></i>Tambah Data Pertama
                </a>
            </div>
        @endif
    </div>
    <div class="card-footer">
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">
            <i class="fas fa-plus-circle me-2"></i>Tambah Data Baru
        </a>
    </div>
</div>
@endsection