<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $idproducto = $request->get('idproducto');
        $modelo = $request->get('modelo');
        $color = $request->get('color');
        $talle = $request->get('talle');
        $precio = $request->get('precio');
        $imagen = $request->get('imagen');


        $productos = DB::table("producto")->select("*")
            ->where("idproducto",$idproducto)
            ->where("modelo","like","%".$modelo."%")
            ->where("color","like","%".$color."%")
            ->where("talle","like","%".$talle."%")
            ->where("precio","like","%".$precio."%")
            ->where("imagen","like","%".$imagen."%")
            ->get();
            
        $parametros = [
            "productos" => $productos
        ];
        return view('productos.productos',$parametros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parametros = [
            
            "titulo" => "Formulario para crear productos"
        ];
        return view('productos.crear-producto',$parametros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idproducto = $request->post('idproducto');
        $modelo = $request->post('modelo');
        $color = $request->post('color');
        $talle = $request->post('talle');
        $precio = $request->post('precio');
        $imagen = $request->post('imagen');

        DB::insert("INSERT INTO producto(idproducto,modelo,color,talle,precio,imagen) VALUES (?,?,?,?,?,?)",[$idproducto,$modelo,$color,$talle,$precio,$imagen]);
        return redirect()->action([ProductosController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('producto.editar-producto',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        DB::table('producto')
        ->where('idproducto',$id)->get();
        return view('producto.editar-producto');
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
            "modelo" => 'required|max:45',
            "color" => 'required|max:45',
            "talle" => 'required|max:45',
            "precio" => 'required|max:45',
            "imagen" => 'required|max:500000',
            
        ]);

        $modelo = $request->post('modelo');
        $color = $request->post('color');
        $talle = $request->post('talle');
        $precio = $request->post('precio');
        $imagen = $request->post('imagen');
        

         DB::update("UPDATE producto SET modelo=?,color=?,talle=?,precio=?,imagen=? WHERE idproducto=$id",[$modelo,$color,$talle,$precio,$imagen]);

         return redirect()->route('producto.show',[$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM producto WHERE id = ?', [$id]);
        //DB::table('cliente')->where('idCliente', $id)->delete();
        return redirect()->route('producto.index');
    }
}
