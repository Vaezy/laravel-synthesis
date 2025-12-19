<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <style>
            body {
                margin: 0;
                font-family: Poppins, sans-serif;
                background-color: #f5f8fa;
                padding-left: 200px;
                padding-right: 200px;
            }
            a {
                color: #52c9ff;
                text-decoration: none;
            }
            main {
                padding: 20px 0;
            }
        </style>
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </body>
</html>
