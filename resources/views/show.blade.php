 
@extends('layout')

@section('title', 'Servicio | ' . $servicio->titulo)

@section('content')
<h1>{{ $servicio->titulo }}</h1>
<h2>{{ $servicio->description }}</h2>
<h3>{{ $servicio->created_at->diffForHumans() }}</h3>


@auth
<tr>
    <td><img src="/storage/{{ $servicio->image }}" alt="{{ $servicio->titulo }}" width="100" height="50"></td>
    <td colspan="2">{{ $servicio->titulo }}
       <a href="{{ route('servicios.edit', ['servicio' => $servicio->id]) }}">Editar</a>
    </td>
    <td>
    </td colspan="2">
        <form action="{{ route('servicios.destroy',$servicio) }}" method="POST">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </td>
</tr>
@endauth

@endsection
