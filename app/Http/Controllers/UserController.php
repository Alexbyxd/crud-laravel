<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //index es para visualizar una pagina principal
    public function index()
    {
        //trae todos los usuarios de la base de datos y los guarda en la variable $users//
        //en otras palabras en esta variable traiga del modelo User todos los usuarios//
        $users = User::all();

        //dd($users);
        //aqui vendra la url donde esta el archivo blade
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    //visualizar la vista de creacion de usuarios
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    //nos ayuda a guardar los datos en la base de datos
    public function store(Request $request)
    {
        //con request leemos los datos que vienen del formulario
        //estamos validando la informacion que viene del formulario
        $request->validate([
            'name' => 'required|max:100', //required significa que no puede estar vacio
            'email' => 'required|unique:users', //valida si un email es unico en la tabla users
            'password' => 'required|confirmed', //valida la contraseña y si se confirma
        ]);
        //guardamos los datos en la base de datos
        //tiene que crear un nuevo usuario desde el modelo
        //y poner todos los datos que vienen del formulario
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        //para despues de registrar voler a una pagina en especifico usar
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //buscamos la informacion de un usuario con el modelo
        //User donde busque y si no lo encuentra nos dara error (findOrFail) coon el id
        $user = User::findOrFail($id);
        //dd($user);
        return view('admin.users.show', compact('user'));
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
