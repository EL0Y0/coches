<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coche;

class CochesController extends Controller
{
    protected $validaciones=[
        'marca'=>'required|max:10',
        'modelo'=>'required',
        'precio'=>'required',
        'anio'=>'required|max:4',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cochesQuery = Coche::query();

        if ($request->has('nombre')) {
            $cochesQuery->where('marca', 'like', '%'.$request->nombre.'%')->orWhere('modelo', 'like', '%' . $request->nombre . '%');
        }

        if ($request->has('precio')) {
            $cochesQuery->precioMaximo($request->precio);
        }

        if ($request->has('anio')) {
            $cochesQuery->anioMinimo($request->anio);
        }

        $coches=$cochesQuery->get();
        return view('miscoches', compact('coches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearcoche');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->validaciones);
        Coche::create($request->all());
        return redirect()->route('listacoches')->with('success', 'Coche añadido');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $coche=Coche::findOrFail($id);
        return view('mostrarcoche', compact('coche'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coche=Coche::findOrFail($id);
        return view('editarcoche', compact('coche'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate($this->validaciones);
        $coche=Coche::findOrFail($id);
        $coche->update($request->all());

        return redirect()->route('listacoches')->with('success', 'Coche actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coche=Coche::findOrFail($id);
        $coche->delete();
        return redirect()->route('listacoches')->with('success', 'Coche eliminado');
    }
}
