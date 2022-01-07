<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Rols;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rols = Rols::all();
        return view('usuarios.create', compact('rols'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_completo' => ['required', 'string'],
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'rol_id' => ['required'],
        ],
        [
            'nombre_completo.required' => 'El campo Nombre y Apellido es obligatorio',
            'name.required' => 'El campo Usuario es obligatorio',
            'email.required' => 'El campo Correo Electrónico es obligatorio',
            'email.email' => 'El campo Correo Electrónico debe tener un formato válido',
            'password.required' => 'El campo Contraseña es obligatorio',
            'rol_id' => 'El campo Rol es obligatorio',
        ]);

        User::create([
            'nombre_completo' => ucwords($request->nombre_completo),
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol_id' => $request->rol_id,
        ]);

        return redirect('/usuarios')->with('success', 'Registro Guardado Exitosamente!');
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
        $user = User::where('id', $id)->count();
        if($user>0){
            $rols = Rols::all();
            $data = User::where('id', $id)->first();
            return view('usuarios.edit', compact('rols', 'data'));
        }else{
            return redirect('/usuarios')->with('danger', 'Problemas para mostrar el registro, intente de nuevo!');
        }
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
        $request->validate([
            'nombre_completo' => ['required', 'string'],
            'name' => ['required'],
            'email' => ['required', 'email'],
            'rol_id' => ['required'],
        ],
        [
            'nombre_completo.required' => 'El campo Nombre y Apellido es obligatorio',
            'name.required' => 'El campo Usuario es obligatorio',
            'email.required' => 'El campo Correo Electrónico es obligatorio',
            'email.email' => 'El campo Correo Electrónico debe tener un formato válido',
            'rol_id' => 'El campo Rol es obligatorio',
        ]);


        $record = User::where('id', $id)->first();
        $record->nombre_completo = ucwords($request->nombre_completo);
        $record->name = $request->name;
        $record->email = $request->email;
        $record->password = Hash::make($request->password);
        $record->rol_id = $request->rol_id;
        $record->save();

        return redirect('/usuarios')->with('success', 'Registro Actualizado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->count();
        if($user>0){
            User::where('id', $id)->delete();
            return redirect('/usuarios')->with('success', 'Registro Eliminado Exitosamente!');
        }else{
            return redirect('/usuarios')->with('danger', 'Problemas para eliminar el registro, intente de nuevo!');
        }
    }
}
