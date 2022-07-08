<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> {{$school->nombre}} </title>
    <!-- Scripts -->
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
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
    <h1 class="display-3"> Enlaces de {{$school->name}} </h1>
    <br>

    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripción</th>
          <th scope="col">Enlace</th>
        </tr>

      </thead>
      <tbody>
        <?php
        if (count($links) > 0) 
        {
          foreach ($links as $row) 
          {
            echo "<tr>";
            echo "<th scope=\"row\">" . $row['id'] . "</th>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['descripcion'] . "</td>";
            echo "<td> <a href=\"" .  $row['url'] . "\" class=\"btn btn-success\"> Visitar</a> </td>";
            echo "</tr>";
          }
        }
        else
        {
          echo "<tr>";
          echo "<td colspan=\"4\"> Aún no hay enlaces disponibles</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>

    <?php 
        echo '<div class="alert alert-info" role="alert" align="center">';
        echo "<h4> Puedes ingresar tus propios enlaces para aumentar la información ofrecida por la página </h4>";
        // boostrap button
        // echo '<a href="' . url('/enlaces/create') . '" class="btn btn-info"> Agregar enlace </a>';
        echo "</div>";
    ?>

  </div>

</body>