<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
    <link rel="icon" href="{{asset('favicon.ico')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>

<body>
    <header class="header">
        <p class="header_text">FashionablyLate</p>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>