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
    <h5 class="display-5"> Enlaces de {{$school->name}} </h5>
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
        @if (count($links) > 0) 
            @foreach ($links as $row) 
                <tr>
                <th scope="row"> {{$row['id']}} </th>
                <td> {{$row['name']}} </td>

                <td> {{$row['description']}} </td>

                <td> <a href="{{$row['url']}}" class="btn btn-success"> Visitar</a> </td>
                </tr>
            @endforeach
        @else
            <tr>
            <td colspan="4"> Aún no hay enlaces disponibles</td>
            </tr>
        @endif
      </tbody>
    </table>

    @if ($status == "not_logged_in") 
        <div class="alert alert-warning alert-dismissible fade show" role="alert" align="center">
        <strong>¡Atención!</strong> Debes <a href="/login" class="alert-link">iniciar sesión</a> o <a href="/login" class="alert-link">asignarte una escuela</a> para poder agregar enlaces.
    @elseif ($status == "my_school")
        <div class="container" align="right">
        <a href="{{$_SERVER['REQUEST_URI']}}/add_link" class="btn btn-success"> Agregar enlace </a>
        </div><br>
        <div class="alert alert-dark" role="alert" align="center">
        <h4> Puedes ingresar tus propios enlaces para aumentar la información ofrecida por la página </h4>
        </div>
    @elseif ($status == "not_my_school")
        <div class="alert alert-dark" role="alert" align="center">;
        <h4> Solo puedes agregar enlaces a tus propias escuelas </h4>
        </div>
    @endif
  </div>

@endsection
