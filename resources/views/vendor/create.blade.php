<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            max-width: 600px;
            margin: 50px auto;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #333;
            color: #fff;
            border-bottom: none;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-top: 10px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: green;
            color: #fff;
            border-radius: 8px;
            margin-top: 20px;
        }

        .form-group-button {
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="{{asset('images\logoWhite.png')}}" class="navbar-brand">
                    <img style="width: 5rem" src="{{asset('images\logoWhite.png')}}" alt="logo" />
                </a>
                <h1 style="color: white; margin-left: -40px; margin-top: 10px">Vendor Page</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
                <div class="bg-dark px-4">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{('admin')}}">
                                Admin Page
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('employee')}}">
                                Employee Page
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('vendor')}}">
                                <strong>Daftar Vendor</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                @csrf
                                <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign Out
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <a href="{{asset('images\logoWhite.png')}}" class="navbar-brand">
                    <img style="width: 10rem" src="{{asset('images\logoWhite.png')}}" alt="logo" />
                </a>
            </div>

            <div class="card-body">
                <form action="{{ route('vendor.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control @error('vendor_name') is-invalid @enderror" name="vendor_name" value="{{ old('vendor_name') }}" placeholder="Enter Name">
                        @error('vendor_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Type</label>
                        <input type="text" class="form-control @error('vendor_type') is-invalid @enderror" name="vendor_type" value="{{ old('vendor_type') }}" placeholder="Enter Type">
                        @error('vendor_type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Admin</label>
                        <input type="text" class="form-control @error('vendor_admin') is-invalid @enderror" name="vendor_admin" value="{{ old('vendor_admin') }}" placeholder="Enter Admin">
                        @error('vendor_admin')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control @error('vendor_phone') is-invalid @enderror" name="vendor_phone" value="{{ old('vendor_phone') }}" placeholder="Enter Phone">
                        @error('vendor_phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group-button">
                        <button type="submit" class="btn btn-primary btn-block">SIMPAN</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>