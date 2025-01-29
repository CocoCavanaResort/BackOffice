<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ (isset($title) ? $title . ' | ' : '') . config('app.name') }}</title>

    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/fontawesome/all/min.css">
    <link rel="stylesheet" href="/res/css/style.min.css">
    @stack('style')

    <script src="/vendor/jquery/jquery-3.7.2.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    @stack('script')
</head>
<body>
    @include('partials.header')
    @include('partials.sidenav')
    <main>
        @yield('main')
    </main>
    @include('partials.footer')
</body>
</html>