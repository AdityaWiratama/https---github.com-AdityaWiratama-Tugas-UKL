<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macam macam teknologi pangan yang bermanfaat.</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }

        body {
            background-color: lightblue;
            font-family: Arial, sans-serif;
        }

        .kolom img {
            width: 200px;
            height: 200px;
        }

        .menu {
            width: 100%;
            background-color: #0056b3;
            padding: 10px 0;
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

        #home {
            position: relative;
            height: 100vh; /* Viewport Height: 100% of the viewport height */
            width: 100%;
            overflow: hidden;
        }

        #home img {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            object-fit: cover; /* This ensures the image covers the whole area without stretching */
        }

        #home .kolom {
            position: relative;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.7); /* Optional: Semi-transparent background for text readability */
            padding: 20px;
            box-sizing: border-box;
        }

        .deskripsi, h2, p {
            margin: 0;
            padding: 10px 0;
        }

        .wrapper {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .small-image {
            width: 50px;
            height: 50px;
        }

        .tbl-biru {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: blue;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="menu">
                <ul>
                    <li><a href="kalkulatorPupuk.php">Kalkulator Pupuk</a></li>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#index">Index</a></li>
                    <li><a href="#isi">Isi</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="" class="tbl-biru">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="teknologi-pangan.jpg" alt="teknologi pangan">
            <div class="kolom">
                <p class="deskripsi">Website Teknologi pangan adalah sebuah website yang merekomendasikan beberapa bahan pangan yang baik dan bermanfaat bagi tubuh
                    dan beberapa cara pengolahan maupun pengemasan yang baik dan steril.
                </p>
                <p class="deskripsi">Berbagai macam bahan pangan dan teknologi</p>
                <h2>Macam bahan pangan dan teknologi</h2>
                <p>Semua jenis bahan yang dapat digunakan sebagai bahan makanan yang bersifat aman, memiliki palatabilitas, dan menyehatkan bagi manusia.</p>
            </div>
        </section>

        <section id="courses">
            <div class="kolom">
                <h2>Macam macam bahan pangan</h2>
                <p>1. Sayuran: Sayuran adalah salah satu jenis makanan sehat karena tentunya kaya akan nutrisi dan gizi yang baik untuk kesehatan tubuh...</p>
                <img src="Manfaat-Kesehatan-Sayur-Pakcoy-yang-Perlu-Kamu-Ketahui-1024x683.jpg" alt="gambar sayuran">
                <p>2. Buah: Sama seperti sayur, buah juga jenis makanan sehat yang mengandung banyak nutrisi dan gizi untuk kesehatan tubuh...</p>
                <img src="gambar buah.jpg" alt="gambar buah">
                <p>3. Kacang-kacangan dan biji-bijian: Jenis makanan sehat lainnya adalah kacang-kacangan dan biji-bijian...</p>
                <img src="gambar kacang dan biji bijian.jpeg" alt="gambar kacang dan biji-bijian">
                <p>4. Makanan laut dan berbagai jenis ikan: Jenis makanan sehat ini tentu dikenal karena kaya akan protein...</p>
                <img src="gambar makanan laut.jpg" alt="gambar makanan laut">
                <p>5. Daging dan telur: Daging dan telur juga termasuk jenis makanan sehat yang kaya dengan protein...</p>
                <img src="gambar daging dan telur.webp" alt="gambar daging dan telur">
                <p>6. Susu dan produk olahannya: Jika mengingat semboyan 4 sehat 5 sempurna, maka sudah pasti susu adalah salah satu jenis makanan sehat...</p>
                <img src="gambar susu.png" alt="gambar susu dan olahraga">
            </div>
        </section>

        <h1>Manfaat mengkonsumsi makanan / bahan pangan yang bermanfaat dan sehat</h1>
        <p>Menjaga tubuh dari berbagai penyakit tidak menular, seperti penyakit jantung, diabetes, dan kanker</p>
        <img src="gambar manfaat sayur sayuran.png" alt="gambar manfaat sayur sayuran" class="small-image">
        <p><a href="index(2).php" class="tbl-biru">HALAMAN SELANJUTNYA</a></p>
    </div>
</body>
</html>
