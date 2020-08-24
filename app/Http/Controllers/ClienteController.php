<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests;

class ClienteController extends Controller
{
	public function index()
    {
        //
        $datos['cliente']=Cliente::paginate();

        return view('cliente.index',$datos);
    }
	public function vista(){
		return view('cliente.agregar');
	}
    public function create(Request $request){
    	$cliente = new Cliente();

    	$cliente -> nombre = $request -> nombre;
    	$cliente -> empresa = $request -> empresa;
    	$cliente -> direccion = $request -> direccion;
    	$cliente -> ciudad = $request -> ciudad;
    	$cliente -> colonia = $request -> colonia;
    	$cliente -> RFC = $request -> RFC;
    	$cliente -> telefono_oficina = $request -> telefono_oficina;
    	$cliente -> telefono_celular = $request -> telefono_celular;
    	$cliente -> correo = $request -> correo;
    	$cliente -> save();

    	return redirect('/cliente');
    }
    public function store(Request $request)
    {
        //
        // $datosProductor=request()->all();

        $datosCliente=request()->except('_token');

        Cliente::insert($datosCliente);

        // return response()->json($datosProductor);
        return redirect('cliente');
    }
    public function edit($id){
        //
        $cliente=Cliente::findOrFail($id);

        return view('cliente.edit',compact('cliente'));
    }
     public function update(Request $request, $id)
    {
        //
        $datosCliente=request()->except(['_token','_method']);
        Cliente::where('id','=',$id)->update($datosCliente);

        $cliente=Cliente::findOrFail($id);
        return redirect('cliente');
    }
    public function destroy($id)
    {
        //
        Cliente::destroy($id);

        return redirect('cliente');
    }
}
