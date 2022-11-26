<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tienda;

class micontrolador extends Controller
{
   
    // REGISTRAR PRODUCTO

    public function registraproducto()
    {
        return view('registraproducto');
    }
    public function guardarProducto(Request $request)
    {
        $tiendas = new Tienda;
        $tiendas->nombre=$request->input('nombre');
        $tiendas->descripcion=$request->input('descripcion');
        $tiendas->save();

        return redirect()->route('registrarproducto');
    }

    // CONSULTAR PRODUCTO

    public function consultaproducto(){
        $tiendas = Tienda::all();
        return view('consultaproducto', compact('tiendas'));
    }

    // ELIMINAR PRODUCTO

    public function eliminarproducto($id){
        $tienda=Tienda::find($id);
        $tienda->delete();
        return redirect()->route('consultaproducto');
    }

    // MOSTRAR PRODUCTO
    public function muestraproducto($id){
        $tiendas = Tienda::find($id);
        return view('muestraproducto', compact('tiendas'));
    }

    // EDITAR PRODUCTO
    
    public function editarproducto(Request $request, $id){
        $tiendas=Tienda::find($id);
        $tiendas->nombre=$request->input('nombre');
        $tiendas->descripcion=$request->input('descripcion');
        $tiendas->save();
        return redirect()->route('consultaproducto');
    }

}

