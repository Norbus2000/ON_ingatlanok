<?php

namespace App\Http\Controllers;

use App\Models\ingatlanok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngatlanokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingatlanok = DB::table('ingatlanoks')
    ->select('ingatlanoks.*','kategoriaks.nev' )
    ->join('kategoriaks', 'kategoriaks.id', '=', 'ingatlanoks.kategoria')
    ->get();

        return $ingatlanok;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ingatlanok = new ingatlanok();
        $ingatlanok->kategoria = $request->kategoria;
        $ingatlanok->hirdetesDatuma = $request->hirdetesDatuma;
        $ingatlanok->leiras = $request->leiras;
        $ingatlanok->tehermentes = $request->tehermentes;
        $ingatlanok->kepUrl = $request->kepUrl;
        $ingatlanok->save();
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingatlanok  $ingatlanok
     * @return \Illuminate\Http\Response
     */
    public function show(ingatlanok $ingatlanok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingatlanok  $ingatlanok
     * @return \Illuminate\Http\Response
     */
    public function edit(ingatlanok $ingatlanok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ingatlanok  $ingatlanok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ingatlanok $ingatlanok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingatlanok  $ingatlanok
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingatlanok = ingatlanok::find($id)->delete();
        $ingatlanok->save();
    }
}
