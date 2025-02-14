@extends('layouts.app')
@section('head')
<div class="text-bg-secondary p-3">
</div>
<div class="p-3 mb-2 bg-secondary-subtle text-secondary-emphasis">
	 <h1 class="d-flex justify-content-center">Crear Nueva Tarea</h1>
</div>
@endsection
@section('content')

    <form action="{{ route('tareas.store') }}" method="POST">
        @csrf

	<div class="card bg-success-subtle text-success-emphasis mb-3">
		<div class="card-body">
			<div class="mb-3">
    				<label for="descripcion" class="form-label">Descripción:</label>
    				<input type="text" class="form-control" id="descripcion" name="descripcion"><br>
			</div>
			<div class="mb-3">
    				<label for="fecha" class="form-label">Fecha:</label>
    				<input type="date" class="form-control" id="fecha" name="fecha"><br>
			</div>
			<div class="mb-3">
				<label for="estado" class="form-label">Estado:</label>
    				<input type="text" class="form-control" id="estado" name="estado"><br>
			</div>
			<input type="submit" class="btn btn-outline-success"value="Crear Tarea">
			<a href="{{ route('tareas.index') }}" class="btn btn-outline-danger btn-sm" ">Volver</a>
		</div>
	</div>

    </form>
@endsection
