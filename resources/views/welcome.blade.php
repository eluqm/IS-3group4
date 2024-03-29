@extends('layouts.services')

@section('title')
    Inicio
@endsection

@section('scripts')
@endsection

@section('styles')
    <link rel="stylesheet" href="{!! asset('css/welcome.css') !!}">
@endsection

@section('content')

        <div class="container" align="center" style="padding:2%;">
            <img src="{!! asset('img/unsa_logo.png') !!}" alt="UNSA Logo" id="logo">
        </div>

        @auth
        <?php
        echo "<br>";
        echo "<div class=\"container\" align=\"center\">";
        echo "<h3 class=\"display-5\" > Bienvenido(a) " . Auth::user()->first_name . "</h3>";
        echo "</div>";
        ?>
        @endauth


        <div class="container" align="center">
            <br>

            <div class="container" id="button_box">
                <br><br>
                <div class="container" align="center">
                    <a href="services/link_repository" class="btn btn-primary"> Repositorio de Enlaces</a>
                    <a href="services/shared_resources" class="btn btn-danger"> Recursos Compartidos </a>
                    <a href="services/teacher_records" class="btn btn-warning"> Registro de Docentes </a>
                    <br>
                    <a href="#" class="btn btn-primary index_button"> Coming soon... </a>
                    <a href="#" class="btn btn-danger index_button"> Coming soon... </a>
                    <a href="#" class="btn btn-warning index_button"> Coming soon... </a>
                    <br>
                    <a href="#" class="btn btn-primary index_button"> Coming soon... </a>
                    <a href="#" class="btn btn-danger index_button"> Coming soon... </a>
                    <a href="#" class="btn btn-warning index_button"> Coming soon... </a>
                </div>
                <br><br>

        </div>
    <br><br>

    <div class="container" style="display: block;">
        Made by
        <img src="{!! asset('img/equipo_logo.jpg') !!}" alt="The Delta Team Logo" id="TDT_logo">
    </div>

    @endsection