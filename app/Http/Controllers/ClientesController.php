<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        $idCliente = $request->get('idCliente');
        $nombre = $request->get('nombre');
        $apellido = $request->get('apellido');
        $domicilio = $request->get('domicilio');
        $telefono = $request->get('telefono');
        $email = $request->get('email');
        $edad = $request->get('edad');

        $clientes = DB::table("cliente")->select('*')
            ->where("idCliente","like","%".$idCliente."%")
            ->where("nombre","like","%".$nombre."%")
            ->where("apellido","like","%".$apellido."%")
            ->where("domicilio","like","%".$domicilio."%")
            ->where("telefono","like","%".$telefono."%")
            ->where("email","like","%".$email."%")
            ->where("edad","like","%".$edad."%")
            ->get();

        $parametros = [
            "clientes" => $clientes,
            "titulo" => "Clientes"
        ];
        return view('clientes.clientes',$parametros);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $parametros = [

            "titulo" => "Formulario para crear clientes"
        ];
        return view('clientes.crear-cliente',$parametros);
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
            "nombre" => 'required|max:45',
            "apellido" => 'required|max:45',
            "domicilio" => 'required|max:45',
            "telefono" => 'required|max:45',
            "email" => 'required|max:45',
            "edad" => 'required|max:45'
        ]);

        $nombre = $request->post('nombre');
        $apellido = $request->post('apellido');
        $domicilio = $request->post('domicilio');
        $telefono = $request->post('telefono');
        $email = $request->post('email');
        $edad = $request->post('edad');

        DB::table("cliente")->insert([
            "nombre" => $nombre,
            "apellido" => $apellido,
            "domicilio" => $domicilio,
            "telefono" => $telefono,
            "email" => $email,
            "edad" => $edad
        ]);

        return redirect()->action([ClientesController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('clientes.editar-cliente',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* DB::table('cliente')
        ->where('idCliente',$id)->get(); */

        $params = [
            'id' => $id
        ];
        return view('clientes.editar-cliente',$params);
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
            "nombre" => 'required|max:45',
            "apellido" => 'required|max:45',
            "domicilio" => 'required|max:45',
            "telefono" => 'required|max:45',
            "email" => 'required|max:45',
            "edad" => 'required|max:45'
        ]);

        $nombre = $request->post('nombre');
        $apellido = $request->post('apellido');
        $domicilio = $request->post('domicilio');
        $telefono = $request->post('telefono');
        $email = $request->post('email');
        $edad = $request->post('edad');

         //DB::update("UPDATE cliente SET nombre=?,apellido=?,domicilio=?,telefono=?,email=?,edad=? WHERE idCliente=$id",[$nombre,$apellido,$domicilio,$telefono,$email,$edad]);

         DB::table('cliente')->where('idCliente',$id)->update([
            "nombre" => $nombre,
            "apellido" => $apellido,
            "domicilio" => $domicilio,
            "telefono" => $telefono,
            "email" => $email,
            "edad" => $edad
         ]);

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM cliente WHERE idCliente = ?', [$id]);
        //DB::table('cliente')->where('idCliente', $id)->delete();
        return redirect()->route('clientes.index');
    }

}

