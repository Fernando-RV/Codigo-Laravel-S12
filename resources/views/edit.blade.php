@extends('layout')

@section('title','Editar Servicio')

@section('content')
<table cellpadding="3" cellpadding="5">

<tr>
    @auth
    <img src="/storage/{{ $servicio->image }}" alt="{{ $servicio->titulo }}" width="300" height="100">
    <th colspan="4">Editar Servicio</th>
    @endauth
</tr>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@include('partials.validation-errors')

<form action="{{ route('servicios.update', $servicio) }}" method="post" enctype="multipart/form-data">
@csrf @method('PATCH')
@include('partials.form',['btnText' => 'Actualizar'])
</form>
@endsection