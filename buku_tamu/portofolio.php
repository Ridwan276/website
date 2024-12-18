<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eef2f3;
            color: #333;
        }

         /* Navbar styling */
         .navbar {
            background: linear-gradient(90deg, #4b79a1, #283e51); /* Gradien warna seragam */
            color: white;
            overflow: hidden;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 1.2em 2em; /* Padding lebih besar */
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
        /* Profile container styling */
        .profile-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            padding: 2em;
            gap: 2em;
            max-width: 1200px;
            margin: 2em auto;
            background-color: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .profile-image img {
            width: 220px;
            height: 280px;
            border-radius: 15px;
            object-fit: cover;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .profile-details {
            flex: 1;
            max-width: 600px;
        }

        .profile-details h1 {
            margin: 0;
            color: #4b79a1;
            font-size: 2.5em;
        }

        .profile-details h3 {
            color: #6c757d;
            font-weight: normal;
            margin-bottom: 1em;
        }

        .profile-details p {
            font-size: 1em;
            line-height: 1.6;
            margin: 0.5em 0;
        }

        .section-title {
            margin-top: 1.5em;
            font-weight: bold;
            color: #283e51;
            border-bottom: 2px solid #4b79a1;
            padding-bottom: 0.5em;
            font-size: 1.2em;
        }

        .info-section p {
            margin: 0.3em 0;
        }

        .info-section strong {
            color: #555;
        }

        /* Footer styling */
        .footer {
            background: linear-gradient(90deg, #2c5364, #2c5364, #2c5364);
            color: white;
            text-align: center;
            padding: 1.5em 0;
            margin-top: 2em;
        }

        .footer p {
            margin: 0;
            font-size: 0.9em;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .profile-container {
                flex-direction: column;
                text-align: center;
                padding: 1.5em;
            }

            .profile-image img {
                width: 180px;
                height: 240px;
            }

            .profile-details {
                max-width: 100%;
            }
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
    <!-- Profile Section -->
    <div class="profile-container">
        <!-- Profile Image -->
        <div class="profile-image">
            <img src="gue.jpg" alt="Muhamad Ridwan">
        </div>
    

        <!-- Profile Details -->
        <div class="profile-details">
            <h1>Muhamad Ridwan</h1>
            <h3>Ilmu Komputer</h3>
            <!-- Content -->
    
            <!-- Profile Introduction -->
            <p>"Halo! Saya Muhamad Ridwan, seorang tenaga kependidikan di SMK Jaya Buana dan juga mahasiswa aktif di Yatsi Madani University. Dengan usia 20 tahun, saya memiliki semangat yang tinggi dalam mengeksplorasi teknologi dan pendidikan untuk menciptakan dampak positif dalam lingkungan belajar dan pengajaran."</p>

            <!-- Education Section -->
            <div class="info-section">
                <p class="section-title">PENDIDIKAN</p>
                <p><strong>SMK Jaya Buana</strong><br>
                Tahun (2020-2023)</p>
                <p><strong>MTS Printis Futuhiyyah</strong><br>
                Tahun (2017-2020)</p>
                <p><strong>SDN bunar 2</strong><br>
                Tahun (2011-2017)</p>
            </div>

            <!-- Organization Section -->
            <div class="info-section">
                <p class="section-title">ORGANISASI</p>
                  <!-- Organization Section -->
                <p><strong>GP-Ansor</strong><br>
                2023-sekarang</p>
                <p><strong>HIMAKOM</strong> - Humas<br>
                2024</p>
            </div>

            <!-- Work Section -->
            <div class="info-section">
                <p class="section-title">PEKERJAAN</p>
                <p>Tenaga Kependidikan<br>
                2024</p>
            </div>

            <!-- Languages Section -->
            <div class="info-section">
                <p class="section-title">HOBI</p>
                <p>MOTORAN</p>
                <p>NGOPI</p>
                <p>BERDISKUSI</p>
            </div>
        </div>
    </div>

   

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Muhamad Ridwan. All Rights Reserved.</p>
    </div>
</body>
</html>
