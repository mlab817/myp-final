<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PapResource;
use App\Models\Pap;
use Illuminate\Http\Request;

class PapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return PapResource::collection(Pap::paginate());
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
     * @param Pap $pap
     * @return \Illuminate\Http\Response
     */
    public function show(Pap $pap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Pap $pap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pap $pap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Pap $pap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pap $pap)
    {
        //
    }
}
