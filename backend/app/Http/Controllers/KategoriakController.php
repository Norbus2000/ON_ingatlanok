<?php

namespace App\Http\Controllers;

use App\Models\kategoriak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriak = DB::table("kategoriaks")->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\kategoriak  $kategoriak
     * @return \Illuminate\Http\Response
     */
    public function show(kategoriak $kategoriak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategoriak  $kategoriak
     * @return \Illuminate\Http\Response
     */
    public function edit(kategoriak $kategoriak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategoriak  $kategoriak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategoriak $kategoriak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategoriak  $kategoriak
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategoriak $kategoriak)
    {
        //
    }
}
