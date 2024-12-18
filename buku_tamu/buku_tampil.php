<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        /* Navbar styling */
        .navbar {
            background: linear-gradient(90deg, #4b79a1, #283e51); /* Warna gradien sama dengan halaman sebelumnya */
            overflow: hidden;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 1.2em 2em; /* Padding yang seragam */
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek elevasi */
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 0.5em 1.5em;
            font-size: 1.1em; /* Ukuran font lebih besar */
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .navbar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: scale(1.1); /* Efek zoom kecil saat hover */
        }

        /* Content styling */
        .content {
            padding: 2em;
            background-color: #f4f4f4;
            flex: 1;
        }

        .content h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1em;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        a.button {
            display: inline-block;
            margin-bottom: 1em;
            padding: 0.5em 1em;
            color: white;
            background-color: #333;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        a.button:hover {
            background-color: #575757;
        }

        /* Footer styling */
        .footer {
            background: linear-gradient(90deg, #2c5364, #2c5364, #2c5364);
            color: white;
            text-align: center;
            padding: 1.5em 0;
            margin-top: 2em; /* Menambahkan jarak antara footer dan konten */
        }

        .footer p {
            margin: 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="buku_tampil.php">Buku Tamu</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Buku Tamu</h1>
        <a href="Buku_Tambah.php" class="button">Tambah Buku</a>
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>EMAIL</th>
                    <th>PESAN</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $koneksi = mysqli_connect("localhost", "root", "", "buku");
                if (!$koneksi) {
                    die("Koneksi gagal: " . mysqli_connect_error());
                }
                $no = 1;
                $hasil = mysqli_query($koneksi, "SELECT * FROM tbltamu");
                while ($tampil = mysqli_fetch_array($hasil)) {
                ?>
                <tr>
                    <td align="right"><?= $no ?></td>
                    <td><?= htmlspecialchars($tampil['tb_nama']) ?></td>
                    <td><?= htmlspecialchars($tampil['tb_alamat']) ?></td>
                    <td><?= htmlspecialchars($tampil['tb_email']) ?></td>
                    <td><?= htmlspecialchars($tampil['tb_pesan']) ?></td>
                    <td>
                        <a href="Buku_Ubah.php?kode=<?= htmlspecialchars($tampil['tb_nama']) ?>">Ubah</a>
                        <a href="Buku_Hapus.php?kode=<?= htmlspecialchars($tampil['tb_nama']) ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                    $no++;
                }
                mysqli_close($koneksi);
                ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Muhamad Ridwan. All Rights Reserved.</p>
    </div>

</body>
</html>
