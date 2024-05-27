<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Bahan Pangan dan Teknologi</title>
    <link rel="stylesheet" href="Landing_Page.css">
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
    <header>
        <nav>
            <h1>Bahan Pangan dan Teknologi</h1>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#products">Produk</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <section id="about" class="about">
        <h2>Tentang Kami</h2>
        <p>Kami adalah perusahaan yang berfokus pada penyediaan bahan pangan berkualitas tinggi menggunakan teknologi terkini untuk memastikan kesegaran dan keamanan produk kami.</p>
    </section>

    <section id="products" class="products">
        <h2>Produk Kami</h2>
        <div class="product-list">
            <div class="product-item">
                <img src="beras.jpg" alt="Beras">
                <h3>Beras</h3>
                <p>Beras organik yang kaya nutrisi dan bebas pestisida.</p>
            </div>
            <div class="product-item">
                <img src="sayuran.jpg" alt="Sayuran">
                <h3>Sayuran</h3>
                <p>Sayuran segar yang dipetik langsung dari kebun.</p>
            </div>
            <div class="product-item">
                <img src="gambar buah.jpg" alt="Buah-buahan">
                <h3>Buah-buahan</h3>
                <p>Buah-buahan pilihan dengan rasa yang manis dan segar.</p>
            </div>
        </div>
        <p><a href="userlogin.php" class="tbl-biru">HALAMAN SELANJUTNYA</a></p>
    </section>

    <section id="contact" class="contact">
        <h2>Kontak Kami</h2>
        <form action="#" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Kirim</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Bahan Pangan dan Teknologi. All Rights Reserved.</p>
    </footer>
</body>
</html>
