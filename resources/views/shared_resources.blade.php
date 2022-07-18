@extends('layouts.services')

@section('title')
    Recursos compartidos
@endsection

@section('scripts')
@endsection

@section('styles')
    <link rel="stylesheet" href="{!! asset('css/link_repository.css') !!}">
@endsection

@section('content')
<div class="container">
    <h1 class="display-3"> {{ $origin}} </h1>
    <br>

    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
        </tr>

      </thead>
      <tbody>
        @forelse ($courses as $course)
            <tr>
                <th scope="row">{{ $course->id }}</th>
                <td>{{ $course->name }}</td>
                <td> 
                    <a href="{{ route('course', $course->id) }}" class="btn btn-primary">Ver</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4"> Aún no hay enlaces disponibles</td>
            </tr>
        @endforelse
      </tbody>
    </table>
@endsection