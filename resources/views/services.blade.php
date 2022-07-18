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


    <div class="alert alert-warning" role="alert">
    <h2> Recursos Compartidos</h2>
    <h5> Propósito: </h5>
    <p> Almacenar y poner a disposición Recursos Académicos subidos por los estudiantes
        de la Universidad Nacional de San Agustín.
        Con el propósito de que los estudiantes que están en grados inferiores o en otras escuelas/facultades puedan 
        estudiar y/o practicar con anticipación y tener una educación más integral complementando con estos recursos
        los cursos que estén llevando.</p>
    </p>
    <h5> Funcionamiento: </h5>
    <p>
        La idea es que cualquier estudiante que esté llevando el curso cree una carpeta en Google Drive dentro de la cual
        suba recursos que considere útiles para el curso.
        Lo que debe subir a esta plataforma es el enlace de la carpeta en Google Drive.
        Cualquier usuario podrá ver todos los recursos almacenados en la plataforma.
        <br>
        <b> Se deben cumplir las siguientes reglas en la publicación de recursos: </b>
        <ul>
            <li> No se permiten recursos que infringan derechos de autor. </li>
            <li> No se permiten recursos que atenten contra la moral, la ética o la dignidad de los estudiantes. </li>
            <li> No se permiten recursos que tengan contenido sexual, racista, violento, amenazante, degradante o que contengan datos personales. </li>
        </ul>

        <br>
        No podrán subir Recursos de un curso:
    <ul>
        <li> Los que no se hayan registrado </li>
        <li> Los que no lleven ese curso </li>
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