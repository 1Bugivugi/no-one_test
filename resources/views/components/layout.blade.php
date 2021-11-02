<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>{{$banner}}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    {{--  Bootstrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{--  Styles  --}}
    <link rel="stylesheet" href={{URL::asset("css/app.css")}}>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
          integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script type="text/javascript" src="./js/app.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
                        <a class="nav-link {{Request::is('/') ? 'active' : ''}}" aria-current="page" href="/">На
                            главную</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link {{(strpos(Request::url(), '/articles') > -1) ? 'active' : ''}}"
                           href="/articles">Каталог статей</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{$slot}}

</section>

<script>
    $(function () {
        $('.likesForm').on('submit', function (e) {
            e.preventDefault();
            let slug = $(e.target).attr('data-slug')
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "/articles/" + slug + '/likes',
                data: {},
                success: function (response) {
                    $(e.target).find('.likes-count').text(response);
                },
                error: function (res) {
                    console.log(res)
                    alert('Что-то пошло не так, попробуйте позже');
                }
            })
        })
    })
</script>
<footer></footer>
</body>
</html>
