<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('dashboard.pengaduan.index');
    }

    public function form()
    {
        return view('dashboard.pengaduan.form');
    }

    // public function store(Request $request)
    // {
    //     return redirect()->route('dashboard.pengaduan.index');
    // }
}