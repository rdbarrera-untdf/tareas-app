@extends('layouts.app')

@section('head')
<div class="text-bg-secondary p-3">
</div>
<div class="p-3 mb-2 bg-secondary-subtle text-secondary-emphasis">
	 <h1 class="d-flex justify-content-center">Lista de Tareas</h1>
</div>
@section('content')
<a href="{{ route('tareas.create') }}" class  ="btn btn-outline-success" role="button">Crear Nueva Tarea</a>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Estado</th>
		    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tareas as $tarea)
                    <tr>
                        <td>{{ $tarea->id }}</td>
                        <td>{{ $tarea->descripcion }}</td>
                        <td>{{ $tarea->fecha }}</td>
                        <td>{{ $tarea->estado }}</td>
                        <td>usuario</td>
			<td>
                            <a href="{{ route('tareas.edit', $tarea) }}" class="btn btn-outline-info btn-sm">Editar</a>
                            <form action="{{ route('tareas.destroy', $tarea) }}" method="POST" style="display:inline;">
		                    @csrf
                		    @method('DELETE')
                    	   	    <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                	    </form>

                        </td>
                    </tr>
		@endforeach
            </tbody>
        </table>
@endsection
