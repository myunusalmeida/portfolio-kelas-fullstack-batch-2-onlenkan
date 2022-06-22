<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Belanjaiin</title>

    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/styles/style.css') }}">
    <style>
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #000000;
            display: block;
            margin: 0 auto 50px;
            text-align: center;
        }
    </style>
</head>
<body>

    <section class="auth-page">
        <div class="container">
            @yield('content')
        </div>
    </section>

</body>
</html>
