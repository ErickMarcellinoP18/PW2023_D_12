<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }


        .btn-container {
            display: flex;
            justify-content: center;
        }

        .btn-container button {
            flex: 1;
            margin: 0 5px;
            border-radius: 8px;
        }

        .btn-container .btn-primary {
            background-color: green;
            color: #fff;
        }

        .custom-edit-button a {
            color: white;
            text-decoration: none;
            /* Remove underline from the link */
        }

        .btn-container .btn-danger {
            background-color: #d9534f;
            color: #fff;
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
                <h1 style="color: white; margin-left: -40px; margin-top: 10px">Event Page</h1>
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
                                Karyawan Page
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('vendor')}}">
                                Vendor Page
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('event')}}">
                                <strong>Event Page</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{('vendor')}}">
                                Vendor Page
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
        <div class="btn-container">
            <a href="{{route('event.create')}}" class="add-event-btn btn btn-block btn-success">
                <strong class="text-white" style="font-size: 24px;"><span class="plus-logo">+</span> Add Event </strong>
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Location</th>
                    <th>Budget</th>
                    <th>Date</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($event as $item)
                <tr>
                    <td><strong>{{ $item->location }}</strong></td>
                    <td>{{ $item->budget }}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->category }}</td>
                    <td>
                        <div class="btn-container">
                            <button type="submit" class="btn btn-warning">
                                <a class="nav-link" href="{{route('event.edit', $item->id_event) }}">Edit</a>
                            </button>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('event.destroy', $item->id_event)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <a class="nav-link" href="#">Delete Event</a>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center alert alert-danger">
                        Data event masih kosong.
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>