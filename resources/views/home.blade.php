<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
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
        }
        

        .carousel-caption {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.7); /* Latar belakang semi-transparan */
            border-radius: 10px;
            padding: 20px;
        }
        .navbar-nav .nav-link {
            font-size: 1.5rem; /* Adjust the font size as needed */
            text-shadow: 2px 2px black;
            font-weight: bold;
            color: #ffffff; /* Set the text color to white */
            
        }

        /* Customize the font size for "Say Yes" and "Unforgettable Weddings, Designed with Love" */
        .carousel-caption h1 {
            font-size: 4rem; /* Sesuaikan ukuran sesuai kebutuhan */
        }

        .carousel-caption p {
            font-size: 2rem; /* Sesuaikan ukuran sesuai kebutuhan */
        }
        
        .banner-image {
            background-image: url('images/lampu.jpeg');
            background-size: cover;
            filter:blur(3px)
        }
    </style>
    </styl>
</head>
<body>
            <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>
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
        <h1 class="text-white">Say Yes!</h1>
      </div>
    </div>
        </div>
    </div>
</nav>

<!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
