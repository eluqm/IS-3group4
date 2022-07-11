@extends('layouts.services')

@section('title')
    Servicios
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection

@section('content')

<div class="container">
    <h1 class="display-3" align="center">Servicios</h1>
    <br>

    <div class="alert alert-success" role="alert">
      <h2> Repositorio de Enlaces</h2>
      <h5> Propósito: </h5>
      <p> Almacenar y poner a disposición enlaces de trabajos realizados por los estudiantes
        de la Universidad Nacional de San Agustín que han sido subidos a otras plataformas con el propósito de
        difundirlo entre los estudiantes de la UNSA y puedan tener una mayor cantidad de reacciones.</p>
      <h5> Funcionamiento: </h5>
      <p>
        Solo las personas que se hayan registrado en Tatleon Web podrán ingresar enlaces relativos a su escuela,
        los cuales serán almacenados en la plataforma.
        Cualquier persona, no es necesario que se haya registrado, podrá ver los enlaces almacenados en su totalidad.
        <br><br>
        No podrán subir enlaces a la Vista de una escuela:
      <ul>
        <li> Los que no se hayan registrado </li>
        <li> Los que no pertenezcan a esa escuela </li>
      </ul>
      </p>
    </div>

   

    <div class="alert alert-info" role="alert">
      <h2> Coming soon...</h2>
      <p> Pronto estaremos implementando nuevos servicios.</p>
      <p> Puedes dejar tus sugerencias en el siguiente formulario.</p>
      <a href="https://forms.gle/ypVaTyf5dG8BZHtL6" target="_blank" class="btn btn-info">Ir a Formulario</a>
    </div>
    <br>
  </div>
</body>

</html>


@endsection