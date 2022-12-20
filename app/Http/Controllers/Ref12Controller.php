<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ref12Resource;
use App\Models\Ref_12;
use Illuminate\Http\Request;

class Ref12Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ref12Resource::collection(Ref_12::all());
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
     * @param  \App\Models\Ref_12  $ref_12
     * @return \Illuminate\Http\Response
     */
    public function show(Ref_12 $ref_12)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ref_12  $ref_12
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ref_12 $ref_12)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ref_12  $ref_12
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ref_12 $ref_12)
    {
        //
    }
}
