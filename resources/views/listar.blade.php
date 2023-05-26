@extends("layouts/app")

@section('title','Listar Notificaciones')



@section('content')
Listar 


@foreach ($Notificaciones as $notificacion)

<h2>H2:{{$notificacion['nombre']}}</h2>
    
@endforeach



@endsection
