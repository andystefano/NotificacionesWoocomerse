@extends("layouts/app")


@section('title','Página de Inicio')


@section('content')




 


<h1> Notificación {{  ($Notifications->id); }}
</h1>

<form method="POST" action="Notificaciones/{{  ($Notifications->id); }}/edit">

    @csrf
    @method("PATCH")

    <input  type="hidden" id="id" name="id" value="{{  ($Notifications->id); }}" />



<div class="form-group">
    <label class="form-label" for="nombre">Nombre Notificación</label>
    <input type="text" id="nombre" name="nombre" class="form-control" value="{{  ($Notifications->nombre); }}">
</div>


<div class="form-group">
    <label class="form-label" for="example-textarea">Contenido</label>
    <textarea class="form-control" id="contenido"  name="contenido" rows="5">{{  ($Notifications->contenido); }}</textarea>
</div>



<div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
                                                    
    <button class="btn btn-primary ml-auto waves-effect waves-themed" type="submit">Actualizar</button>
</div>


</form>


@endsection
