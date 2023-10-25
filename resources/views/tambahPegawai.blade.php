<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="antialiased">
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
            font-size: 20px;
            color: white;
        }
    </style>

    <body>
        <section class="background-radial-gradient overflow-hidden">
            <div class="col-lg-6 mb-5 mb-lg-0 position-center">
                <div class="card bg-glass">
                    <div class="card-body px-5 py-5 px-md-5">
                        <form class="form" method="post" action="{{ url('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Nama Pegawai</label>
                                <input type="text" name="nama" class="form-control" id="namaInput"/>
                            </div>
                            <div class="mb-3">
                                <label for="umurInput" class="form-label">Usia</label>
                                <input type="text" name="umur" class="form-control" id="umurInput"/>
                            </div>
                            <div class="mb-3">
                                <label for="addressInput" class="form-label">Alamat</label>
                                <input type="text" name="address" class="form-control" id="addressInput"/>
                            </div>
                            <div class="mb-3">
                                <label for="positionInput" class="form-label">Jabatan</label>
                                <input type="text" name="position" class="form-control" id="positionInput"/>
                            </div>
                            
                            <button type="submit" style="width: auto; border-radius: 15px; background-color:green;" class="btn btn-primary btn-block mb-2 mt-3">
                <a style="font-size:13px;" class="nav-link" href="{{('karyawan')}}"><strong>Done</strong></a>
            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>