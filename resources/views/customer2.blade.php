<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Page</title>
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

    body {
        background-color: #fff;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #74583E;
        color: #fff;
        text-align: center;
        padding: 1rem;
    }

    .header-content {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .header-content h1 {
        text-align: center;
    }

    .logo-link {
        margin-right: 20px;
    }

    .logo-link img {
        width: 100px;
        text-align: left;
    }

    .customer-content {
        display: flex;
        justify-content: center;
        gap: 20px;
        padding-top: 50px;
    }

    .customer-item {
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 25rem;
        height: 30rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .customer-item img {
        max-width: 100%;
        max-height: 100%;
    }

    .whatsapp-link {
        text-decoration: none;
        background-color: #25d366;
        color: #fff;
        border-radius: 5px;
        padding: 10px 20px;
        font-weight: bold;
    }

    .whatsapp-link img {
        width: 30px;
        height: 30px;
        margin-right: 10px;
    }
</style>

<body>
    <header>
        <div class="header-content">
            <a class="logo-link" href="{{ url('home') }}">
                <img src="{{ asset('images/logoWhite.png') }}" alt="Logo">
            </a>
            <h1>Welcome to Our Store</h1>
        </div>
    </header>
    <section class="customer-content">
        <div class="customer-item">
            <img src="{{ asset('images/Package3.jpeg') }}" alt="Product 1">
            <a class="whatsapp-link" href="https://wa.me/081394887296?text=Hallo! Saya tertarik dengan Package 1.">
                Chat Admin WhatsApp
            </a>
        </div>
        <div class="customer-item">
            <img src="{{ asset('images/Package4.jpeg') }}" alt="Product 2">
            <a class="whatsapp-link" href="https://wa.me/081394887296?text=Hallo! Saya tertarik dengan Package 2.">
                Chat Admin WhatsApp
            </a>
        </div>
        <div class="customer-item">
            <img src="{{ asset('images/Package2.jpeg') }}" alt="Product 3">
            <a class="whatsapp-link" href="https://wa.me/081394887296?text=Hallo! Saya tertarik dengan Package 3.">
                Chat Admin WhatsApp
            </a>
        </div>
    </section>

</body>

</html>