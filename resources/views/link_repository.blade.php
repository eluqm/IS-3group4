<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Repositorio de Enlaces </title>
    <!-- Scripts -->
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/link_repository.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/navbar.css') !!}">
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
            <span class="navbar-text">
                <a class="nav-link" href="/register">Registrarse</a>
            </span>
            <span class="navbar-text">
                <a class="nav-link" href="/login">Iniciar Sesión</a>
            </span>
            </div>
        </div>
    </nav>

    <br>

    <div class="container">

@if (isset($schools))
    <table class="table table-hover table-bordered">
        <thead>
            </tr>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($schools != null) 
            {
                foreach ($schools as $school) 
                {
                    echo "<tr>";
                    echo "<th scope=\"row\">" . $school->id . "</th>";
                    echo "<td>" . $school->name . "</td>";
                    echo "<td> <a href=\"school/" . $school->id . "\" class=\"btn btn-success\"> Explorar</a> </td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>

@else
    <?php
        echo "<br>";
        echo "<div class=\"jumbotron\"  align=\"center\">";
        echo "<br>";
        echo "<h6 class=\"display-6\"> Áreas de la Universidad Nacional de San Agustín </h6>";
        echo "<br><br>";
        echo "<a href=\"link_repository/ing\" class=\"btn btn-success btn-lg\">Ingenierías</a>";
        echo "<br><br>";
        echo "<a href=\"link_repository/bio\" class=\"btn btn-warning btn-lg\">Biomédicas</a>";
        echo "<br><br>";
        echo "<a href =\"link_repository/soc\" class=\"btn btn-danger btn-lg\">Sociales</a>";
        echo "<br><br>";    
        echo "</div>";
        echo "<br>";
    ?>
@endif

</div>
</body>