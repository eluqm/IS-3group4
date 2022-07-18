
@extends('layouts.dashboard')

@section('title', 'Agregar enlace')

@section('back_url')
    <?php 
        $url = url()->current(); 
        $url = str_replace('add_resource', 'course', $url);
        echo '<a href="' . $url . '">';
    ?>
@endsection

@section('content')
<div class="container">
    @if(auth()->check()) 
        <div class="container" align="center">
            <h6 class="display-6" > Registro de Recurso  </h6>
            <br>
            <h3> {{ $course->name}} </h3>
        </div>
        <br>
        <form method="POST" action="{{ route('add_resource') }}">
            @csrf
            <div class="form-group">
                <input type="hidden" name="course_id" value="{{ $course->id }}">
                <label for="url">Descripción</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Descripción del recurso">
                <label for="url">URL</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="URL del recurso" required>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Registrar Recurso</button>
            <br><br>
        </form>

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        @endif
        </div>

@endsection