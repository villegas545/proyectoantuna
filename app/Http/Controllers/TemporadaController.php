<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temporada;
use App\Http\Requests;
class TemporadaController extends Controller
{
    public function index()
    {
        //
        $datos['temporada']=Temporada::paginate();

        return view('temporadas.index',$datos);
    }
	public function vista () {
		return view('temporadas.agregar');
	}
    public function create(Request $request){
    	$temporada = new Temporada();

    	// $temporada -> id = $request -> id;
    	$temporada -> temporadas = $request -> temporadas;

    	$temporada -> save();
    	return redirect('/temporada');
	}
	public function store(Request $request)
    {
        //
       // --------  $datosProductor=request()->all();

        $datosTemporada=request()->except('_token');

        Temporada::insert($datosTemporada);

        // ------ return response()->json($datosProductor);
        return redirect('temporada');
    }
	public function edit($id)
	{
        //
        $temporada=Temporada::findOrFail($id);

        return view('temporadas.edit',compact('temporada'));
    }
     public function update(Request $request, $id)
    {
        //
        $datosTemporada=request()->except(['_token','_method']);
        Temporada::where('id','=',$id)->update($datosTemporada);

        return redirect('temporada');
    }
    public function destroy($id)
    {
        //
        Temporada::destroy($id);

        return redirect('temporada');
    }
}

