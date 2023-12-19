<!DOCTYPE html>
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
    @font-face {
        font-family: montserrat;
        src: url('fonts/Montserrat-VariableFont_wght.ttf');
    }

    * {
        font-family: montserrat;
        color: white;
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
        background-color: #2C2C2C;
        color: white;
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
        background-color: green;
        border-color: #74583E;
        margin: 0 auto;
        display: flex;
        align-items: center;
    }

    table {
        width: 80%;
        margin-left: 40px;
        margin-bottom: 20px;
    }
</style>

<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="{{asset('images\logoWhite.png')}}" class="navbar-brand">
                <img style="width: 5rem" src="{{asset('images\logoWhite.png')}}" alt="logo" />
            </a>
            <h1 style="color: white; margin-left: -40px; margin-top: 10px">Admin Page</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>


        <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
            <div class="bg-dark px-4">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{('admin')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 14v8H4a8 8 0 0 1 8-8Zm0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6Zm9 4h1v5h-8v-5h1v-1a3 3 0 1 1 6 0v1Zm-2 0v-1a1 1 0 1 0-2 0v1h2Z" />
                            </svg> <strong>Admin Page</strong>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{('employee')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 36 36">
                                <g id="clarityEmployeeGroupSolid0" fill="currentColor">
                                    <ellipse cx="18" cy="11.28" rx="4.76" ry="4.7" />
                                    <path d="M10.78 11.75h.48v-.43a6.7 6.7 0 0 1 3.75-6a4.62 4.62 0 1 0-4.21 6.46Zm13.98-.47v.43h.48A4.58 4.58 0 1 0 21 5.29a6.7 6.7 0 0 1 3.76 5.99Zm-2.47 5.17a21.45 21.45 0 0 1 5.71 2a2.71 2.71 0 0 1 .68.53H34v-3.42a.72.72 0 0 0-.38-.64a18 18 0 0 0-8.4-2.05h-.66a6.66 6.66 0 0 1-2.27 3.58ZM6.53 20.92A2.76 2.76 0 0 1 8 18.47a21.45 21.45 0 0 1 5.71-2a6.66 6.66 0 0 1-2.27-3.55h-.66a18 18 0 0 0-8.4 2.05a.72.72 0 0 0-.38.64V22h4.53Zm14.93 5.77h5.96v1.4h-5.96z" />
                                    <path d="M32.81 21.26h-6.87v-1a1 1 0 0 0-2 0v1H22v-2.83a20.17 20.17 0 0 0-4-.43a19.27 19.27 0 0 0-9.06 2.22a.76.76 0 0 0-.41.68v5.61h7.11v6.09a1 1 0 0 0 1 1h16.17a1 1 0 0 0 1-1V22.26a1 1 0 0 0-1-1Zm-1 10.36H17.64v-8.36h6.3v.91a1 1 0 0 0 2 0v-.91h5.87Z" />
                                </g>
                            </svg>Daftar Karyawan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{('vendor')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M18.5 8.5v-5h-5m5 0l-7 7m-1-7h-5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-4" />
                            </svg> Daftar Vendor
                        </a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" id="logout-form">
                            @csrf
                            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M8.502 11.5a1.002 1.002 0 1 1 0 2.004a1.002 1.002 0 0 1 0-2.005ZM12 4.353v6.651h7.442L17.72 9.28a.75.75 0 0 1-.073-.977l.073-.084a.75.75 0 0 1 .976-.072l.084.072l2.997 2.998a.75.75 0 0 1 .073.976l-.073.084l-2.996 3.003a.75.75 0 0 1-1.134-.975l.072-.084l1.713-1.717h-7.431L12 19.25a.75.75 0 0 1-.88.738l-8.5-1.501a.75.75 0 0 1-.62-.739V5.75a.75.75 0 0 1 .628-.74l8.5-1.396a.75.75 0 0 1 .872.74Zm-1.5.883l-7 1.15v10.732l7 1.236V5.237ZM13 18.5h.765l.102-.007a.75.75 0 0 0 .648-.744l-.007-4.25H13v5Zm.002-8.5L13 8.725V5h.745a.75.75 0 0 1 .743.647l.007.101l.007 4.252h-1.5Z" />
                                </svg> Sign Out
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body class="antialiased">
    <div class="col-3" style="margin:auto; margin-top:60px;">
        <div class="card" style="background-color: dark; color:white;">
            <img style="margin:auto; margin-top:30px; padding:5px; height: 300px; width:300px; border-radius:100%" src="{{$dude['gambar']}}">
            <div class="card-body">
                <table>
                    <tr>
                        <th colspan="2" style="text-align: center; font-size:20px">Profile Admin {{ $dude['nickname'] }}</th>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $dude['nLengkap'] }}</td>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <td>{{ $dude['jabatan'] }}</td>
                    </tr>
                    <tr>
                        <th>Ruang</th>
                        <td>{{ $dude['ruang'] }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

</body>



</html>