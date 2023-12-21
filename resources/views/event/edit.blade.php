<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Data</title>
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
                <img style="width: 5rem" src="{{asset('images\logoWhite.png')}}" alt="logo" />
                <h1 style="color: white; margin-left: -70px; margin-top: 10px">Edit Event</h1>
                <br>
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
                <form action="{{ route('employee.update', $employee->id_employee)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control @error('event_location') is-invalid @enderror" name="employee_name" value="{{ old('event_location') }}" placeholder="Enter Location">
                        @error('event_location')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Budget</label>
                        <input type="double" class="form-control @error('event_budget') is-invalid @enderror" name="event_budget" value="{{ old('event_budget') }}" placeholder="Enter Budget">
                        @error('event_budget')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Category</label>
                        <input type="text" class="form-control @error('event_category') is-invalid @enderror" name="event_category" value="{{ old('event_category') }}" placeholder="Enter Category">
                        @error('event_category')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control @error('event_date') is-invalid @enderror" name="event_date" value="{{ old('event_date') }}" placeholder="Enter Date">
                        @error('event_date')
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