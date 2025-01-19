<html>
<head>
    <title>Form Pengaduan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1E3A8A;
            color: white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #374151;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .container h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group input[type="file"] {
            padding: 3px;
        }
        .form-group button {
            background-color: #2563EB; /* Biru terang */
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .form-group button:hover {
            background-color: #1D4ED8; /* Biru lebih gelap */
        }
        .error {
            background-color: #EF4444; /* Merah */
            color: white;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Pengaduan</h1>

        <!-- Form Pengaduan -->
        <form action="/pengaduan/store" method="POST" enctype="multipart/form-data">
            <!-- Jenis Pengaduan -->
            <div class="form-group">
                <label for="jenis_pengaduan">Jenis Pengaduan:</label>
                <select name="jenis_pengaduan" id="jenis_pengaduan" required>
                    <option value="">Pilih jenis pengaduan</option>
                    <option value="Pengaduan 1">Pengaduan 1</option>
                    <option value="Pengaduan 2">Pengaduan 2</option>
                    <option value="Pengaduan 3">Pengaduan 3</option>
                </select>
            </div>

            <!-- Deskripsi -->
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" required></textarea>
            </div>

            <!-- File Upload -->
            <div class="form-group">
                <label for="file">Gambar (opsional):</label>
                <input type="file" name="file" id="file"/>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>