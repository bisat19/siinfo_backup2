<html>
<head>
    <title>SI-INFO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        .flex {
            display: flex;
        }
        .w-64 {
            width: 16rem;
        }
        .bg-gray-800 {
            background-color: #2d3748;
        }
        .h-screen {
            height: 100vh;
        }
        .text-white {
            color: white;
        }
        .p-4 {
            padding: 1rem;
        }
        .text-2xl {
            font-size: 1.5rem;
        }
        .font-bold {
            font-weight: bold;
        }
        .mt-10 {
            margin-top: 2.5rem;
        }
        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        .text-gray-300 {
            color: #d1d5db;
        }
        .hover\:bg-gray-700:hover {
            background-color: #4a5568;
        }
        .hover\:text-white:hover {
            color: white;
        }
        .mt-6 {
            margin-top: 1.5rem;
        }
        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        .text-gray-400 {
            color: #cbd5e0;
        }
        .ml-auto {
            margin-left: auto;
        }
        .flex-1 {
            flex: 1;
        }
        .p-10 {
            padding: 2.5rem;
        }
        .justify-between {
            justify-content: space-between;
        }
        .items-center {
            align-items: center;
        }
        .text-3xl {
            font-size: 1.875rem;
        }
        .space-x-4 > * + * {
            margin-left: 1rem;
        }
        .text-gray-600 {
            color: #4b5563;
        }
        .bg-white {
            background-color: white;
        }
        .min-w-full {
            min-width: 100%;
        }
        .border-b {
            border-bottom: 1px solid #e5e7eb;
        }
        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    </style>
</head>
<body>
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 h-screen text-white">
            <div class="p-4 text-2xl font-bold">SI-INFO</div>
            <nav class="mt-10">
                <a href="#" class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-home mr-3"></i>
                    Dashboard
                </a>
                <div class="mt-6">
                    <div class="px-6 text-gray-400">USER</div>
                    <a href="#" class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white">
                        <i class="fas fa-puzzle-piece mr-3"></i>
                        Kunjungan
                    </a>
                    <a href="#" class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white">
                        <i class="fas fa-puzzle-piece mr-3"></i>
                        Berita Kunjungan
                    </a>
                    <a href="#" class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white">
                        <i class="fas fa-puzzle-piece mr-3"></i>
                        Pengaduan
                    </a>
                    <a href="#" class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white">
                        <i class="fas fa-puzzle-piece mr-3"></i>
                        Riwayat Pengaduan
                    </a>
                    <a href="#" class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white">
                        <i class="fas fa-puzzle-piece mr-3"></i>
                        Layanan
                        <i class="fas fa-chevron-down ml-auto"></i>
                    </a>
                </div>
            </nav>
        </div>
        <!-- Main content -->
        <div class="flex-1 p-10">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-bold">Riwayat Pengaduan</h1>
                <div class="flex items-center space-x-4">
                    <i class="fas fa-search text-gray-600"></i>
                    <a href="#" class="text-gray-600">Logout</a>
                </div>
            </div>
            <div class="mt-6">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Tanggal Pengajuan</th>
                            <th class="py-2 px-4 border-b">Jenis Pengajuan</th>
                            <th class="py-2 px-4 border-b">Deskripsi</th>
                            <th class="py-2 px-4 border-b">File</th>
                            <th class="py-2 px-4 border-b">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($riwayat as $item)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $item['tanggal'] }}</td>
                                <td class="py-2 px-4 border-b">{{ $item['jenis'] }}</td>
                                <td class="py-2 px-4 border-b">{{ $item['deskripsi'] }}</td>
                                <td class="py-2 px-4 border-b">
                                    @if ($item['file'])
                                        <a href="/path/to/files/{{ $item['file'] }}" target="_blank">Lihat File</a>
                                    @else
                                        Tidak ada file
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b">{{ $item['status'] }}</td>
                             </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-2 px-4 text-center">Belum ada riwayat pengaduan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>