@extends('layout')

@section('title','Crear Servicio')

@section('content')
<h1>Crear nuevo servicio</h1>
<!--<form action="{{ route('servicios.store') }}" method="post" style="max-width: 600px; margin: auto;"> -->

@include('partials.validation-errors')
<form action="{{ route('servicios.store') }}" method="post" method="post" enctype="multipart/form-data">

@include('partials.form',['btnText' => 'Guardar'])
</form>
@endsection