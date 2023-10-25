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
        .gambar{
            width:359x;
            height:359px;
        }
        
        .formed {
            background-color: purple;
            border-color: #74583E;
            margin: 0 auto;
            display: flex;
            align-items: center;
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{('admin')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 14v8H4a8 8 0 0 1 8-8Zm0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6Zm9 4h1v5h-8v-5h1v-1a3 3 0 1 1 6 0v1Zm-2 0v-1a1 1 0 1 0-2 0v1h2Z"/></svg> Admin Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('karyawan')}}"><strong><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><g id="clarityEmployeeGroupSolid0" fill="currentColor"><ellipse cx="18" cy="11.28" rx="4.76" ry="4.7"/><path d="M10.78 11.75h.48v-.43a6.7 6.7 0 0 1 3.75-6a4.62 4.62 0 1 0-4.21 6.46Zm13.98-.47v.43h.48A4.58 4.58 0 1 0 21 5.29a6.7 6.7 0 0 1 3.76 5.99Zm-2.47 5.17a21.45 21.45 0 0 1 5.71 2a2.71 2.71 0 0 1 .68.53H34v-3.42a.72.72 0 0 0-.38-.64a18 18 0 0 0-8.4-2.05h-.66a6.66 6.66 0 0 1-2.27 3.58ZM6.53 20.92A2.76 2.76 0 0 1 8 18.47a21.45 21.45 0 0 1 5.71-2a6.66 6.66 0 0 1-2.27-3.55h-.66a18 18 0 0 0-8.4 2.05a.72.72 0 0 0-.38.64V22h4.53Zm14.93 5.77h5.96v1.4h-5.96z"/><path d="M32.81 21.26h-6.87v-1a1 1 0 0 0-2 0v1H22v-2.83a20.17 20.17 0 0 0-4-.43a19.27 19.27 0 0 0-9.06 2.22a.76.76 0 0 0-.41.68v5.61h7.11v6.09a1 1 0 0 0 1 1h16.17a1 1 0 0 0 1-1V22.26a1 1 0 0 0-1-1Zm-1 10.36H17.64v-8.36h6.3v.91a1 1 0 0 0 2 0v-.91h5.87Z"/></g></svg> Daftar Karyawan</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('vendor')}}"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M18.5 8.5v-5h-5m5 0l-7 7m-1-7h-5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-4"/></svg> Daftar Vendor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('home')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M8.502 11.5a1.002 1.002 0 1 1 0 2.004a1.002 1.002 0 0 1 0-2.005ZM12 4.353v6.651h7.442L17.72 9.28a.75.75 0 0 1-.073-.977l.073-.084a.75.75 0 0 1 .976-.072l.084.072l2.997 2.998a.75.75 0 0 1 .073.976l-.073.084l-2.996 3.003a.75.75 0 0 1-1.134-.975l.072-.084l1.713-1.717h-7.431L12 19.25a.75.75 0 0 1-.88.738l-8.5-1.501a.75.75 0 0 1-.62-.739V5.75a.75.75 0 0 1 .628-.74l8.5-1.396a.75.75 0 0 1 .872.74Zm-1.5.883l-7 1.15v10.732l7 1.236V5.237ZM13 18.5h.765l.102-.007a.75.75 0 0 0 .648-.744l-.007-4.25H13v5Zm.002-8.5L13 8.725V5h.745a.75.75 0 0 1 .743.647l.007.101l.007 4.252h-1.5Z"/></svg> Sign Out</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    </header>

    <div class="mb-5 container line"></div>

    <div class="content">
        <div class="container">
            <div class="float-right col-3" style="margin-left:auto; text-align:right";>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <button type="submit" style="width: auto; color:white; border-radius: 15px;" class="btn formed btn-block mb-2 mt-3">                
                    <a style="font-size:15px;" class="nav-link" href="{{('editAdmin')}}"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><g fill="none" stroke-linejoin="round" stroke-width="4"><rect width="36" height="36" x="6" y="6" fill="#2F88FF" stroke="#000" rx="3"/><path stroke="#fff" stroke-linecap="round" d="M24 16V32"/><path stroke="#fff" stroke-linecap="round" d="M16 24L32 24"/></g></svg><strong>Tambah Karyawan</strong></a>
                </button>
            </div>
        </div>
        <div class="container-fluid">


            <div class="row">
                <!-- Colom 1 -->
                @forelse ($anggota as $item)
                <div class="col-3">
                    <div class="card mb-3">
                        <img class="card-img-top gambar"
                        style="margin-right:auto; margin-left:auto; margin-top:auto;"
                            src="{{$item['gambar']}}">
                        <div class="card-body">
                            <div><strong>{{ $item['nama'] }}</strong></div>
                            <div>Email: {{ $item['email'] }}</div>
                            <div>No.Telp: {{ $item['telp'] }}</div>
                            <div>
                                <button type="submit" style="border-radius: 15px; background-color:green;" class="btn btn-primary btn-block mb-2 mt-3">
                                    <a class="nav-link" href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m7.057 2.418l1.167-.351a2.75 2.75 0 0 1 3.302 1.505l.902 2.006a2.75 2.75 0 0 1-.633 3.139L10.3 10.11a.25.25 0 0 0-.078.155c-.044.397.225 1.17.846 2.245c.45.781.859 1.33 1.206 1.637c.243.215.376.261.433.245l2.01-.615a2.75 2.75 0 0 1 3.034 1.02l1.28 1.776a2.75 2.75 0 0 1-.338 3.605l-.887.84a3.75 3.75 0 0 1-3.587.889c-2.754-.769-5.223-3.093-7.435-6.924C4.57 11.147 3.792 7.843 4.51 5.07a3.75 3.75 0 0 1 2.548-2.652Zm.433 1.437a2.25 2.25 0 0 0-1.53 1.59c-.602 2.332.087 5.261 2.123 8.788c2.034 3.522 4.223 5.582 6.54 6.23a2.25 2.25 0 0 0 2.152-.534l.886-.84a1.25 1.25 0 0 0 .154-1.639l-1.28-1.775a1.25 1.25 0 0 0-1.38-.464l-2.015.617c-1.17.348-2.231-.593-3.371-2.568C9 11.93 8.642 10.9 8.732 10.099c.046-.416.24-.8.545-1.086l1.495-1.393a1.25 1.25 0 0 0 .287-1.427l-.901-2.006a1.25 1.25 0 0 0-1.501-.684l-1.167.352Z"/></svg> Hubungi Karyawan</a>
                                </button>
                                <button type="submit" style="border-radius: 15px;" class="btn btn-primary btn-block mb-2 mt-3 btn-danger">
                                    <a class="nav-link" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M18 2H6a1 1 0 0 0-1 1v9l5-4v3h6v2h-6v3l-5-4v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/></svg> Berhentikan Karyawan</a>
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