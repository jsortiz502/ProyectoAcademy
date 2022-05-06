<?php

namespace App\Http\Controllers;

use App\Http\Requests\storagePersonajeRequest;
use App\Models\Curso;
use Illuminate\Http\Request;

class LaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // el metodo all obtiene todo de la tabla como un array o lista
        $cursito = Curso::all();
        //compact adjunta la informacion deseada a la vista para usarla en la vista
        return view('cursos.index', compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Almacena un nuevo registro creado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storagePersonajeRequest $request)
    {
        //Estas son las validaciones
        $validacionesDatos = $request->validate([
            //ESTO ES UNA VALIDACION
            /*'nombre'=>'required|max:10',
            'imagen'=>'required|image'*/
        ]);
        //all me trae toda la informacion almacenda de la peticion (request)
        $cursito = new Curso();
        //crear una instancia del modelo curso para manipular la tabla
        $cursito->nombre = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');

        //Validamo si viene un archivo desde el campo equis...
        //En el campo imagen se almacena el nombre del archivo que se guardara
        //en storage/app/public e indicamos uan subcarpeta
        if($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public/cursos');
        }
        // Almacena la informaion de el formulario
        $cursito->save();
        return 'El curso se creo de manera exitosa';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursito = Curso::find($id);
        return view('cursos.show', compact('cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //con firstOrFail captura la excepcion y muestra el primer registo
        //encontrado en la tabla de la BD o arroja error.
        $cursito = Curso::where('id',$id)->firstOrFail();
        return view('cursos.edit', compact('cursito'));
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
        /* Rellenar todos los campos del curso con la informacion
        que viene de la peticion request */
        $cursito = Curso::find($id);
        //con el all actualizara toda la informacion sean texto y numero
        $cursito->fill($request->except('imagen'));
        if($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public/cursos');
        }
        //con el except actualiza todos los campos menos al que hacemos referencia
        //La imagen se procesa de diferente imagen
        $cursito->save();
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
        $cursito = Curso::find($id);
        $urlImagenBD = $cursito->imagen;
        //return $urlImagenBD;
        $nombreImagen = str_replace('public/','\storage\\',$urlImagenBD);
        //return $nombreImagen;
        $rutaCompleta = public_path().$nombreImagen;
        //return $rutaCompleta;
        unlink($rutaCompleta);
        $cursito->delete();
        return 'Eliminado correctamente';
    }

}
