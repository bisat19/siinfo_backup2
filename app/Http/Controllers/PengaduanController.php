<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    // Menampilkan halaman riwayat pengaduan
    public function index()
    {
        $pengaduans = Pengaduan::all(); // Mengambil semua data pengaduan dari database
        return view('pengaduan.index', compact('pengaduans'));
    }

    // Menampilkan form pengaduan
    public function create()
    {
        return view('pengaduan.form');
    }
}