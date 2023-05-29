@extends("layouts/app")


@section('title','Página de Inicio')


@section('content')


{{  ($Notifications->nombre); }}

<br/>

{{  ($Notifications->contenido); }}



@endsection
