<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'name'     => 'required|string',
            'lastName' => 'required|string',
            'email'    => 'required|string|email|unique:users',
            'password'    => 'required|string|min:6|confirmed',
            'cellphone' => 'required|numeric|unique:users',
            'city' => 'required|numeric',
            'department' => 'required|numeric',
            'document' => 'required|numeric|unique:users',
        ];

        $customMessages = [
            'name.required'     => 'El nombre es requerido',
            'lastName.required' => 'El apellido es requerido',
            'email.email'    => 'El correo electrónico no es valido',
            'email.required'    => 'El correo electrónico es requerido',
            'email.unique'    =>  'El correo electrónico ya existe',
            'password.required'    => 'La contraseña es requerida',
            'password.min'    => 'La contraseña debe contener mínimo 6 caracteres',
            'password.confirmed'    => 'Las contraseñas no coinciden',
            'cellphone.required' => 'El celular es requerido',
            'cellphone.unique' => 'El celular ya existe',
            'city.required' => 'La ciudad es requerida',
            'department.required' => 'El departamento es requerido',
            'document.required' => 'La cédula es requerida',
            'document.unique' => 'La cédula ya existe',
        ];

        $this->validate($request, $rules, $customMessages);

        $user = new User([
            'name'     => $request->name,
            'lastName' => $request->lastName,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'cellphone' => $request->cellphone,
            'city' => $request->city,
            'department' => $request->department,
            'document' => $request->document,
            'slug' => str_random(18),
        ]);
        $user->save();
       
            return $user;

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
        //
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
        //
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
