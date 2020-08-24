<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Liquidacion;
use App\Lote;
use App\Http\Requests;

class LiquidacionController extends Controller
{
  public function index($id)
    {
        //
        $datos=Liquidacion::paginate()->where("lote","=",$id);
        $lote=Lote::where("lote",$id);
        return view('liquidaciones.index',compact('id','datos','lote'));
    }
	public function vista () {
		return view('liquidaciones.agregar');
	}
    public function create(Request $request){
    	$liquidar = new Liquidacion();

    	$liquidar -> no_liquidacion = $request -> no_liquidacion;
    	$liquidar -> fecha = $request -> fecha;
    	$liquidar -> precio_paca = $request -> precio_paca ;
    	$liquidar -> lote = $request -> lote;
    	

    	$liquidar -> save();
    	return redirect('/productor');
	}
	public function store(Request $request)
    {
        //
        // $datosLiquidacion=request()->all();

        $datosLiquidacion=request()->except('_token');

        Liquidacion::insert($datosLiquidacion);

        // return response()->json($datosLiquidacion);
         return redirect('productor');
    }
	public function edit($liquidaciones)
	{
        //
        $liquidar=Liquidacion::findOrFail($liquidaciones);

        return view('liquidaciones.edit',compact('liquidar'));
    }
 //     public function update(Request $request, $id)
 //    {
 //        //
 //        $datosProductor=request()->except(['_token','_method']);
 //        Productor::where('id','=',$id)->update($datosProductor);

 //        $productor=Productor::findOrFail($id);
 //        return view('productores.edit',compact('productor'));
 //    }
    public function destroy($no_liquidacion)
    {
        //
        Liquidacion::destroy($no_liquidacion);

        return redirect('liquidar');
    }
}

