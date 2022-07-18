@extends('layouts.services')

@section('title')
    Recursos compartidos
@endsection

@section('scripts')
@endsection

@section('styles')
    <link rel="stylesheet" href="{!! asset('css/services.css') !!}">
@endsection

@section('content')

    <div class="container">
        @if (isset($origin))
        <h1 class="display-3"> Cursos de {{ $origin}} </h1>
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

        @else
            <br>
            <div class="jumbotron container align-items-center">
                <br>
                <form action="{{ route('by_school') }}" method="GET">
                    <div class="form-group">
                        <label for="school">Seleccione la Escuela Profesional: </label>
                        <select class="form-select form-select-sm" id="school" name="school">
                            @forelse ($schools as $school)
                                <option value="{{ $school->id }}">{{ $school->name }}</option>
                            @empty
                                <option value="">No hay escuelas disponibles</option>
                            @endforelse
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </form>
                <br>
            </div>
            <br>
        @endif  

    </div>
@endsection



@section('styles')
    <link rel="stylesheet" href="{!! asset('css/shared_resources.css') !!}">
@endsection

@section('content')
<div class="container">

@if (isset($origin))
    <h1 class="display-3"> Cursos de {{ $origin}} </h1>
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


@else
<br>
<div class="jumbotron container align-items-center">
    <br>
    <form action="{{ route('by_school') }}" method="GET">
        <div class="form-group">
            <label for="school">Seleccione la Escuela Profesional: </label>
            <select class="form-select form-select-sm" id="school" name="school">
                @forelse ($schools as $school)
                    <option value="{{ $school->id }}">{{ $school->name }}</option>
                @empty
                    <option value="">No hay escuelas disponibles</option>
                @endforelse
            </select>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>
    <br>
</div>
<br>
@endif  

</div>


@endsection