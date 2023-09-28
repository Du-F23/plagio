<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMP PLAGIO</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/plagio/css/style.css')}}">

</head>

<body>
<header>
    <div id="particles-js"></div>
    <div class="container__menu">
        <div class="logo">
            <img src="{{ asset('assets/plagio/img/logos/logo.png')}}" alt="">
        </div>
        <div class="menu">
            <i class="fa-solid fa-bars" id="btn_menu"></i>
            <div id="back_menu"></div>
            <nav id="nav">
                <img src="{{ asset('assets/plagio/img/logos/logo.png')}}" alt="">
                @if(!Auth::check())
                <ul>
                    <li><a href="{{route('login') }}" id="inicio">Inicio de Sesión</a>
                    </li>
                </ul>
                @endif
            </nav>
        </div>
    </div>
</header>

<main>
    <div class="container__cover">
        <div class="cover">
            <div class="text">
                <h1>Sistema Web para búsqueda de plagio.</h1>
            </div>

            <div class="svg">
                <img src="{{asset ('assets/plagio/img/statics/file.svg')}}" alt="">
            </div>
        </div>
    </div>
</main>
<script src="{{ asset ('assets/plagio/js/script.js') }} "></script>
<script src="{{ asset ('assets/plagio/js/particles.min.js') }} "></script>
<script src="{{ asset ('assets/plagio/js/app.js') }} "></script>
</body>

</html>
