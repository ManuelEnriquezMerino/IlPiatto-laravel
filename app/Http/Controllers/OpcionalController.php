<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opcional;
use App\Models\Plato;

class OpcionalController extends Controller
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
        $opcionales = Opcional::all();
        return view('opcional.index')
                    ->with('opcionales',$opcionales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platos = Plato::pluck('nombre','id');
        return view('opcional.create')
                    ->with('platos',$platos);
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
            'nombre' => 'required|max:255|unique:opcionales,nombre',
            'descripcion' => 'required',
            'precio' => 'required|gt:0'
        ]);

        $opcionales = new Opcional();

        $opcionales->plato_id = $request->get('plato_id');
        $opcionales->nombre = $request->get('nombre');
        $opcionales->descripcion = $request->get('descripcion');
        $opcionales->precio = $request->get('precio');

        $opcionales->save();

        return redirect('/opcionales');
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
        $opcional = Opcional::find($id);
        return view('opcional.edit')->with('opcional',$opcional);
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
            'nombre' => 'required|max:255|unique:opcionales,nombre,'.$id,
            'descripcion' => 'required',
            'precio' => 'required|gt:0'
        ]);

        $opcional = Opcional::find($id);

        $opcional->nombre = $request->get('nombre');
        $opcional->descripcion = $request->get('descripcion');
        $opcional->precio = $request->get('precio');

        $opcional->save();

        return redirect('/opcionales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opcional = Opcional::find($id);
        $opcional->delete();
        return redirect('/opcionales');
    }
}
