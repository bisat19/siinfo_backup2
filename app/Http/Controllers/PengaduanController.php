<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    // Menampilkan halaman riwayat pengaduan
    public function index()
    {
        $pengaduans = Pengaduan::all(); // Mengambil semua data pengaduan dari database
        return view('pengaduan.index', compact('pengaduan'));
    }

    // Menampilkan form pengaduan
    public function create()
    {
        return view('pengaduan.form');
    }

    // // Proses penyimpanan data pengaduan
    // public function store(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'jenis_pengaduan' => 'required|string|max:255',
    //         'deskripsi' => 'required|string',
    //         'file' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
    //     ]);

    //     // Simpan file jika ada
    //     $filePath = null;
    //     if ($request->hasFile('file')) {
    //         $filePath = $request->file('file')->store('pengaduan_files', 'public');
    //     }

    //     // Simpan data ke database
    //     Pengaduan::create([
    //         'jenis_pengaduan' => $request->jenis_pengaduan,
    //         'deskripsi' => $request->deskripsi,
    //         'file' => $filePath,
    //         'status' => 'Open', // Status default
    //     ]);

    //     // Redirect ke halaman form dengan pesan sukses
    //     return redirect()->route('pengaduan.create')->with('success', 'Pengaduan berhasil dikirim.');
    // }
}