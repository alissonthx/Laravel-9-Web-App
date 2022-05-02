<!DOCTYPE html>
<html lang="{{ str_replace('_', '-',app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Application Css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Font Poppins Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">
    <!-- Css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Application Js -->
    <script src="/js/script.js"></script>
</head>

<body>
    <header>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Classificação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ranking</a>
            </li>
        </ul>
        <div class="m">
            <img style="max-width: 60px;" src="/img/trophy.png" alt="">
            <h1>Meu Campeonato</h1>
        </div>
    </header>
    @yield('content')
    <footer>Made it by Álisson Marques &copy;</footer>
</body>

</html>