@extends('layout/plantilla')

@section('tituloPagina', 'Crud con Laravel 8')

@section('contenido')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <h1>CRUD CON LARAVEL 8</h1>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h3>Listado de Personas en el sistema</h3>
                    </div>
                    @if ($mensaje = Session::get('success'))
                        <div>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ $mensaje }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>                   
                        </div>
                    @endif
                    <p>
                        <a class="btn btn-info" href="{{ route("personas.create")}}">Agregar nueva Persona <i class="fa-solid fa-user-plus"></i></a>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped text-center">
                            <thead>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Nombre</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                            @foreach ($datos as $item)    
                                <tr>
                                    <td>{{ $item->paterno }}</td>
                                    <td>{{ $item->materno }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->fecha_nacimiento }}</td>
                                    <td>
                                        <form action="{{ route("personas.edit", $item->id) }}" method = "GET">
                                            <button class="btn btn-warning">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route("personas.show", $item->id) }}" method = "GET">
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection