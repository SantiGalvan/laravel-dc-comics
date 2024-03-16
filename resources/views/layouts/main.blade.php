<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME', 'Dc Comics')}} | @yield('title')</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/ico" >

    <!-- Style -->
    @vite('resources/js/app.js')

    {{-- CDNS --}}
    @yield('cdns')
</head>
<body>

    {{-- Header --}}
    @include('includes.header')

    {{-- Main --}}
    <main>

        {{-- Section Jumbotron --}}
        <section id="section-jumbotron"></section>

        @yield('main-content')
    </main>

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Scripts --}}
    @yield('scripts')
    
</body>
</html>