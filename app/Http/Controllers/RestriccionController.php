<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restriccion;

class RestriccionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restricciones = Restriccion::all();
        return view('restriccion.index')->with('restricciones',$restricciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restriccion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacion = $request->validate([
            'nombre' => 'required|max:255|unique:restricciones,nombre',
            'descripcion' => 'required'
        ]);

        $restricciones = new Restriccion();

        $restricciones->nombre = $request->get('nombre');
        $restricciones->descripcion = $request->get('descripcion');

        $restricciones->save();

        return redirect('/restricciones');
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
        $restriccion = Restriccion::find($id);
        return view('restriccion.edit')->with('restriccion',$restriccion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validacion = $request->validate([
            'nombre' => 'required|max:255|unique:restricciones,nombre',
            'descripcion' => 'required'
        ]);

        $restriccion = Restriccion::find($id);

        $restriccion->nombre = $request->get('nombre');
        $restriccion->descripcion = $request->get('descripcion');

        $restriccion->save();

        return redirect('/restricciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restriccion = Restriccion::find($id);
        $restriccion->delete();
        return redirect('/restricciones');
    }
}
