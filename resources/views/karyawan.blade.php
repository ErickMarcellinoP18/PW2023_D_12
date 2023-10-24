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
    <nav class="navbar navbar-dark bg-dark"> <div class="container-fluid">
        <a class="navbar-brand"> <img style="width: 50px; height: 50px; border-radius: 370px"
            src="{{asset('images\logo.jpg')}}" alt="logo" /> </a>
            <H1 style="color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><g id="clarityEmployeeGroupSolid0" fill="currentColor"><ellipse cx="18" cy="11.28" rx="4.76" ry="4.7"/><path d="M10.78 11.75h.48v-.43a6.7 6.7 0 0 1 3.75-6a4.62 4.62 0 1 0-4.21 6.46Zm13.98-.47v.43h.48A4.58 4.58 0 1 0 21 5.29a6.7 6.7 0 0 1 3.76 5.99Zm-2.47 5.17a21.45 21.45 0 0 1 5.71 2a2.71 2.71 0 0 1 .68.53H34v-3.42a.72.72 0 0 0-.38-.64a18 18 0 0 0-8.4-2.05h-.66a6.66 6.66 0 0 1-2.27 3.58ZM6.53 20.92A2.76 2.76 0 0 1 8 18.47a21.45 21.45 0 0 1 5.71-2a6.66 6.66 0 0 1-2.27-3.55h-.66a18 18 0 0 0-8.4 2.05a.72.72 0 0 0-.38.64V22h4.53Zm14.93 5.77h5.96v1.4h-5.96z"/><path d="M32.81 21.26h-6.87v-1a1 1 0 0 0-2 0v1H22v-2.83a20.17 20.17 0 0 0-4-.43a19.27 19.27 0 0 0-9.06 2.22a.76.76 0 0 0-.41.68v5.61h7.11v6.09a1 1 0 0 0 1 1h16.17a1 1 0 0 0 1-1V22.26a1 1 0 0 0-1-1Zm-1 10.36H17.64v-8.36h6.3v.91a1 1 0 0 0 2 0v-.91h5.87Z"/></g></svg> Daftar Karyawan</H1>
            <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent"
            aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span> </button>
            </div>

            <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
                <div class="bg-dark px-4">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li>
                            <a class="nav-link" href="{{('admin')}}">Admin Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('karyawan')}}"><strong>Daftar Karyawan</strong></a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/home')}}">Sign Out</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    </header>

    <div class="mb-5 container line"></div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h1>Daftar Karyawan </h1>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>
        <div class="container-fluid">


            <div class="row">
                <!-- Colom 1 -->
                @forelse ($anggota as $item)
                <div class="col-3">
                    <div class="card mb-3">
                        <img class="card-img-top"
                            src="https://cdn.idntimes.com/content-images/community/2021/09/fromandroid-df3d54cc2e2624ca203da0f60b89b4d6.jpg">
                        <div class="card-body">
                            <div><strong>{{ $item['nama'] }}</strong></div>
                            <div>Email: {{ $item['email'] }}</div>
                            <div>No.Telp: {{ $item['telp'] }}</div>
                            <div>
                                <button type="submit" style="width: auto; border-radius: 15px;" class="btn btn-primary btn-block mb-2 mt-3 btn-danger">
                                    <a class="nav-link" href="">Pecat Karyawan</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="alert alert-danger">
                    Data Kelas masi kosong
                </div>
                @endforelse
                <!-- row -->
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous">
                </script>
</body>

</html>