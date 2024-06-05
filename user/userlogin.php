<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macam-Macam Teknologi Pangan yang Bermanfaat</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #e3f2fd;
            color: #333;
        }

        .menu {
            width: 100%;
            background-color: #0056b3;
            padding: 10px 0;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .menu ul {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .menu li {
            margin: 0 15px;
        }

        .menu a {
            text-decoration: none;
            color: white;
            padding: 10px 15px;
            transition: background-color 0.3s, color 0.3s;
        }

        .menu a:hover {
            background-color: white;
            color: #0056b3;
            border-radius: 5px;
        }

        .wrapper {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding-top: 60px; /* To offset the fixed navbar */
        }

        #home {
            position: relative;
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        #home img {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            z-index: -1;
        }

        #home .kolom {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            max-width: 600px;
            border-radius: 10px;
            text-align: center;
        }

        #home .kolom h2 {
            margin-top: 20px;
        }

        section {
            padding: 60px 0;
        }

        section h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        section p {
            text-align: justify;
            line-height: 1.6;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .grid-container img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .small-image {
            width: 150px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .tbl-biru {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #0056b3;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 10px 0 10px;
            transition: background-color 0.3s;
        }

        .tbl-biru:hover {
            background-color: #003f7f;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #0056b3;
            color: white;
            font-size: 12px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <nav class="menu">
        <ul>
            <li><a href="kalkulatorPupuk.php">Kalkulator Pupuk</a></li>
            <li><a href="#home">Home</a></li>
            <li><a href="#index">Index</a></li>
            <li><a href="#isi">Isi</a></li>
            <li><a href="#courses">Courses</a></li>
            <li><a href="#">Sign Up</a></li>
        </ul>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="teknologi-pangan.jpg" alt="Teknologi Pangan">
            <div class="kolom">
                <h2>Website Teknologi Pangan</h2>
                <p class="deskripsi">Website ini merekomendasikan beberapa bahan pangan yang baik dan bermanfaat bagi tubuh serta beberapa cara pengolahan maupun pengemasan yang baik dan steril.</p>
                <p class="deskripsi">Berbagai macam bahan pangan dan teknologi</p>
            </div>
        </section>

        <section id="courses">
            <h2>Macam-Macam Bahan Pangan</h2>
            <div class="grid-container">
                <div>
                    <h3>Sayuran</h3>
                    <p>Sayuran adalah salah satu jenis makanan sehat karena kaya akan nutrisi dan gizi yang baik untuk kesehatan tubuh.</p>
                    <img src="Manfaat-Kesehatan-Sayur-Pakcoy-yang-Perlu-Kamu-Ketahui-1024x683.jpg" alt="Gambar Sayuran">
                </div>
                <div>
                    <h3>Buah</h3>
                    <p>Buah mengandung banyak nutrisi dan gizi untuk kesehatan tubuh, sama seperti sayur.</p>
                    <img src="gambar buah.jpg" alt="Gambar Buah">
                </div>
                <div>
                    <h3>Kacang-Kacangan dan Biji-Bijian</h3>
                    <p>Kacang-kacangan dan biji-bijian adalah jenis makanan sehat yang kaya akan nutrisi.</p>
                    <img src="gambar kacang dan biji bijian.jpeg" alt="Gambar Kacang dan Biji-Bijian">
                </div>
                <div>
                    <h3>Makanan Laut</h3>
                    <p>Makanan laut dan berbagai jenis ikan dikenal karena kaya akan protein.</p>
                    <img src="gambar makanan laut.jpg" alt="Gambar Makanan Laut">
                </div>
                <div>
                    <h3>Daging dan Telur</h3>
                    <p>Daging dan telur kaya akan protein yang penting untuk kesehatan tubuh.</p>
                    <img src="gambar daging dan telur.webp" alt="Gambar Daging dan Telur">
                </div>
                <div>
                    <h3>Susu dan Produk Olahannya</h3>
                    <p>Susu adalah bagian dari semboyan 4 sehat 5 sempurna dan penting untuk kesehatan.</p>
                    <img src="gambar susu.png" alt="Gambar Susu dan Produk Olahannya">
                </div>
            </div>
        </section>

        <section>
            <h1>Manfaat Mengkonsumsi Makanan Sehat</h1>
            <p>Menjaga tubuh dari berbagai penyakit tidak menular, seperti penyakit jantung, diabetes, dan kanker.</p>
            <img src="gambar manfaat sayur sayuran.png" alt="Gambar Manfaat Sayur Sayuran" class="small-image">
            <div class="button-container">
                <a href="javascript:history.back()" class="tbl-biru">BACK</a>
                <a href="index(2).php" class="tbl-biru">HALAMAN SELANJUTNYA</a>
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Teknologi Pangan. All rights reserved.</p>
    </footer>
</body>
</html>
