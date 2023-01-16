<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'News'}}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-nav.header-nav />

    <main class="content container mt-5">
        {{$slot}}
    </main>


    @vite('resources/js/app.js')
</body>
</html>