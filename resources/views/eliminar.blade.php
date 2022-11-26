@extends('layout/plantilla')

@section('tituloPagina', 'Eliminar registro')

@section('contenido')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h1>ELiminar registro <i class="fa-solid fa-user-plus"></i></h1>
                    </div>
                </div>
                <div class="card-body">
                    <div class="alert alert-danger">
                        Estas seguro de eliminar este registro
                    </div>
                    <div>
                        <form action="">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="paterno" id="paterno" placeholder="Aqui va el apellido paterno">
                                <label for="paterno">Apellido Paterno:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="materno" id="materno" placeholder="Aqui va el apellido materno">
                                <label for="materno">Apellido Materno:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Aqui va el nombre">
                                <label for="materno">Nombre:</label>
                            </div>
                            <div class="form-control">
                                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" placeholder="Aqui va la fecha de Nacimiento">
                            </div>
                            <hr>
                            <div class="text-center">
                                <a href="{{ route('personas.index') }}" class="btn btn-secondary">Regresar</a>
                                <button class="btn btn-success">Agregar Nueva Persona <i class="fa-solid fa-floppy-disk"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection