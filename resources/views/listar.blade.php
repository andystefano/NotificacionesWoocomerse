@extends("layouts/app")

@section('title','Listar Notificaciones')



@section('content')
 
<table class="table m-0">

    <tr><th>Item</th><th>Accion</th>
@foreach ($Notifications as $notificacion)
 

<tr><td><a href="/Notificaciones/{{$notificacion->id}}">{{$notificacion->nombre}}</a></td><td>
    
    <a href="/Notificaciones/{{$notificacion->id}}/borrar/">Borrar</a>
     | 
    <a href="/Notificaciones/{{$notificacion->id}}/edit/">Editar</a>        
    
</td></tr>
 

@endforeach

</table>

{{ $Notifications->links(); }}

@endsection
