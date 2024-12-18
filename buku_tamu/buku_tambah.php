<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Add FontAwesome for icons -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Navbar styling */
        .navbar {
            background: linear-gradient(90deg, #4b79a1, #283e51); /* Warna gradien sama seperti halaman sebelumnya */
            overflow: hidden;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 1.2em 2em; /* Padding yang seragam */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek elevasi */
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 0.5em 1.5em;
            font-size: 1.1em;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }
        .navbar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: scale(1.1);
        }

        /* Form styling */
        .form-container {
            max-width: 600px;
            margin: 2em auto;
            background-color: #fff;
            padding: 2em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-container dl {
            display: flex;
            flex-direction: column;
            gap: 1em;
        }

        .form-container dt {
            font-weight: bold;
            margin-bottom: 0.3em;
        }

        .form-container input[type="text"] {
            width: 100%;
            padding: 0.5em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container input[type="submit"] {
            background-color: #4b79a1;
            color: white;
            border: none;
            padding: 0.7em 1.5em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .form-container input[type="submit"]:hover {
            background-color: #283e51;
        }

        /* Table styling */
        table {
            width: 90%;
            margin: 2em auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 1em;
            text-align: center;
        }

        th {
            background-color: #4b79a1;
            color: white;
        }

        /* Footer styling */
        .footer {
            background: linear-gradient(90deg, #2c5364, #2c5364, #2c5364); /* Warna gradien yang sama dengan halaman sebelumnya */
            color: white;
            text-align: center;
            padding: 1.5em 0;
            margin-top: 2em; /* Menambahkan jarak antar konten dan footer */
        }

        /* General title */
        .title {
            text-align: center;
            margin: 1.5em 0;
            color: #333;
        }

        /* Back button styling */
        .back-button {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #2c5364;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
            transition: background-color 0.3s;
            margin: 1em auto;
            display: block;
            width: 150px;
        }

        .back-button:hover {
            background-color:#2c5364;
        }

        .back-button i {
            margin-right: 10px; /* Space between icon and text */
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

    <!-- Title -->
    <h1 class="title">Buku Tamu</h1>

    <!-- Form Container -->
    <div class="form-container">
        <form name="form1" action="" method="post">
            <dl>
                <dt>Nama</dt>
                <dd><input type="text" name="nama" placeholder="Masukkan Nama"></dd>

                <dt>Alamat</dt>
                <dd><input type="text" name="alamat" placeholder="Masukkan Alamat"></dd>

                <dt>Email</dt>
                <dd><input type="text" name="email" placeholder="Masukkan Email"></dd>

                <dt>Pesan</dt>
                <dd><input type="text" name="pesan" placeholder="Masukkan Pesan"></dd>

                <dt></dt>
                <dd><input type="submit" value="Simpan"></dd>
            </dl>
        </form>
    </div>

    <!-- PHP Logic -->
    <?php
    include "buku_koneksi.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];

        // Validasi sederhana sebelum insert
        if (!empty($nama) && !empty($alamat) && !empty($email) && !empty($pesan)) {
            $sql = "INSERT INTO tbltamu (tb_nama, tb_alamat, tb_email, tb_pesan) VALUES ('$nama', '$alamat', '$email', '$pesan')";
            if (mysqli_query($koneksi, $sql)) {
                echo "<p style='text-align:center; color:green;'>Data Tersimpan! <a href='buku_tampil.php'>Tampil Buku</a></p>";
            } else {
                echo "<p style='text-align:center; color:red;'>Gagal Perintah SQL: " . mysqli_error($koneksi) . "</p>";
            }
        } else {
            echo "<p style='text-align:center; color:red;'>Semua field harus diisi!</p>";
        }
    }
    ?>

    <!-- Back Button -->
    <a href="buku_tampil.php" class="back-button"><i class="fas fa-arrow-left"></i> Kembali</a>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 My Website. All Rights Reserved.
    </div>
</body>
</html>
