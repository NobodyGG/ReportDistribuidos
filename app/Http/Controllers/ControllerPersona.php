<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class ControllerPersona extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        //dd($personas);
        return view('personas.index')
                ->with('personas', $personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.nueva');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new Persona;
        $p->ci = $request["ci"];
        $p->nombres = $request["nombres"];
        $p->apellidos = $request["apellidos"];
        $p->direccion = $request["direccion"];
        $p->telefono = $request["telefono"];
        $p->fecha_nacimiento = $request["fecha_nacimiento"];
        $p->save();
        return redirect('persona');
        //return redirect()->route('persona.nueva');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::find($id);
        
        return view('personas.editar')->with('persona', $persona);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $persona = Persona::find($request["id"]);
        $persona->nombres = $request["nombres"];
        $persona->apellidos = $request["apellidos"];
        $persona->direccion = $request["direccion"];
        $persona->telefono = $request["telefono"];

        

        $persona->save();
        return redirect('persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Se elimino al sujeto con el id: ".$id."<br>Diganle a su familia murio siendo un hereo";
    }
}
