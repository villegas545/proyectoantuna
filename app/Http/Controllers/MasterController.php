<?php

namespace App\Http\Controllers;

use App\Master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['master']=Master::paginate(5);

        return view('1mp.indexF',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('1mp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $datosMaster=request()->all();

        $datosMaster=request()->except('_token');

        Master::insert($datosMaster);

        // return response()->json($datosMaster);
        return redirect('master');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mas=Master::findOrFail($id);

        return view('1mp.edit',compact('mas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosMaster=request()->except(['_token','_method']);
        Master::where('id','=',$id)->update($datosMaster);

        $mas=Master::findOrFail($id);
        return view('1mp.edit',compact('mas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Master::destroy($id);

        return redirect('master');
    }
}
