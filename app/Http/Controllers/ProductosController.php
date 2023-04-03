<?php

namespace App\Http\Controllers;

use App\Models\productos;
use App\Models\unidades;
use DB;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades=unidades::get();
        
        return view('productos/productos_index',['unidades'=>$unidades]);
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
        $obj= new productos;
        $obj->idUnidades = request('prod_medida');
        $obj->prod_codigo= request('prod_codigo');
        $obj->prod_nombre=request('prod_nombre');
        $obj->prod_stock=request('prod_medida');
        $obj->prod_precio=request('prod_precio');
        $obj->activo=request('activo');
        $obj->save();
        $data=['Msje'=>'ok'];
        return response()->json($data);
    }

    public function consultacodigo($codigo)
    {
        $obj=productos::where('prod_codigo',$codigo)
        ->get();
        if (count($obj)>0) {
            $obj=true;
        }else{
            $obj=false;
        }
        return response()->json($obj);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(productos $productos)
    {
        $productos=db::table('productos')
        ->where('productos.activo','=',1)
        ->leftjoin('unidades','unidades.id','productos.idUnidades')
        ->select('productos.*','unidades.cod')
        ->get();
        // return datatables()->of($lista)->toJson();
        return datatables()->of($productos)->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $obj=productos::find($id);
       return response()->json($obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj=productos::findOrFail($id);
        $obj->activo=0;
        $obj->save();
        $msje=['Msje'=>'ok'];
        return response()->json($msje);
    }
}
