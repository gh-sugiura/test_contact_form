<!DOCTYPE html>
<html lang="ja">
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
    <link rel="icon" href="{{asset('favicon.ico')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/app_admin.css')}}">
    @yield("css")
    {{-- @livewireStyles --}}
</head>

<body class="font-sans text-gray-900 antialiased">
    <header class="header">
        <span class="header_text">FashionablyLate</span>
        @yield("link")
    </header>
    <main>
        @yield("content")
    </main>
    {{-- @livewireScripts --}}
    <script src="{{asset('js/modal.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous">
    </script>
</body>

</html>