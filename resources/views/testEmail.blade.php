@extends("layouts/app")


@section('title','Página de Inicio')


@section('content')
 
<form>
 
    <div class="form-group">
        <label class="form-label">Seleccione Notificacion</label>
        <select class="custom-select form-control">
            <option selected="">Seleccione Item</option>
            @foreach ($Notificaciones as $notificacion)

            <option value="{{$notificacion->id}}">{{$notificacion->nombre}}</option>
                
            @endforeach
            
    
             
        </select>
    </div>

    <div class="form-group">
        <label class="form-label" for="example-email-2">Email</label>
        <input type="email" id="example-email-2" name="example-email-2" class="form-control" placeholder="Email">
    </div>   
 
</form>


@endsection
