<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanjaiin - Ecommerce Terpercaya</title>

    @include('includes.styles')
    @stack('addon-style')
</head>

<body>

    @include('includes.navbar')

    @yield('content')

    <footer class="container pb-5">
        <p class="text-center text-secondary">2022 Copyright &copy; Belanjaiin. All Right Reserved</p>
    </footer>

    @include('includes.scripts')
    @stack('addon-script')
</body>

</html>
