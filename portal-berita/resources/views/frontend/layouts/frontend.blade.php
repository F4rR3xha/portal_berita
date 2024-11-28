<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>

        {{-- Navbar --}}
        @include('frontend.includes.header')

        {{-- Content --}}
        <div class="container">
            @yield('content')
        </div>

        {{-- Footer --}}
        @include('frontend.includes.footer')

        <!-- Optional JavaScript; choose one of the two! -->
        @include('frontend.includes.js')
        
    </body>
</html>