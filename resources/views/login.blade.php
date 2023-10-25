<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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
            background-color: #74583E !important;
            backdrop-filter: saturate(200%) blur(25px);
            border-color: 2px solid white;
            border-width: 4px;
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
            color: white;
        }

        .btn-primary {
            background-color: #74583E;
            border-color: white;
            margin: auto;
            display: flex;
            align-items: center;
            font-size: 24px;
        }

        .form-label {
            font-family: 'Jomolhari';
            font-size: 20px;
            color: white;
        }

        img {
            padding-bottom: 40px;
            padding-left: 45px;
        }
    </style>

    <body class="antialiased">
        <!-- ... (your navigation bar and other HTML elements) ... -->
        <section class="background-radial-gradient overflow-hidden">
            <div class="col-lg-6 mb-5 mb-lg-0 position-center">
                <div class="card bg-glass">
                    <div class="card-body px-5 py-5 px-md-5">
                        <div class="logo">
                            <img src="{{asset('images\logoWhite.png')}}" alt="logo login" />
                        </div>
                        <form class="form" method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="usernameInput" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="usernameInput" required />
                            </div>
                            <div class="mb-3">
                                <label for="passInput" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="passInput" required />
                            </div>

                            <button type="button" class="btn btn-link"><a class="nav-link" href="{{ url('/')}}">Forgot Password?</a></button>
                            <button type="button" class="btn btn-link" style="margin-left: 200px;"><a class="nav-link" href="{{ url('/register')}}">Register</a></button>
                            <button type="submit" style="width: auto; border-radius: 15px;" class="btn btn-primary btn-block mb-2 mt-3">Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>