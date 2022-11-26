@extends('layout/plantilla')

@section('tituloPagina', 'Eliminar registro')

@section('contenido')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h1>Eliminar registro <i class="fa-solid fa-user-minus"></i></h1>
                    </div>
                </div>
                <div class="card-body">
                    <div class="alert alert-danger">
                        ¿Estas seguro de eliminar este registro?
                    </div>
                    <div>
                        <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="paterno" id="paterno" disabled placeholder="Aqui va el apellido paterno" value="{{ $personas->paterno }}">
                                <label for="paterno">Apellido Paterno:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="materno" id="materno" disabled placeholder="Aqui va el apellido materno" value="{{ $personas->materno }}">
                                <label for="materno">Apellido Materno:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nombre" id="nombre"disabled  placeholder="Aqui va el nombre" value="{{ $personas->nombre }}">
                                <label for="materno">Nombre:</label>
                            </div>
                            <div class="form-control">
                                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" disabled placeholder="Aqui va la fecha de Nacimiento" value="{{ $personas->fecha_nacimiento }}">
                            </div>
                            <hr>
                            <div class="text-center">
                                <a href="{{ route('personas.index') }}" class="btn btn-secondary">Regresar <i class="fa-solid fa-arrow-rotate-left"></i></a>
                                <button class="btn btn-danger">Eliminar Persona <i class="fa-solid fa-floppy-disk"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection