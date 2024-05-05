<?php

namespace App\Http\Controllers;

use App\Models\Folders\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.my_unit.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //con request leemos los datos que vienen del formulario
        //estamos validando la informacion que viene del formulario
        $request->validate([
            'name' => 'required|max:100', //required significa que no puede estar vacio
        ]);
        //guardamos los datos en la base de datos
        //tiene que crear un nuevo usuario desde el modelo
        //y poner todos los datos que vienen del formulario
        $folder = new Folder();
        $folder->name = $request->name;

        $folder->save();
        //para despues de registrar volver a una pagina en especifico usar
        return redirect()->route('my_unit.index')
        ->with('confirmation', 'Se registro la carpeta correctamente')
        ->with('icon', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
