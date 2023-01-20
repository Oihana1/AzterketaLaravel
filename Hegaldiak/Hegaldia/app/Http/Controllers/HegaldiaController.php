<?php

namespace App\Http\Controllers;

use App\Models\Hegaldia;
use Illuminate\Http\Request;

class HegaldiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Hegaldia::all();
     
    }
    public function hegaldiakErakutsi(){
        $hegaldia=Hegaldia::all();
        return view('hegaldiak.index',['hegaldiak'=>$hegaldia]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function show($hegaldia)
    {
        //
        $hegaldia = Hegaldia::find($hegaldia);
        return $hegaldia;
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hegaldia  $jokua
     * @return \Illuminate\Http\Response
     */
    public function edit(Hegaldia $hegaldia)
    {
        //
        return view('hegaldiak.edit',['hegaldia'=>$hegaldia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hegaldia $hegaldia)
    {
        //
        $hegaldia->irteera=$request->irteera;
        $hegaldia->helmuga=$request->helmuga;
        $hegaldia->irteeraEgunaOrdua=$request->irteeraEgunaOrdua;
        $hegaldia->iraupena=$request->iraupena;
        $hegaldia->save();
        return redirect()->route('hegaldiak.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function destroy($hegaldia)
    {
        $hegaldia = Hegaldia::find($hegaldia);
        $hegaldia->delete();
        return Hegaldia::all();
    }
}
