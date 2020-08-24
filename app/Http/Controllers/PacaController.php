<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paca;
use App\Http\Requests;

class PacaController extends Controller
{
	public function index()
    {
        //
        $datos['pacas']=Paca::paginate();

        return view('pacas.index',$datos);
        //return response()->json($datos);
    }
    public function vista () {
		return view('pacas.agregar');
	}
    public function create(Request $request){
    	$pacas = new Paca();

    	// $pacas -> no_paca = $request -> no_paca ;
    	$pacas -> modulo = $request -> modulo;
    	$pacas -> peso_paca = $request -> peso_paca;
    	$pacas -> lote = $request -> lote;
    	$pacas -> temporada = $request -> temporada;
    	$pacas -> peso_modulo = $request -> peso_modulo;
    	$pacas -> estatus_liquidacion = $request -> estatus_liquidacion;
    	$pacas -> clasificacion_HBI = $request -> clasificacion_HBI;
    	$pacas -> estatus_comercializacion = $request -> estatus_comercializacion;


    	$pacas -> save();
    	return redirect('/pacas');
	}
	public function store(Request $request)
    {
        //
        // $datosProductor=request()->all();

        $datosPacas=request()->except('_token');

        Paca::insert($datosPacas);

        // return response()->json($datosProductor);
        return redirect('pacas');
    }
    public function edit($id)
	{
        //
        $pacas=Paca::findOrFail($id);

        return view('pacas.edit',compact('pacas'));
    }
     public function update(Request $request, $id)
    {
        //
        $datosPacas=request()->except(['_token','_method']);
        Paca::where('id','=',$id)->update($datosPacas);

        $pacas=Paca::findOrFail($id);
        return redirect('/pacas');
    }
    public function destroy($id)
    {
        //
        Paca::destroy($id);

        return redirect('pacas');
    }
}
