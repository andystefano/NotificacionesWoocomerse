@extends("layouts/app")

@section('title','Crear Notificación')

@section('content')
<h1>Nombre Notificación </h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" enctype="multipart/form-data">

    @csrf

<div class="form-group">
    <label class="form-label" for="nombre">Nombre Notificación</label>
    <input type="text" id="nombre" name="nombre" class="form-control">
</div>


<div class="form-group">
    <label class="form-label" for="nombre">Imagen</label>
    <input type="file" id="imagen" name="imagen" class="form-control">
</div>


<div class="form-group">
    <label class="form-label" for="example-textarea">Contenido</label>
    <textarea class="form-control" id="contenido"  name="contenido" rows="5"></textarea>
</div>



<div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
                                                    
    <button class="btn btn-primary ml-auto waves-effect waves-themed" type="submit">Submit form</button>
</div>


</form>

@endsection
