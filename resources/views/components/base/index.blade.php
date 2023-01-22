<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? 'News'}}</title>

    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/template.css')}}" rel="stylesheet">
    <meta name="theme-color" content="#712cf9">

</head>

<body>

    <x-base.header />

    <main class="container mt-5 vh-100">
        {{$slot}}
    </main>

    <x-base.footer />
</body>

</html>
