<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css" />

    <style>
        /* Navbar Style */
        @font-face {
            font-family: montserrat;
            src: url('fonts/Montserrat-VariableFont_wght.ttf');
        }

        * {
            font-family: montserrat;
        }

        .navbar {
            background-color: transparent;
        }

        h2 {
            color: white;
        }


        .navbar-nav .nav-item .nav-link {
            font-size: 1.2rem;
            /* Adjust the font size as needed */
            text-shadow: 2px 2px black;
            /* Adjust the shadow as needed */
            font-weight: bold;
            color: white !important;
            /* Set the text color to black with !important */
        }


        .navbar-nav .nav-link:hover {
            font-size: 1.3rem;
        }


        .banner-image {
            background-image: url('images/home1.png');
            background-size: cover;
        }


        .navbar-brand img {
            max-width: 100px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            /* Membagi kontainer menjadi dua kolom dengan lebar yang sama */
            gap: 20px;
            /* Jarak antara kotak kiri dan kanan */
            margin: 20px;
            /* Margin umum di sekitar kontainer */
        }

        .grid-child {
            padding: 20px;
            /* Isi di dalam setiap kotak */
            background-color: #f0f0f0;
            /* Warna latar belakang untuk kotak-kotak */
            border: 1px solid #ddd;
            /* Garis pembatas di sekitar kotak-kotak */
        }

        .image {
            /* Kontainer gambar */
            text-align: center;
            /* Untuk mengatur gambar ke tengah */
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
                /* Untuk tampilan seluler, hanya satu kolom */
            }
        }

        .card {
            margin: 50px;
            display: flex;
        }

        .card-text-big {
            font-size: 20px;
        }
    </style>


</head>

<body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="{{asset('images\logoWhite.png')}}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#venue">Venue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#package">Package</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimony">Testimony</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#signin">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner Image  -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="content text-center">
            <img src="{{asset('images\logoTextOnly.png')}}" alt="" class="logo-image">
            <h2>Unforgettable Weddings,</h2>
            <h2>Designed With Love.</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card" style="width: 40rem;">
                <img class="card-img-top" src="{{ asset('images/lampu.jpeg') }}" alt="Card image cap">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">Welcome to Say Yes</h5>
                    <p class="card-text-big">The perfect solution for your wedding needs! We are professional wedding event organizer,
                        ready to provide an exceptional experience in planning and executing various types of wedding dreams.With our
                        experienced team, trusted vendor network, and our commitment to client satisfaction, we have built a reputation
                        as the top choice in the industry. Trust us to turn your wedding vision into an unforgettable reality.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>