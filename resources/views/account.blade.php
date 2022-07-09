@extends('layouts.board')

@section('title')
    Cuenta de {{ Auth::user()->first_name }}
@endsection

@section('back_url')
    <a href="{{ route('welcome') }}">
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/account.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

@endsection

@section('content')

    <!-- account info -->
    <div class="container" align="center">
        <br>
        <div class="container" align="center">
            <h3 class="display-3" > Información de Cuenta</h3>
        </div>
        <br>
        <!-- foreach attribute of auth::user() print it in a table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Propiedad</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user_attributes as $attribute)
                    <tr>
                        <td>{{ $attribute->name }}</td>
                        <td>{{ $attribute->value }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>

        @unless($has_school)
            <!-- form to register school -->
            <div class="container" align="center">
                <h5 class="display-5" > Registro de Escuela</h5>
            </div>
            <br>
            <form method="POST" action="{{ route('user_school') }}">
                @csrf
                <div class="form-group">
                <label for="school_name">Nombre de la Escuela Profesional: </label>
                <select name="school_id" id="school_id">
                    <option value="null"> Elija su escuela ... </option>
                    @foreach ($schools as $school)
                        <option value="{{ $school->id }}">{{ $school->name }}</option>
                    @endforeach
                </select>
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Registrar Escuela</button>
                <br><br><br>
            </form>
        @endunless

@endsection