<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - QR Code Example</title>
    @vite('resources/js/app.js')
    @yield('javascript')
</head>
<body class="antialiased">
    <main id="mainContent" class="w-full scroll-auto flex align-content-center mt-10 flex-row">
        <div class="m-auto">
            @yield('content')
        </div>
    </main>
</body>
</html>
