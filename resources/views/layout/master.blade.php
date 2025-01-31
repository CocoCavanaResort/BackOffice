<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ (isset($title) ? $title . ' | ' : '') . config('app.name') }}</title>

    <link rel="shortcut icon" href="/public/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch/dist/zephyr/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="/public/vendor/bootstrap/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="/public/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/public/src/css/style.min.css">
    @stack('style')

    <script src="/public/vendor/jquery/jquery-3.7.1.min.js"></script>
    <script src="/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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