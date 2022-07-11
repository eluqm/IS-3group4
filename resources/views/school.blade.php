@extends('layouts.services')

@section('title')
    {{$school->name}}
@endsection

@section('scripts')
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>
@endsection

@section('styles')
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/link_repository.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/navbar.css') !!}">
@endsection

@section('content')
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
        if ($status == "not_logged_in") 
        {
            // centered
            echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\" align=\"center\">";
            echo "<strong>¡Atención!</strong> Debes <a href=\"/login\" class=\"alert-link\">iniciar sesión</a> para poder agregar enlaces.";
        }
        else if ($status == "my_school")
        {
            $url = $_SERVER['REQUEST_URI'] . '/add_link';
            // echo div align right
            echo "<div class=\"container\" align=\"right\">";
            echo '<a href="' .  $url . '" class="btn btn-success"> Agregar enlace </a>';
            echo "</div><br>";
            echo '<div class="alert alert-dark" role="alert" align="center">';
            echo "<h4> Puedes ingresar tus propios enlaces para aumentar la información ofrecida por la página </h4>";
            echo "</div>";
        }
        else if ($status == "not_my_school")
        {
            echo '<div class="alert alert-dark" role="alert" align="center">';
            echo "<h4> Solo puedes agregar enlaces a tus propias escuelas </h4>";
            echo "</div>";
        }
    ?>

  </div>

@endsection
