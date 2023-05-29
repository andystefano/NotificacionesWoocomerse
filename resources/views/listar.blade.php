@extends("layouts/app")

@section('title','Listar Notificaciones')



@section('content')
Listar 


@foreach ($Notifications as $notificacion)

<h2><a href="/Notificaciones/{{$notificacion->id}}">H2:{{$notificacion->nombre}}</a></h2>
<p>H2:{{$notificacion->contenido}}</p>
    
@endforeach




@endsection
