<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css" />
    <!-- Custom CSS -->
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
            transition: background-color 0.5s, border-bottom 0.10s;
            /* Add smooth transition effect */
            padding: 35px;
            /* Adjust top and bottom padding */
        }

        .navbar-small {
            height: 60px;
            /* Reduce the height of the navbar */
        }

        .navbar-blue {
            background-color: #74583E;
            border-bottom: 2px solid white;
            /* Set the background color to blue when scrolled */
        }

        h2 {
            color: white;
        }

        .navbar-nav .nav-item .nav-link {
            font-size: 1.2rem;
            text-shadow: 2px 2px black;
            font-weight: bold;
            color: white !important;
        }

        .navbar-nav .nav-link:hover {
            font-size: 1.3rem;
        }

        .banner-image {
            background-image: url('images/home1.png');
            background-size: cover;
            margin-bottom: 10px;
            height: 100vh;
        }

        .navbar-brand img {
            max-width: 100px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin: 20px;
        }

        .grid-child {
            padding: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
        }

        .image {
            text-align: center;
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
        }

        .card {
            margin: 15px;
            display: flex;
            box-shadow: 1px 1px gray;
            border: black;
        }

        .card-body {
            background-color: #74583E;
            color: white;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .card-text-big {
            font-size: 14px;
            font-weight: 250;
        }

        .card-title {
            font-size: 30px;
            padding-bottom: 5px;
            justify-content: center;
        }

        .venue-card-all {
            margin-top: 50px;
            background-color: #74583E;
            max-width: 800px;
            border-radius: 40px;
            margin: 0 auto;
            text-align: center;
        }

        .venue-card-all h5 {
            margin: 15px;
            color: white;
            font-size: 25px;
            font-weight: bold;
            padding-top: 15px;
            padding-bottom: 0px;
            text-shadow: -2px 2px black;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .venue-card {
            overflow-x: auto;
            white-space: nowrap;
            text-align: center;
            padding-left: 32px;
        }

        .venue-card img {
            max-width: 180px;
            height: 180px;
            display: inline-block;
            cursor: pointer;
            border: 4px solid white;
            border-radius: 50%;
            margin-left: 32px;
            margin-right: 32px;
            margin-bottom: 25px;
        }

        /* Section 1: About Us */
        #about-us {
            padding-top: 70px;
            /* Add some padding to create space for the navbar */
        }

        /* Section 2: Venue */
        #venue {
            padding-top: 70px;
            /* Add some padding to create space for the navbar */
        }

        /* Section 3: Contact */
        #package {
            padding-top: 70px;
            /* Add some padding to create space for the navbar */
        }

        /* Section 3: Contact */
        #testimony {
            padding-top: 70px;
            /* Add some padding to create space for the navbar */
        }
    </style>
</head>

<body>
    <a name="top"></a>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-small">
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
                        <a class="nav-link" href="#about-us">About Us</a>
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

    <!-- Section 1: About Us -->
    <section id="about-us">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width: 30.4rem; margin-left: 230px;">
                    <img class="card-img-top" src="{{ asset('images/lampu.jpeg') }}" alt="Card image cap">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <div class="card-title">
                            <h5 class="card-title" style="display: flex; align-items:flex-end;">
                                <strong style="margin-bottom: 10px;">Welcome to</strong>&nbsp;&nbsp;
                                <img src="{{ asset('images/logoWhite.png') }}" alt="" style="width: 7rem;">
                            </h5>
                        </div>
                        <p class="card-text-big">"The perfect solution for your wedding needs! We are professional wedding event organizer,
                            ready to provide an exceptional experience in planning and executing various types of wedding dreams.</p>
                        <p class="card-text-big">With our experienced team, trusted vendor network, and our commitment to client satisfaction,
                            we have built a reputation as the top choice in the industry. Trust us to turn your wedding vision into an
                            unforgettable reality." </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Venue -->
    <section id="venue">
        <div class="container">
            <div class="venue-card-all">
                <h5 class="text-center mb-4"><img src="{{ asset('images/logoTextOnly.png') }}" alt="" style="width: 10rem;">
                    &nbsp;&nbsp;Venue Choice
                </h5>
                <div class="venue-card mx-auto">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 1" data-href="venue1.html">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 2" data-href="venue2.html">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 3" data-href="venue3.html">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 4" data-href="venue4.html">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 5" data-href="venue5.html">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Package -->
    <section id="package">
        <div class="container">
            <div class="venue-card-all">
                <h5 class="text-center mb-4"><img src="{{ asset('images/logoTextOnly.png') }}" alt="" style="width: 10rem;">
                    &nbsp;&nbsp;Venue Choice
                </h5>
                <div class="venue-card mx-auto">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 1" data-href="venue1.html">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 2" data-href="venue2.html">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 3" data-href="venue3.html">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 4" data-href="venue4.html">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 5" data-href="venue5.html">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Testimony -->
    <section id="testimony">
        <div class="container">
            <div class="venue-card-all">
                <h5 class="text-center mb-4"><img src="{{ asset('images/logoTextOnly.png') }}" alt="" style="width: 10rem;">
                    &nbsp;&nbsp;Venue Choice
                </h5>
                <div class="venue-card mx-auto">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 1" data-href="venue1.html">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 2" data-href="venue2.html">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 3" data-href="venue3.html">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 4" data-href="venue4.html">
                    <img src="{{ asset('images/lampu.jpeg') }}" alt="Venue 5" data-href="venue5.html">
                </div>
            </div>
        </div>
    </section>

    <script>
        // Add smooth scrolling behavior to your links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1); // Get the target section's ID
                const targetSection = document.getElementById(targetId);

                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Change navbar background color when scrolling
        window.addEventListener('scroll', () => {
            const bannerImage = document.querySelector('.banner-image');
            const navbar = document.querySelector('.navbar');

            if (window.scrollY > bannerImage.clientHeight) {
                navbar.classList.add('navbar-blue');
            } else {
                navbar.classList.remove('navbar-blue');
            }
        });
    </script>

    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>