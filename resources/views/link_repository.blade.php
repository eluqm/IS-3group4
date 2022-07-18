@extends('layouts.services')

@section('title')
    Repositorio de Enlaces
@endsection

@section('scripts')
@endsection

@section('styles')
    <link rel="stylesheet" href="{!! asset('css/services.css') !!}">
@endsection

@section('content')

    <div class="container">

        @if (isset($schools))
        <table class="table table-hover table-bordered">
            <thead>
                </tr>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($schools != null) 
                {
                    foreach ($schools as $school) 
                    {
                        echo "<tr>";
                        echo "<th scope=\"row\">" . $school->id . "</th>";
                        echo "<td>" . $school->name . "</td>";
                        echo "<td> <a href=\"school/" . $school->id . "\" class=\"btn btn-success\"> Explorar</a> </td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>

        @else
            <br>
            <div class="jumbotron"  align="center">
            <br>
            <h6 class="display-6"> Áreas de la Universidad Nacional de San Agustín </h6>
            <br><br>
            <a href="link_repository/ing" class="btn btn-success btn-lg">Ingenierías</a>
            <br><br>
            <a href="link_repository/bio" class="btn btn-warning btn-lg">Biomédicas</a>
            <br><br>
            <a href="link_repository/soc" class="btn btn-danger btn-lg">Sociales</a>
            <br><br>
            </div>
            <br>
        @endif  

    </div>

@endsection