<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="{!! asset('bootstrap/js/bootstrap.min.js') !!}"></script>
    @yield('scripts')
    <!-- Styles -->
    <link rel="stylesheet" href="{!! asset('bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/navbar.css') !!}">
    @yield('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"  >
        <div class="container-fluid">
            <a class="navbar-brand" >Tatleon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/services">Servicios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/support">Soporte</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/about">Acerca </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle navbar-text" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->first_name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <!-- account view -->
                        <a class="dropdown-item" href="/account">
                            Cuenta
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

                @else
                <span class="navbar-text">
                    <a class="nav-link" href="/login">Iniciar Sesión</a>
                </span>
                <span class="navbar-text">
                    <a class="nav-link" href="/register">Registrarse</a>
                </span>
                @endauth
                </ul>

            </div>
        </div>
    </nav>

    <br>

   @yield('content')

</body>
</html>