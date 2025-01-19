<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function create()
    {
        return view('dashboard.layananpengaduan.form_pengaduan');
    }

    public function store(Request $request)
    {
        return redirect()->route('pengaduan.form')->with('success', 'Fungsi penyimpanan belum diimplementasi!');
    }
}