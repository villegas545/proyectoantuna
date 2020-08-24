<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facturas;
use App\Liquidacion;
use App\Http\Requests;

class FacturasController extends Controller
{
	public function index($id)
    {
        //
        $facturas=Facturas::paginate()->where("liquidacion","=",$id);
        $liquidacion=Liquidacion::where("liquidacion",$id);
        return view('facturas.index',compact('id','facturas','liquidacion'));
    }
    public function vista () {
		return view('facturas.agregar');
	}
    public function create(Request $request){
    	$facturas = new Facturas();

    	$facturas -> no_factura = $request -> no_factura;
    	$facturas -> no_liquidacion = $request -> no_liquidacion;
    	$facturas -> observaciones = $request -> observaciones;
    	$facturas -> estatus = $request -> estatus;
    	$facturas -> total = $request -> total;
    	$facturas -> debe = $request -> debe;

    	$facturas -> save();
    	return redirect('/facturas');
	}
	public function store(Request $request)
    {
        //
        // $datosProductor=request()->all();

        $datosFacturas=request()->except('_token');

        Facturas::insert($datosFacturas);

        // return response()->json($datosProductor);
        return redirect('productor');
    }
    public function edit($id)
	{
        //
        $facturas=Facturas::findOrFail($id);

        return view('facturas.edit',compact('facturas'));
    }
}
