<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css" />

    <style>
        /* Font Style */
        @font-face {
            font-family: montserrat;
            src: url('fonts/Montserrat-VariableFont_wght.ttf');
        }

        * {
            font-family: montserrat;
            color: white;
        }

        /* Navbar Style*/
        .navbar {
            padding: 35px;
            background-color: transparent;
            transition: background-color 0.5s, border-bottom 0.10s;
            /* Add smooth transition effect */
        }

        .navbar-small {
            height: 60px;
            /* Reduce the height of the navbar */
        }

        .navbar-transition {
            background-color: #74583E;
            border-bottom: 2px solid white;
            /* Set background color and border when scrolled */
        }

        .navbar-nav .nav-item .nav-link {
            font-size: 1.2rem;
            font-weight: bold;
            color: white !important;
            text-shadow: 2px 2px black;
        }

        .navbar-nav .nav-link:hover {
            font-size: 1.3rem;
        }

        .navbar-brand img {
            max-width: 100px;
        }

        /* banner */
        .banner-image {
            margin-bottom: 10px;
            height: 100vh;
            background-image: url('images/home1.png');
            background-size: cover;
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
        }

        /* About Us */
        .card {
            margin: 15px;
            display: flex;
            box-shadow: 1px 1px gray;
            border: black;
        }

        .card-body {
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 15px;
            padding-bottom: 15px;
            color: white;
            background-color: #74583E;
        }

        .card-text-isi {
            font-size: 14px;
            font-weight: 250;
        }

        .card-title {
            font-size: 30px;
            padding-bottom: 5px;
            justify-content: center;
        }

        /* Venue */
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
            margin-left: 32px;
            margin-right: 32px;
            margin-bottom: 25px;
            width: 180px;
            height: 180px;
            border: 4px solid white;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
        }

        /* Padding */

        #about-us {
            padding-top: 70px;
        }

        #venue {
            padding-top: 70px;
        }

        #package {
            padding-top: 70px;
        }

        #testimony {
            padding-top: 70px;
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
                        @if(session('user_logged_in'))
                        <!-- User is considered logged in, show the "Logout" link -->
                        <a class="nav-link" href="javascript:void(0);" onclick="logoutUser();">Logout</a>
                        @else
                        <!-- User is not considered logged in, show the "Login" link -->
                        <a class="nav-link" href="{{ url('login')}}">Login</a>
                        @endif
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
                        <p class="card-text-isi">"The perfect solution for your wedding needs! We are professional wedding event organizer,
                            ready to provide an exceptional experience in planning and executing various types of wedding dreams.</p>
                        <p class="card-text-isi">With our experienced team, trusted vendor network, and our commitment to client satisfaction,
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
                    <img src="{{ asset('images/Venue2.jpeg') }}" alt="Venue 1" data-href="venue1.html">
                    <img src="{{ asset('images/Venue3.jpeg') }}" alt="Venue 2" data-href="venue2.html">
                    <img src="{{ asset('images/Venue6.jpeg') }}" alt="Venue 3" data-href="venue3.html">
                    <img src="{{ asset('images/Venue4.jpeg') }}" alt="Venue 4" data-href="venue4.html">
                    <img src="{{ asset('images/Venue5.jpeg') }}" alt="Venue 5" data-href="venue5.html">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Package -->
    <section id="package">
        <div class="container">
            <div class="venue-card-all">
                <h5 class="text-center mb-4"><img src="{{ asset('images/logoTextOnly.png') }}" alt="" style="width: 10rem;">
                    &nbsp;&nbsp;Package Choice
                </h5>
                <div class="venue-card mx-auto">
                    <img src="{{ asset('images/Package.jpeg') }}" alt="Venue 1" data-href="venue1.html">
                    <img src="{{ asset('images/Package2.jpeg') }}" alt="Venue 2" data-href="venue2.html">
                    <img src="{{ asset('images/Package3.jpeg') }}" alt="Venue 3" data-href="venue3.html">
                    <img src="{{ asset('images/Package4.jpeg') }}" alt="Venue 4" data-href="venue4.html">
                    <img src="{{ asset('images/Package5.jpeg') }}" alt="Venue 5" data-href="venue5.html">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Testimony -->
    <section id="testimony">
        <div class="container">
            <div class="venue-card-all">
                <h5 class="text-center mb-4"><img src="{{ asset('images/logoTextOnly.png') }}" alt="" style="width: 10rem;">
                    &nbsp;&nbsp;Testimony
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
                navbar.classList.add('navbar-transition');
            } else {
                navbar.classList.remove('navbar-transition');
            }
        });

        function logoutUser() {
            // Send a request to log out the user (you can use an API endpoint or a server route)
            // After successfully logging out, update the link text and href
            // In this example, we simply reload the page without making a request

            // Clear the user_logged_in session variable


            location.reload();
        }
    </script>

    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>