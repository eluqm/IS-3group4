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

    <div class="alert alert-info" role="alert" align="center">
    <h4> Puedes ingresar tus propios enlaces para aumentar la información ofrecida por la página </h4>

  </div>

@endsection