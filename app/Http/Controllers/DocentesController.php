<?php

namespace App\Http\Controllers;
use App\Models\Docente;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docente = Docente::all();

        return view('docentes.index', compact('docente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docente = new Docente();
        $docente->nombre = $request->input('nombre');
        $docente->titulo = $request->input('titulo');
        $docente->edad = $request->input('edad');


        if($request->hasFile('foto')){
            $docente->foto = $request->file('foto')->store('public/docentes');
        }
        $docente->save();
        return 'El Docente se registro correctamente';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docente = Docente::find($id);
        return view('docentes.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docente::where('id',$id)->firstOrFail();
        return view('docentes.edit', compact('docente'));
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
        $docente = Docente::find($id);

        $docente->fill($request->except('foto'));
        if($request->hasFile('foto')){
            $docente->foto = $request->file('foto')->store('public/docentes');
        }
        $docente->save();
        return 'Su curso fue actualizado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
