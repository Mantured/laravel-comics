<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laraverl Comics - @yield('title')</title>

    {{-- mi do la possibilitá di aggiungere degli script nel head --}}
    @yield('head-scripts')

    {{-- CSS import  --}}
    <link rel="stylesheet" href="{{asset("css/app.css")}}">

    {{-- eventuali CDN --}}

</head>
<body>

    @include('partials.header')

    <main>
        @yield('main-content')
    </main>

    @include('partials.footer')

    {{-- mi do la possibilitá di aggiungere degli script nel footer --}}
    @yield('footer-scripts')


</body>
</html>
