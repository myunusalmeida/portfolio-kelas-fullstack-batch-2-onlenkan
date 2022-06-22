<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Belanjaiin Dashboard</title>

    @include('includes.dashboard.styles')
    @stack('addon-style')
</head>

<body style="background-color: #FDFDFD">

    <div class="dashboard-page">
        <div class="wrapper">
            @include('includes.dashboard.sidebar')

            <div class="content">
                @include('includes.dashboard.header')

                <hr class="mt-4">

                @yield('content')
            </div>
        </div>
    </div>

    @include('includes.dashboard.scripts')
    @stack('addon-script')
</body>

</html>
