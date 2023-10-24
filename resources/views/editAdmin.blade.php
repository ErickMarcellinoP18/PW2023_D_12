<!DOCTYPE html> <!-- Main content --> 

<html lang="en"> 
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

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
            color: #74583E;
        }

        .btn-primary {
            background-color: blue;
            border-color: #74583E;
            margin: 0 auto;
            display: flex;
            align-items: center;
        }
        
    </style>


<header>
    <nav class="navbar navbar-dark bg-dark"> <div class="container-fluid">
        <a class="navbar-brand"> 
            <img style="width: 50px; height: 50px; border-radius: 370px" src="{{asset('images\logo.jpg')}}" alt="logo" /> </a>
            <H1 style="color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 14v8H4a8 8 0 0 1 8-8Zm0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6Zm9 4h1v5h-8v-5h1v-1a3 3 0 1 1 6 0v1Zm-2 0v-1a1 1 0 1 0-2 0v1h2Z"/></svg> Admin Page</H1>
            <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent"
            aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span> </button>
            </div>

            <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
                <div class="bg-dark px-4">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li>
                            <a class="nav-link" href="{{('admin')}}"><strong>Admin Page</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('karyawan')}}">Daftar Karyawan</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/home')}}">Sign Out</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    </header>

    <body class="antialiased">
    <div class="col-3" style="margin:auto; margin-top:60px;">
                    <div class="card" style="background-color: #74583E; color:white;">
                    <img style="margin:auto; padding:5px; height: 300px; width:300px; border-radius:100%"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwODZ-msfh5mYs7LmWCY3tWtF8vmH-RMwSOC8KM_am2w&s" alt="">
                        <div class="card-body">
                        <div>Selamat Datang!<strong> {{ $dude['nickname'] }}</strong></div>
                        <div>Nama Lengkap : {{ $dude['nLengkap'] }}</div>
                        <div>Jabatan : {{ $dude['jabatan'] }}</div>
                        <div>Ruang : {{ $dude['ruang'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="float-right col-3" style="margin-left:auto; text-align:right";>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <button type="submit" style="width: auto; border-radius: 15px;" class="btn btn-primary btn-block mb-2 mt-3">                
                    <a style="font-size:13px;" class="nav-link" href="{{('editAdmin')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/><path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3l8.385-8.415zM16 5l3 3"/></g></svg><strong>Edit Data</strong></a>
                </button>
                </div>
                <br>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous">
                </script>
</body>

</html>