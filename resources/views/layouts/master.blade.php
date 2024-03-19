<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> My Page | @yield( 'title' )</title>
</head>
<body>
    @include('include.nav')
    <main>
        @yield('content')
    </main>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    @include( 'include.footer' )
</body>
</html>
