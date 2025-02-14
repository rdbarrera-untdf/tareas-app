@extends('layouts.app')
@section('head')
<div class="text-bg-secondary p-3">
</div>
<div class="p-3 mb-2 bg-secondary-subtle text-secondary-emphasis">
	 <h1 class="d-flex justify-content-center">Editar Tarea</h1>
</div>
@section('content')
    
    <form action="{{ route('tareas.update', $tarea) }}" method="POST">
        @csrf
        @method('PUT')
	<div class="card bg-primary-subtle text-primary-emphasis mb-3">
		<div class="card-body">
			<div class="mb-3">
  				<label for="descripcion" class="form-label">Descripcion</label>
  				<input type="text" class="form-control" id="descripcion"  name="descripcion" value="{{ $tarea->descripcion}}">
			</div>
			<div class="mb-3">
  				<label for="fecha" class="form-label">Fecha</label>
  				<input type="date" class="form-control" id="fecha"  name="fecha" value="{{ $tarea->fecha}}">
			</div>
			<div class="mb-3">
				<label for="estado" class="form-label">Estado</label>
  				<input type="text" class="form-control" id="estado"  name="estado" value="{{ $tarea->estado}}">
			</div>
			<input type="submit" class="btn btn-outline-success" value="Actualizar Tarea">
			<a href="{{ route('tareas.index') }}" class="btn btn-outline-danger btn-sm" ">Volver</a>
		</div>
	</div>
    </form>
@endsection
