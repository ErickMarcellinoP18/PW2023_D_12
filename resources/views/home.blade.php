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

        #contact {
            padding-top: 70px;
        }

        /* footer */

        h6 {
            color: white;
            margin-bottom: 3px;
            font-weight: bold;
        }

        p {
            color: white;
            margin-bottom: 2px;
        }

        .navbar-brand-footer {
            margin-left: 50px;
            margin-right: -400px;
        }

        .navbar-brand-footer img {
            margin-left: -30px;
            margin-top: -10px;
        }

        .footer-1 {
            text-align: left;
            margin-left: 380px;
            margin-top: -50px;
        }

        .footer-2 {
            text-align: left;
            margin-top: -55px;
            margin-left: 5%;
        }

        .col {
            color: red;
            max-width: 600px;
            margin-top: 15px;
        }

        .sosmed {
            margin-left: -353px;
            margin-top: 5px;
        }

        h3 {
            color: white;
            text-align: right;
            margin-top: -75px;
            margin-right: -40px;
            font-family: 'Courier Prime';
            word-spacing: 5px;
            letter-spacing: 5px;
        }

        .custom-navbar {
            background-color: #74583E;
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
                        <p> &nbsp</p>
                        <p class="card-text-isi">With our experienced team, trusted vendor network, and our commitment to client satisfaction,
                            we have built a reputation as the top choice in the industry. Trust us to turn your wedding vision into an
                            unforgettable reality." </class=>
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
                    @foreach ($agenda as $item)
                    <a href="{{route('event.create')}}"><img src="{{ $item['gambar'] }}" alt=" Venue 1"></a>
                    @endforeach
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

                    <!-- <a href="{{route('event.create')}}"><img src="{{ asset('images/Package.jpeg') }}" alt="Package 1"></a>
                    <a href="{{ url('customer2') }}"><img src="{{ asset('images/Package2.jpeg') }}" alt="Package 2"></a>
                    <a href="{{ url('customer2') }}"><img src="{{ asset('images/Package3.jpeg') }}" alt="Package 3"></a>
                    <a href="{{ url('customer2') }}"><img src="{{ asset('images/Package4.jpeg') }}" alt="Package 4"></a>
                    <a href="{{ url('customer2') }}"><img src="{{ asset('images/Package5.jpeg') }}" alt="Package 5"></a> -->
                </div>

            </div>
        </div>
    </section>

    <!-- Section 4: Contact -->
    <section id="contact">
        <nav class="navbar navbar-dark custom-navbar">
            <div class="container-fluid" style="height: 70px;">
                <a class="navbar-brand-footer">
                    <img style="width: 150px" src=" {{asset('images\logoWhite.png')}}" alt="logo" />
                </a>
                <div class="container-fluid text-center">
                    <div class="row">
                        <div class="col">
                            <div class="footer-1">
                                <h6>PT KERJA KERAS</h6>
                                <p>St. Bonaventura</p>
                                <p>Jl. Babarsari No.43</p>
                                <p>Yogyakarta 55281</p>
                            </div>
                        </div>
                        <div style="width: 100px; height: 0px; left: 530px; top: 25px; position: absolute; transform: rotate(90deg); transform-origin: 0 0; border: 1px white solid"></div>
                        <div class="col">
                            <div class="footer-2">
                                <p>Email : kerjakeras@gmail.com</p>
                                <p>Phone : 0274487711</p>
                                <p>Mobile : 082321992030</p>
                            </div>
                            <div class="sosmed">
                                <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 0 448 512" style="margin-right: 20px;"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 0 448 512" style="margin-right: 20px;"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="21px" viewBox="0 0 512 512" style="margin-right: 20px;"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3>Dreams Come True</h3>
                </div>
            </div>
        </nav>
    </section>

    <script>
        // Add smooth scrolling behavior to links
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

            // Clear the user_logged_in session variable
            @if(session('user_logged_in'));
            @php
            @session(['user_logged_in' => false]);
            @endphp
            @endif

            location.reload();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>