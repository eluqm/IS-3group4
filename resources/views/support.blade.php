@extends('layouts.services')

@section('title')
    Soporte
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')

<div class="container jumbotron">
    <h1 class="display-3"> Medios de Contacto</h1>
    <br>

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">Cargo</th>
                <th scope="col">Encargado(s)</th>
                <th scope="col">Correo Electrónico</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Servicio Técnico</th>
                <td>Tatleon Web</td>
                <td>tatleonweb@gmail.com</td>
            </tr>
            <tr>
                <th rowspan="7"> Programadores </th>
            </tr>
            <tr>       
                <td>Jack Christopher Huaihua Huayhua</td>
                <td>jhuaihuah@unsa.edu.pe</td>
            </tr>
            <tr>
                <td>Luis Felipe Sante Taipe</td>
                <td>lsantet@unsa.edu.pe</td>
            </tr>
            <tr>
                <td>Maryori Lizeth Hilares Angelo </td>
                <td>mhilaresa@unsa.edu.pe</td>
            </tr>
            <tr>
                <td>Rodrigo Jesus Santisteban Pachari</td>
                <td>rsantisteban@unsa.edu.pe</td>
            </tr>
            <tr>
                <td>Vanessa Mayra Macedo Huamán</td>
                <td>vmacedoh@unsa.edu.pe</td>
            </tr>
            <tr>
                <td>Juan Diego Valdivia Mendoza</td>
                <td>jvaldiviame@unsa.edu.pe</td>
            </tr>
            <tr>
                <th rowspan="4"> Diseñadores </th>
            </tr>
            <tr>
                <td>Jack Christopher Huaihua Huayhua</td>
                <td>jhuaihuah@unsa.edu.pe</td>
            </tr>
            <tr>
                <td>Luis Felipe Sante Taipe</td>
                <td>lsantet@unsa.edu.pe</td>
            </tr>
            <tr>
                <td>Maryori Lizeth Hilares Angelo </td>
                <td>mhilaresa@unsa.edu.pe</td>
            </tr>
            <tr> 
                <th rowspan="3">QA</th>
            </tr>
            <tr>
                <td>Jack Christopher Huaihua Huayhua</td>
                <td>jhuaihuah@unsa.edu.pe</td>
            </tr>
            <tr>
                <td>Rodrigo Jesus Santisteban Pachari</td>
                <td>rsantisteban@unsa.edu.pe</td>
            </tr>
        </tbody>
    </table>
</div>
<br><br>


@endsection