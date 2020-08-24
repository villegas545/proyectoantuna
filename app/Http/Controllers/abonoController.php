<?php

namespace App\Http\Controllers;

use App\abono;
use App\Facturas;
use Illuminate\Http\Request;
use App\Http\Requests;


class abonoController extends Controller
{
     public function index($id)
    {
        //
        $datos=abono::paginate()->where("factura","=",$id);
        $factura=Facturas::where("factura",$id);
        return view('abonos.index',compact('id','datos','factura'));
    }
    public function vista(){
        return view('abonos.agregar');
        }
    public function create(Request $request)
    {
        $abonoo = new abono();

        $abonoo -> NoPago - $request -> NoPago;
        $abonoo -> NoFactura - $request -> NoFactura;
        $abonoo -> cantidad - $request -> cantidad;
        $abonoo -> fecha - $request -> fecha;

        $abonoo ->save();

        return redirect('/create');
    }
    public function store(Request $request)
    {
        //
        // $datosProductor=request()->all();

        $datosAbono=request()->except('_token');

        abono::insert($datosAbono);

        // return response()->json($datosProductor);
        return redirect('productor');
    }
    public function edit($id)
    {
        //
        $abono=abono::findOrFail($id);

        return view('abonos.edit',compact('abono'));
    }
     public function update(Request $request, $id)
    {
        //
        $datosAbono=request()->except(['_token','_method']);
        abono::where('id','=',$id)->update($datosAbono);

        $abono=abono::findOrFail($id);
        return view('abonos.edit',compact('abono'));
    }
    public function destroy($id)
    {
        //
        abonos::destroy($id);

        return redirect('abono');
    }
}