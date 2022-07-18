@extends('layouts.services')

@section('title')
    {{$course->name}}
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')
<div class="container">
    <h1 class="display-3"> Recursos de {{$course->name}} </h1>
    <br>
    <div class="alert alert-warning" role="alert" align="center">
        <strong>¡Atención!</strong>
        <p>
            Si desea agregar un enlace, por favor, no agregue contenido con derechos de autor.
        </p>
    </div>


    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Descripción</th>
          <th scope="col">Enlace</th>
        </tr>

      </thead>
      <tbody>
        @forelse($resources as $row) 
            <tr>
                <th scope="row">{{ $row['id'] }}</th>
                <td>{{ $row['description'] }} </td>
                <td> 
                    <a href="{{ $row['url'] }}" target="_blank" class="btn btn-success" title="{{$row['url']}}"> Visitar</a> 
                </td>

            </tr>
        @empty
            <tr>
               <td colspan="4"> Aún no hay enlaces disponibles</td>
            </tr>
        @endforelse
      </tbody>
    </table>

    @auth
        <div class="row" align="right">
            <div class="col-md-12">
                <a href={{"/services/shared_resources/add_resource/".$course->id}} class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Agregar recurso
                </a>
            </div>
        </div>
    @endauth


@endsection