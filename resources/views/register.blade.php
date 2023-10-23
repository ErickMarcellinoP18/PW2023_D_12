<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="antialiased">
    <style>
        body {
            font-family: Roboto, Helvetica, Arial, sans-serif;
        }

        section {
            width: 100%;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .background-radial-gradient {
            background-image: url('images/home1.png');
            background-size: cover;
            height: 400px;
        }

        .bg-glass {
            background-color: #E5BDA7 !important;
            backdrop-filter: saturate(200%) blur(25px);
            border-color: #74583E;
            border-width: 3px;
            width: 550px;
            height: 650px;
            border-radius: 50px;
        }

        .card {
            margin: 0 auto;
            float: none;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-link {
            color: #74583E;
        }

        .btn-primary {
            background-color: #74583E;
            border-color: #74583E;
            margin: 0 auto;
            display: flex;
            align-items: center;
        }

        .form-label {
            font-family: 'Jomolhari';
            font-size: 20px;
            color: white;
        }
    </style>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img style="width: 50px; height: 50px; border-radius: 370px" src="{{asset('images\logo.jpg')}}" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
                <div class="bg-dark px-4">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('profil')}}">Venue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('form')}}">Package</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('form')}}">Testimony</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="background-radial-gradient overflow-hidden">
        <div class="col-lg-6 mb-5 mb-lg-0 position-center">
            <div class="card bg-glass">
                <div class="card-body px-5 py-5 px-md-5">
                    <form class="form" style="margin-top: 35px;" action="{{ url('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Name</label>
                            <input type="name" class="form-control" id="nameInput" required />
                        </div>
                        <div class="mb-3">
                            <label for="phoneInput" class="form-label">Phone</label>
                            <input type="phone" class="form-control" id="phoneInput" required />
                        </div>
                        <div class="mb-3">
                            <label for="addressInput" class="form-label">Address</label>
                            <input type="address" class="form-control" id="addressInput" required />
                        </div>
                        <div class="mb-3">
                            <label for="usernameInput" class="form-label">Username</label>
                            <input type="username" class="form-control" id="usernameInput" required />
                        </div>
                        <div class="mb-3">
                            <label for="passInput" class="form-label">Password</label>
                            <input type="password" class="form-control" id="passInput" required />
                        </div>

                        <!-- Submit button -->
                        <button type="submit" style="width: auto; border-radius: 15px; margin: top 30px;" class="btn btn-primary btn-block mb-2 mt-3 ">
                            REGISTER
                        </button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>