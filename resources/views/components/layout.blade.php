<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$banner}}</title>

    <link rel="stylesheet" href="css/app.css">
    {{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="//unpkg.com/alpinejs" defer></script>

    {{--  Bootstrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body style="font-family: Open Sans, sans-serif">
<section class="">
    <div class="navbar navbar-light bg-light">
        <div class="container">
            <nav class="md:flex md:justify-between md:items-center">
                <a class="navbar-brand" href="/">Тредиум</a>
            </nav>

            <div class="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center d-flex flex-row">
                    <li class="nav-item px-3">
                        <a class="nav-link active" aria-current="page" href="/">На главную</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/articles">Каталог статей</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{$slot}}

</section>

<script type="text/javascript" src="./js/app.js"></script>
<footer></footer>
</body>
</html>
