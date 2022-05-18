<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;
use App\Models\Categoria;
use App\Models\Restriccion;

class PlatoController extends Controller
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
        $platos = Plato::all();
        return view('plato.index')
                    ->with('platos',$platos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $restricciones = Restriccion::all();
        return view('plato.create')
                    ->with('categorias',$categorias)
                    ->with('restricciones',$restricciones);
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
            'nombre' => 'required|max:255|unique:platos,nombre',
            'descripcion' => 'required',
            'precio' => 'required|gt:0'
        ]);

        $platos = new Plato();

        $platos->nombre = $request->get('nombre');
        $platos->descripcion = $request->get('descripcion');
        $platos->precio = $request->get('precio');

        $platos->save();

        $platos->categorias()->attach($request->get('categorias'));
        $platos->restricciones()->attach($request->get('restricciones'));

        return redirect('/platos');
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
        $plato = Plato::find($id);
        $categorias = Categoria::all();
        $categoriasActuales = Plato::find($id)->categorias()->pluck('categoria_id');
        $restricciones = Restriccion::all();
        $restriccionesActuales = Plato::find($id)->restricciones()->pluck('restriccion_id');
        return view('plato.edit')
                                ->with('plato',$plato)
                                ->with('categorias',$categorias)
                                ->with('categoriasActuales',$categoriasActuales)
                                ->with('restricciones',$restricciones)
                                ->with('restriccionesActuales',$restriccionesActuales);
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
            'nombre' => 'required|max:255|unique:platos,nombre',
            'descripcion' => 'required',
            'precio' => 'required|gt:0'
        ]);

        $plato = Plato::find($id);

        $plato->nombre = $request->get('nombre');
        $plato->descripcion = $request->get('descripcion');
        $plato->precio = $request->get('precio');
        $plato->categorias()->sync($request->get('categorias'));
        $plato->restricciones()->sync($request->get('restricciones'));

        $plato->save();

        return redirect('/platos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plato = Plato::find($id);
        $plato->delete();
        return redirect('/platos');
    }
}
