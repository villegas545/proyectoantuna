<?php

namespace App\Http\Controllers;

use App\Productor;
use Illuminate\Http\Request;
use App\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ProductorExport;

class ProductorController extends Controller
{
	public function index()
    {
        //
        $datos['productor']=Productor::paginate();

        return view('productores.index',$datos);
    }
	public function vista () {
		return view('productores.agregar');
	}
    public function create(Request $request){
    	$productor = new Productor();

    	// $productor -> id = $request -> id;
    	$productor -> nombre = $request -> nombre;
    	$productor -> RFC = $request -> RFC ;
    	$productor -> telefono_oficina = $request -> telefono_oficina;
    	$productor -> telefono_celular = $request -> telefono_celular;
    	$productor -> correo = $request -> correo;
    	$productor -> tipo_contrato = $request -> tipo_contrato;

    	$productor -> save();
    	return redirect('/productor');
	}
	public function store(Request $request)
    {
        //
        // $datosProductor=request()->all();

        $datosProductor=request()->except('_token');

        Productor::insert($datosProductor);

        // return response()->json($datosProductor);
        return redirect('productor');
    }
	public function edit($id)
	{
        //
        $productor=Productor::findOrFail($id);

        return view('productores.edit',compact('productor'));
    }
     public function update(Request $request, $id)
    {
        //
        $datosProductor=request()->except(['_token','_method']);
        Productor::where('id','=',$id)->update($datosProductor);

        $productor=Productor::findOrFail($id);
        return redirect('productor');
    }
    public function destroy($id)
    {
        //
        Productor::destroy($id);

        return redirect('productor');
    }
    public function exportExcel(){
        return Excel::download(new ProductorExport, 'Productor-datos.xlsx');
    }
}
