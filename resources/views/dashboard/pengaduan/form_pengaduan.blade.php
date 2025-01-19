<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .sidebar {
            width: 16rem;
            background-color: #2d3748;
            color: white;
            height: 100vh;
            padding: 1rem;
        }
        .sidebar .title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .sidebar nav a {
            display: flex;
            align-items: center;
            padding: 0.5rem 1.5rem;
            color: #a0aec0;
            text-decoration: none;
        }
        .sidebar nav a:hover {
            color: white;
        }
        .sidebar nav .section-title {
            padding: 0.5rem 1.5rem;
            color: #a0aec0;
            margin-top: 1.5rem;
        }
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1a202c;
            color: white;
            padding: 1rem;
        }
        .header a {
            color: white;
            text-decoration: none;
        }
        .content {
            padding: 1.5rem;
        }
        .content h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .form-container {
            background-color: white;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        .form-container .form-group {
            margin-bottom: 1rem;
        }
        .form-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .form-container select,
        .form-container textarea,
        .form-container input[type="file"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #cbd5e0;
            border-radius: 0.25rem;
            background-color: #edf2f7;
        }
        .form-container button {
            background-color: #3182ce;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="title">SI-INFO</div>
            <nav>
                <a href="#"><i class="fas fa-home mr-3"></i>Dashboard</a>
                <div class="section-title">USER</div>
                <a href="#"><i class="fas fa-puzzle-piece mr-3"></i>Kunjungan</a>
                <a href="#"><i class="fas fa-puzzle-piece mr-3"></i>Berita Kunjungan</a>
                <a href="#"><i class="fas fa-puzzle-piece mr-3"></i>Pengaduan</a>
                <a href="#"><i class="fas fa-puzzle-piece mr-3"></i>Layanan <i class="fas fa-chevron-down ml-auto"></i></a>
            </nav>
        </div>
        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <header class="header">
                <div class="flex items-center">
                    <i class="fas fa-search mr-4"></i>
                </div>
                <div>
                    <a href="#">Logout</a>
                </div>
            </header>
            <!-- Content -->
            <main class="content">
                <h1>Form Pengaduan</h1>
                <form class="form-container">
                    <div class="form-group">
                        <label for="jenis-pengaduan">Jenis Pengaduan</label>
                        <select id="jenis-pengaduan">
                            <option>Pilih Jenis Pengaduan</option>
                            <option>Pengaduan 1</option>
                            <option>Pengaduan 2</option>
                            <option>Pengaduan 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file-upload">Upload File</label>
                        <input type="file" id="file-upload">
                    </div>
                    <div class="form-group">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
</body>
</html>