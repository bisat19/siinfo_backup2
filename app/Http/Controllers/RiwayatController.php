<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatController extends Controller 
{
    public function index()
    {
    $riwayat = [];

    if (empty($riwayat)) {
        // Jika array kosong, kirim pesan khusus
        return view('riwayat', ['riwayat' => [], 'message' => 'Belum ada riwayat pengaduan.']);
    }
        return view('riwayat', compact('riwayat'));
    }
}