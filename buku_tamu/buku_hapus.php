<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Buku Tamu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Add FontAwesome for icons -->
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
            background: linear-gradient(90deg, #4b79a1, #283e51); /* Warna gradien seperti sebelumnya */
            overflow: hidden;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 1.2em 2em;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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

        /* Message styling */
        .message-container {
            max-width: 600px;
            margin: 3em auto;
            background-color: #fff;
            padding: 2em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        .message {
            font-size: 1.2em;
            font-weight: bold;
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
            margin-top: auto; /* Footer tetap di bawah */
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

    <!-- Message Container -->
    <div class="message-container">
        <?php
        include "buku_koneksi.php";
        // Mendapatkan kode dari URL
        $kode = $_GET['kode'] ?? '';
        if (!empty($kode)) {
            // Query untuk menghapus data berdasarkan kode
            $sql = "DELETE FROM tbltamu WHERE tb_nama = '$kode'";
            if (mysqli_query($koneksi, $sql)) {
                echo "<p class='message success'>Data berhasil dihapus.<br><a href='buku_tampil.php'>Tampil Buku</a></p>";
            } else {
                echo "<p class='message error'>Gagal menghapus data: " . mysqli_error($koneksi) . "</p>";
            }
        } else {
            echo "<p class='message error'>Kode tidak valid.</p>";
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
