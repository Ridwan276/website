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
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Agar konten memenuhi tinggi viewport */
        }

        /* Background transparan */
        body::before {
            content: "";
            background-image: url('ngopi.jpg'); /* Ganti dengan path gambar */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            z-index: -1;
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

        /* Wrapper untuk isi halaman */
        .content {
            flex: 1; /* Konten utama mengambil ruang yang tersisa */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2em;
        }

        /* Profile styling */
        .profile-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 2em;
            gap: 2em;
            max-width: 1200px;
            margin: 2em auto;
            background-color: rgba(255, 255, 255, 0.9); /* Transparansi lembut */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .profile-image img {
            width: 200px;
            height: 250px;
            border-radius: 10px;
        }

        .profile-details h1 {
            margin: 0;
            color: #4b79a1; /* Warna seragam */
        }

        .profile-details h3 {
            color: #6c757d;
            font-weight: normal;
            margin-bottom: 1em;
        }

        /* Footer styling */
        .footer {
            background: linear-gradient(90deg, #2c5364, #2c5364, #2c5364);
            color: white;
            text-align: center;
            padding: 1.5em 0;
            margin-top: auto; /* Mendorong footer ke bawah */
        }

        .footer p {
            margin: 0;
            font-size: 0.9em;
        }
    </style>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Muhamad Ridwan",
        "jobTitle": "Tenaga Kependidikan",
        "affiliation": {
            "@type": "Organization",
            "name": "SMK Jaya Buana"
        },
        "alumniOf": {
            "@type": "EducationalOccupationalCredential",
            "name": "Yatsi Madani University"
        },
        "url": "https://www.example.com",  /* Ganti dengan URL yang sesuai */
        "image": "https://www.example.com/aku.png",  /* Ganti dengan path gambar yang sesuai */
        "description": "Muhamad Ridwan, seorang tenaga kependidikan di SMK Jaya Buana dan mahasiswa aktif di Yatsi Madani University.",
        "sameAs": [
            "https://www.linkedin.com/in/muhamadridwan",  /* Ganti dengan profil media sosial jika ada */
            "https://github.com/muhamadridwan"  /* Ganti dengan profil media sosial jika ada */
        ]
    }
    </script>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="portofolio.php">Portofolio</a>
        <a href="buku_tampil.php">Buku Tamu</a>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Profile Section -->
        <div class="profile-container">
            <!-- Profile Image -->
            <div class="profile-image">
                <img src="aku.png" alt="Muhamad Ridwan">
            </div>
            
            <!-- Profile Details -->
            <div class="profile-details">
                <h1>Muhamad Ridwan</h1>
                <h3>Ilmu Komputer</h3>
                <p>"Halo! Saya Muhamad Ridwan, seoraorang mahasiswa aktif di Yatsi Madani University dijurusan ilmu komputer ."</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Muhamad Ridwan. All Rights Reserved.</p>
    </div>
</body>
</html>
