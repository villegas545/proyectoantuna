<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comercializacion;
use App\Http\Requests;

class ComercializacionController extends Controller
{
	public function index()
    {
        //
        $datos['comercializacion']=Comercializacion::paginate();

        return view('comercializacion.index',$datos);
    }
    public function vista () {
		return view('comercializacion.agregar');
	}
    public function create(Request $request){
    	$comercializacion = new Comercializacion();

    	$comercializacion  -> no_entrega = $request -> no_entrega;
    	$comercializacion -> cliente = $request -> cliente ;

    	$comercializacion -> save();
    	return redirect('/comercializacion');
	}
	public function store(Request $request)
    {
        //
        // $datosProductor=request()->all();

        $datosComercializacion=request()->except('_token');

        Comercializacion::insert($datosComercializacion);

        // return response()->json($datosProductor);
        return redirect('comercializacion');
    }
    public function edit($id)
	{
        //
        $comercializacion=Comercializacion::findOrFail($id);

        return view('comercializacion.edit',compact('comercializacion'));
    }
    public function update(Request $request, $id)
    {
        //
        $datosComercializacion=request()->except(['_token','_method']);
        Comercializacion::where('id','=',$id)->update($datosComercializacion);

        $comercializacion=Comercializacion::findOrFail($id);
        return redirect('comercializacion');
    }
    public function destroy($id)
    {
        //
        Comercializacion::destroy($id);

        return redirect('comercializacion');
    }
}
