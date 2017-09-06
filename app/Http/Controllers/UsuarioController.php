<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Session;
use DB;
use App\Usuario;

class UsuarioController extends Controller
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
        return view('crear_usuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Usuario::create([
                'nombres' => $request['nombres'],
                'apellidos' => $request['apellidos'],
                'cedula' => $request['cedula'],
                'correo' => $request['correo'],
                'telefono' => $request['telefono'],
            ]);

            Session::flash('flash_message', 'Usuario ' . $request['nombres'] . ' ha sido creado!');

            return redirect('/');
        }
        catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                Session::flash('flash_message_error', 'Registro duplicado! -> ' . $e->errorInfo[2]);
                return back()->withInput();
            }
        }

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
        $usuario = Usuario::find($id);        
        return view('editar', ['usuario'=>$usuario]);  
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

        DB::table('usuario')
            ->where('id', $id)
            ->update([
                'nombres' => $request['nombres'],
                'apellidos' => $request['apellidos'],
                'cedula' => $request['cedula'],
                'correo' => $request['correo'],
                'telefono' => $request['telefono']
            ]);

        Session::flash('flash_message', 'Usuario ' . $request['nombres'] . ' ha sido editado!');

        return redirect('/');
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