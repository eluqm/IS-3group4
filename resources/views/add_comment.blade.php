@extends('layouts.board')

@section('title', 'Agregar Comentario')

@section('back_url')
    <?php 
        $url = url()->current(); 
        $url = explode('/', $url);
        array_pop($url);
        array_pop($url);
        $url = implode('/', $url);
        echo '<a href="' . $url . '">';
    ?>
@endsection

@section('content')
<div class="container">
    @if(auth()->check()) 
        <div class="container" align="center">
            <h6 class="display-6" > Registro de Comentario  </h6>
            <br>
            <h3> {{ $teacher->last_name }}, {{ $teacher->first_name }} </h3>
        </div>
        <br>
        <form method="POST" action="{{ route('add_comment') }}">
            @csrf
            <div class="form-group">
                <input type="hidden" name="teacher_id" value="{{ $teacher->id }}">

                <label for="comment">Comentario</label>
                <input type="text" class="form-control" id="comment" name="comment" placeholder="Comentario">

                <!-- choose rating integer from 1 to 5 -->
                <label for="rating">Calificación</label>
                <select class="form-control" id="rating" name="rating" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <!-- select adjective from $adjectives -->
                <label for="adjective">Característica</label>
                <select class="form-control" id="adjective" name="adjective" required>
                    @foreach($adjectives as $adjective)
                        <option value="{{$adjective}}">{{$adjective}}</option>
                    @endforeach
                </select>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Registrar Comentario</button>
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