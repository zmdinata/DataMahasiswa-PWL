<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::orderBy('created_at', 'desc')->get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        // === CUSTOM ERROR MESSAGES DI SINI ===
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim|max:15',
            'nama' => 'required|max:100',
            'kelas' => 'required|max:10',
            'matakuliah' => 'required|max:50'
        ], [
            // Custom messages untuk setiap rule
            'nim.required' => 'NIM wajib diisi',
            'nim.unique' => 'NIM sudah terdaftar di sistem',
            'nim.max' => 'NIM maksimal 15 karakter',
            'nama.required' => 'Nama lengkap wajib diisi',
            'nama.max' => 'Nama maksimal 100 karakter',
            'kelas.required' => 'Silakan pilih kelas',
            'kelas.max' => 'Nama kelas maksimal 10 karakter',
            'matakuliah.required' => 'Silakan pilih mata kuliah',
            'matakuliah.max' => 'Nama mata kuliah maksimal 50 karakter'
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        // === CUSTOM ERROR MESSAGES UNTUK UPDATE ===
        $request->validate([
            'nama' => 'required|max:100',
            'kelas' => 'required|max:10',
            'matakuliah' => 'required|max:50'
        ], [
            'nama.required' => 'Nama lengkap wajib diisi',
            'nama.max' => 'Nama maksimal 100 karakter',
            'kelas.required' => 'Silakan pilih kelas',
            'kelas.max' => 'Nama kelas maksimal 10 karakter',
            'matakuliah.required' => 'Silakan pilih mata kuliah',
            'matakuliah.max' => 'Nama mata kuliah maksimal 50 karakter'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}