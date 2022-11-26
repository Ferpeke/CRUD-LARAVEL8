<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    
    public function index()
    {
        //pagina de inicio
        $datos = Personas::all();
        return view('inicio', compact('datos'));
    }

    
    public function create()
    {
        //El formulario donde nosotros agregamos datos.
        return view('agregar');
    }
    
    
    public function store(Request $request)
    {
        //Sirve para guardar datos en la bd
        $personas = new Personas();

        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route("personas.index")->with("success", "Agregado con exito!");
    }
    
    
    public function show($id)
    {
        //Sirve para obtener un registro de nuestra tabla
        $personas = Personas::find($id);
        return view('eliminar', compact('personas'));
    }
    
    
    public function edit($id)
    {
        //Este metodo nos sirve para traer los datos que se van a editar
        // y los coloca en un formulario.
        $personas = Personas::find($id);
        return view('actualizar', compact('personas'));
    }

    
    public function update(Request $request, $id)
    {
        //Este metodo actualiza los datos en la bd
        $personas = Personas::find($id);
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route("personas.index")->with("success", "Actualizado con exito!");

    }

    
    public function destroy($id)
    {
        //Elimina un registro
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con exito!");
    }
}
