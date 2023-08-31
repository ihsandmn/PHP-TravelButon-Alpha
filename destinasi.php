<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi</title>
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

    <!-- Video Header -->     
    </nav>
        <div class="layar-penuh">
        <header id = "home">
            <div class="overlay"></div>
            <video autoplay muted loop>
                <source src="asset/video1.mp4" type="video/mp4"/>
            </video>
            <div class="intro">
                <h3>Destination</h3>
                <p>Scroll down to continue</p>
            </div>
        </header>

        <!-- Blog Destinasi --> 
        <main>
            <section class="abuabu" id="blog">
                <div class="layar-dalam">
                    <h3>Recommendations</h3>
                    <p class="ringkasan">
                        Here our latest pick.
                    </p>
                    <div class="blog">
                        <div class="area">
                            <div class="gambar" style="background-image: url('asset/destinasi1.jpg');"></div>
                            <div class="text">
                                <article>
                                    <h4><a href="destinasi1.php">Pantai Nirwana</a>
                                    </h4>
                                    <p>Lokasi: Sula, Kec. Betoambari, Bau-Bau, Kab. Buton.
                                    </p>
                                </article>
                            </div>
                        </div>
                        <div class="area">
                            <div class="gambar" style="background-image: url('asset/destinasi3.jpeg');"></div>
                            <div class="text">
                                <article>
                                    <h4><a href="destinasi2.php">Wisata Kampung Bajo</a>
                                    </h4>
                                    <p>Lokasi: Wakuli, Kec. Kapontori, Kab. Buton.
                                    </p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer Bawah --> 
        <footer id="contact">
            <div class="layar-dalam">
               <div>
                <h5>Help</h5>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, nulla.
               </div>
               <div>
                <h5>Contact</h5>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, nulla.
            </div>
            <div>
                <h5>Location</h5>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, nulla.
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