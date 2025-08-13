<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Projet My Little Company')</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>

<body>
    @include("partials.nav_front")

    <div id="root" style="min-height: calc(100vh - 120px)"> {{-- 120px = taille de la nav + du footer --}}
        @yield("content")
    </div>

    @include("partials.footer_front")

</body>

</html>