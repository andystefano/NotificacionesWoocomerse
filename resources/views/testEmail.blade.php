@extends("layouts/app")


@section('title','Página de Inicio')


@section('content')
testEmail


<select>
    
@foreach ($Notifications as $notificacion)

<option value="{{$notificacion->id}}">{{$notificacion->nombre}}</option>
    
@endforeach

</select>

@endsection
