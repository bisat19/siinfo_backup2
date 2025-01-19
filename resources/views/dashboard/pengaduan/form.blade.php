@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1>Form Pengaduan</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="jenis_pengaduan">Jenis Pengaduan</label>
            <select id="jenis_pengaduan" name="jenis_pengaduan" class="form-control" required>
                <option value="">Pilih Jenis Pengaduan</option>
                <option value="Technical Issue">Technical Issue</option>
                <option value="Service Complaint">Service Complaint</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="file">Upload File</label>
            <input type="file" id="file" name="file" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form> -->
</div>
@endsection