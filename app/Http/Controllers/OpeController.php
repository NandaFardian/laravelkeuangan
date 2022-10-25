<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator;

class OpeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ope = Operator::all();
        $nomor =1;
        return view('operator.index',compact('ope','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operator.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ope = new Operator;
        
        $ope->nama_ope = $request->nama;
        $ope->alamat_ope = $request->alamat;
        $ope->no_hp_ope = $request->no_hp;
        $ope->save();
        return redirect('/operator');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ope = Operator::find($id);
        return view('operator.edit',compact('ope'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ope = Operator::find($id);

        $ope->nama_ope = $request->nama;
        $ope->alamat_ope = $request->alamat;
        $ope->no_hp_ope = $request->no_hp;
        $ope->save();
        return redirect('/operator');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ope = Operator::find($id);
        $ope->delete();
        return redirect('/operator');
    }
}
