<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

    <!-- Navigasi Atas --> 
    <nav>
        <div class="layar-dalam">
        <div class="logo">
            <a href="index.php"><img src="asset/logo1.png" class="putih" /></a>
        </div>
        <div class="menu">
            <a href="#" class="tombol-menu">
                <span class="garis"></span>
                <span class="garis"></span>
                <span class="garis"></span>
                <span class="garis"></span>
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="destinasi.php">Destination</a></li>
                <li><a href="makanankhas.php">Food</a></li>
                <li><a href="adatistiadat.php">Culture</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- Video Header --> 
    <div class="layar-penuh">
        <header id = "home">
            <div class="overlay"></div>
            <video autoplay muted loop>
                <source src="asset/video1.mp4" type="video/mp4"/>
            </video>
            <div class="intro">
                <h3>Visit Buton Island</h3>
                <p>Information on one of the most beautiful island in Indonesia</p>
                <p>
                    <a href="destinasi.php" class="tombol">Discover More</a>
                </p>
            </div>
        </header>

        <!-- Section Quote --> 
        <main>
            <section id="aboutme">
            <div class="layar-dalam">
                <h3>Quote For Today</h3>
                <p class = "ringkasan">
                    “Remember that happiness is a way of travel, not a destination.”
                </p>
                <div class="konten-isi">
                    <p>Muhammad Ihsan Daimun</p>
                </div>
            </div>
            </section>
        </main>

        <!-- Footer Bawah --> 
        <footer id="contact">
            <div class="layar-dalam">
               <div>
                <h5>Help</h5>
                Muhammad Ihsan Daimun (13119893).
               </div>
               <div>
                <h5>Contact</h5>
                Telp : 082210943092.
            </div>
            <div>
                <h5>Location</h5>
                Jl. Kalisari, Gg. Lapan IV, RT10/01 No.47, Pekayon, Pasar Rebo, Jakarta Timur.
            </div>   
            </div>
            <div class="layar-dalam">
                <div class="copyright">
                    &copy; 2022 Travel Wonderful Buton Island
                </div>
            </div>
        </footer>
    </div>

    <!-- Framework Jquery dan Javascript --> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>
</html>