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
    <nav class="navbar navbar-dark bg-dark"> <div class="container-fluid">
        <a class="navbar-brand"> <img style="width: 50px; height: 50px; border-radius: 370px"
            src="{{asset('images\logo.jpg')}}" alt="logo" /> </a>
            <H1 style="color: white;">Daftar Karyawan</H1>
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
                            <a class="nav-link" href="{{ url('home')}}">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>

    <div class="content">
        <div class="card card-body mb-4 container callcard">
            <div class="row">
                <div class="col-3">
                    <img class="gambar"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwODZ-msfh5mYs7LmWCY3tWtF8vmH-RMwSOC8KM_am2w&s"
                        alt="">
                </div>
                <div class="col-7">
                    <div>Selamat Datang!<strong> {{ $dude['nama'] }}</strong></div>
                    <div>Jabatan : {{ $dude['jabatan'] }}</div>
                    <div>Ruang : {{ $dude['ruang'] }}</div>
                    <div>Total Pegawai : {{ $dude['pegawai'] }}</div>
                </div>
            </div>
        </div>
    </div>

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