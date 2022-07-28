@extends('layouts.services')

@section('title')
    Registro de Docentes
@endsection

@section('scripts')
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('content')

<div class="container" align="center">
 
    <br>
    <h6 class="display-6">Docentes Registrados</h6>
    <br>
    @forelse($data as $item)
        <div class="card" style="width: 64%;">
            <br>
            <h5 class="card-title">{{$item['teacher']->last_name}}, {{$item['teacher']->first_name}}</h5>
            
            <p class="card-text">            
                @php $rating = $item['teacher']->rating; @endphp
                @foreach(range(1,5) as $i)
                    <span class="fa-stack" style="width:1em">
                        <i class="far fa-star fa-stack-1x"></i>

                        @if($rating >0)
                            @if($rating >0.5)
                                <i class="fas fa-star fa-stack-1x"></i>
                            @else
                                <i class="fas fa-star-half fa-stack-1x"></i>
                            @endif
                        @endif
                        @php $rating--; @endphp
                    </span>
                @endforeach
                ({{$item['teacher']->rating}})
            </p>

            <p class="card-text">Característica Principal: {{$item['teacher']->adjective}}</p>

            <ul class="list-group list-group-flush">                
                @forelse($item['comments'] as $comment)
                <li class="list-group-item">  {{$comment->comment}} </li>
                @empty
                    <p class="card-text"> No hay comentarios para mostrar </p>
                @endforelse
            </ul>
            @auth 
                <a href="teacher_records/add_comment/{{$item['teacher']->id}}" class="btn btn-primary">Comentar</a> <br>           
            @endauth
        </div>
        <br>
    @empty
        <p>No hay docentes registrados</p>
    @endforelse

    <hr>

    @if(auth()->check()) 
        <!-- form to register teacher -->
        <div class="w-50">
            <h6 class="display-6" > Registrar Docente </h6>
            <br>
            <form method="POST" action="{{ route('add_teacher') }}">
                @csrf
                <div class="form-group">
                    <label for="first_name">Nombres</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombre" required>
                    <label for="last_name">Apellidos</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido" required>
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Registrar Docente</button>
                <br><br>
            </form>
        </div>

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    @endif
</div>

@endsection