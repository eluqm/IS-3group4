@extends('layouts.board')

@section('title', 'Agregar enlace')

@section('back_url')
    <?php 
        $url = url()->current(); 
        $url = explode('/', $url);
        array_pop($url);
        $url = implode('/', $url);
        echo '<a href="' . $url . '">';
    ?>
@endsection

@section('styles')
    <link rel="stylesheet" href="{!! asset('css/board.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/navbar.css') !!}">
@endsection

@section('content')

    <!-- form to register school -->
    <div class="container" align="left">
        <h5 class="display-5" > Registro de Enlace de {{$school->name}} </h5>
        <br>
        <form method="POST" action="{{ route('add_link') }}">
            @csrf
            <div class="form-group">
            <label for="link_name">Nombre del Enlace: </label>
            <input type="text" class="form-control" id="link_name" name="link_name" placeholder="Nombre del Enlace" value="{{ old('link_name') }}">
            <label for="link_description">Descripción del Enlace: </label>
            <input type="text" class="form-control" id="link_description" name="link_description" placeholder="Descripción del Enlace" value="{{ old('link_description') }}">
            <label for="link_url">URL del Enlace: </label>
            <input type="text" class="form-control" id="link_url" name="link_url" placeholder="URL del Enlace">
            <input type="hidden" name="school_id" value="{{$school->id}}">
            </div>

            <br>
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-primary">Registrar Enlace</button>
            </div>
            <br><br>

        </form>
    </div>

    <!-- message of link added successfully -->
    @if (session('success'))
        <div class="container" align="center">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection