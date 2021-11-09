<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href=" {{ asset("css/app.css") }}">
    @yield('cdn-import')
</head>
<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Main --}}
    <main class="container">
        <section id="@yield('section-id')">
            @yield('section-content')
        </section>
    </main>

    {{-- Footer --}}
    @include('partials.footer')


    @yield('script')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>