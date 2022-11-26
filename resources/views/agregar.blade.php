@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h1>Agregar nuevo registro <i class="fa-solid fa-user-plus"></i></h1>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <form action="{{ route('personas.store') }}" method="POST">
                            @csrf
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
                                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Aqui va la fecha de Nacimiento">
                            </div>
                            <hr>
                            <div class="text-center">
                                <a href="{{ route('personas.index') }}" class="btn btn-secondary">Regresar <i class="fa-solid fa-arrow-rotate-left"></i></a>
                                <button class="btn btn-success">Agregar Nueva Persona <i class="fa-solid fa-floppy-disk"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection