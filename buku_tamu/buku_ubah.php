<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku Tamu</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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

        /* Form styling */
        .form-container {
            max-width: 600px;
            margin: 3em auto;
            background-color: #fff;
            padding: 2em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-container dl {
            font-size: 1.2em;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 0.5em;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 1em;
        }
        .form-container input[type="submit"] {
            background-color: #4b79a1; /* Warna oranye */
            color: white;
            border: none;
            padding: 0.7em 1.5em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .form-container input[type="submit"]:hover {
            background-color: #f4f4f4;
        }

        .success {
            color: green;
        }
        .error {
            color: red;
        }

        /* Back button styling */
        .back-button {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #4b79a1; /* Warna yang konsisten dengan navbar */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #283e51; /* Warna yang lebih gelap saat hover */
        }

        .back-button i {
            margin-right: 10px; /* Space between icon and text */
        }

        /* Footer styling */
        .footer {
            background: linear-gradient(90deg, #2c5364, #2c5364, #2c5364);
            color: white;
            text-align: center;
            padding: 1.5em 0;
            margin-top: auto; /* Menambahkan margin auto agar footer selalu di bagian bawah */
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
        <a href="portofolio.php">Portfolio</a>
        <a href="buku_tampil.php">Buku Tamu</a>
    </div>

    <!-- Form Container -->
    <div class="form-container">
        <h2>Edit Buku Tamu</h2>
        <?php
        include "buku_koneksi.php";

        $kode = $_GET['kode'] ?? '';
        if (!empty($kode)) {
            $sql = "SELECT * FROM tbltamu WHERE tb_nama = '$kode'";
            $result = mysqli_query($koneksi, $sql);

            if ($hasil = mysqli_fetch_array($result)) {
        ?>
        <form name="form1" action="" method="post">
            <dl>
                <dt>Nama</dt>
                <dd><input type="text" name="nama" value="<?= htmlspecialchars($hasil['tb_nama']) ?>"></dd>

                <dt>Alamat</dt>
                <dd><input type="text" name="alamat" value="<?= htmlspecialchars($hasil['tb_alamat']) ?>"></dd>

                <dt>Email</dt>
                <dd><input type="text" name="email" value="<?= htmlspecialchars($hasil['tb_email']) ?>"></dd>

                <dt>Pesan</dt>
                <dd><input type="text" name="pesan" value="<?= htmlspecialchars($hasil['tb_pesan']) ?>"></dd>

                <dt></dt>
                <dd>
                    <input type="hidden" name="kode_lama" value="<?= htmlspecialchars($hasil['tb_nama']) ?>">
                    <input type="submit" value="Simpan">
                </dd>
            </dl>
        </form>
        <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $nama_baru = mysqli_real_escape_string($koneksi, $_POST['nama']);
                    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
                    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
                    $pesan = mysqli_real_escape_string($koneksi, $_POST['pesan']);
                    $kode_lama = mysqli_real_escape_string($koneksi, $_POST['kode_lama']);

                    $update_sql = "UPDATE tbltamu 
                                   SET tb_nama = '$nama_baru', tb_alamat = '$alamat', tb_email = '$email', tb_pesan = '$pesan' 
                                   WHERE tb_nama = '$kode_lama'";

                    if (mysqli_query($koneksi, $update_sql)) {
                        echo "<p class='success'>Data telah diubah! <a href='buku_tampil.php'>Tampil Buku</a></p>";
                    } else {
                        echo "<p class='error'>Gagal Perintah SQL: " . mysqli_error($koneksi) . "</p>";
                    }
                }
            } else {
                echo "<p class='error'>Data tidak ditemukan.</p>";
            }
        } else {
            echo "<p class='error'>Kode tidak valid.</p>";
        }
        ?>
        <!-- Back Button -->
        <a href="buku_tampil.php" class="back-button"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Muhamad Ridwan. All Rights Reserved.</p>
    </div>
</body>
</html>
