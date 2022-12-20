<?php

namespace App\Http\Controllers;

use App\Models\DataTest;
use App\Http\Requests\StoreDataTestRequest;
use App\Http\Requests\UpdateDataTestRequest;

class DataTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataTestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataTestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataTest  $dataTest
     * @return \Illuminate\Http\Response
     */
    public function show(DataTest $dataTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataTestRequest  $request
     * @param  \App\Models\DataTest  $dataTest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataTestRequest $request, DataTest $dataTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataTest  $dataTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataTest $dataTest)
    {
        //
    }
}
