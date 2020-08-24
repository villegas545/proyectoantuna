<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lote;
use App\Productor;
use App\http\Requests;

class LoteController extends Controller
{
    public function index($id)
    {
        //
        $datos=Lote::paginate()->where("productor","=",$id);
        $productor=Productor::find($id);
        return view('lote.index',compact('id','datos','productor'));
    }
	public function vista () {
		return view('lote.agregar');
	}
    public function create(Request $request){
    	$lote = new Lote();

	   	$lote -> lote = $request -> lote;
    	$lote -> productor = $request -> productor;
    	$lote -> direccion = $request -> direccion;
    	$lote -> ciudad = $request -> ciudad;
    	$lote -> localidad = $request -> localidad;

    	$lote -> save();
    	return redirect('/index');
    }
    public function store(Request $request)
    {
        //
        // $datosProductor=request()->all();

        $datosLote=request()->except('_token');

        Lote::insert($datosLote);

        // return response()->json($datosProductor);
        return redirect('productor');
    }
    public function edit($id)
    {
        //
        $lote=Lote::findOrFail($id);

        return view('lote.edit',compact('lote'));
    }
     public function update(Request $request, $id)
    {
        //
        $datosLote=request()->except(['_token','_method']);
        Lote::where('id','=',$id)->update($datosLote);

        $lote=Lote::findOrFail($id);
        return view('lote.edit',compact('lote'));
    }
    public function destroy($id)
    {
        //
        Lote::destroy($id);

        return redirect('lote');
    }
}