<?php

namespace App\Http\Controllers;

use App\Models\Commodity;
use App\Models\CommoditySystem;
use App\Models\Indicator;
use App\Models\Location;
use App\Models\Pap;
use App\Models\Prexc;
use App\Models\Strategy;
use App\Models\ValueChainSegment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Paps/Index', [
            'paps' => Pap::with('prexc','commodity','user','commodity_system','location','value_chain_segment','indicator')->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Paps/Create', [
            'strategies' => Strategy::all(),
            'prexcs' => Prexc::all(),
            'commodities' => Commodity::all(),
            'commoditySystems' => CommoditySystem::all(),
            'locations' => Location::all(),
            'valueChainSegments' => ValueChainSegment::all(),
            'indicators' => Indicator::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pap = Pap::create($request->except('other_vc_segments'));

        // attach after removing null
        $pap->vc_segments()->sync($request->other_vc_segments);

        return Redirect::route('paps.index');
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
     * Show the form for editing the specified resource.
     *
     * @param Pap $pap
     * @return \Inertia\Response
     */
    public function edit(Pap $pap)
    {
        return Inertia::render('Paps/Edit', [
            'pap' => $pap,
            'strategies' => Strategy::all(),
            'prexcs' => Prexc::all(),
            'commodities' => Commodity::all(),
            'commoditySystems' => CommoditySystem::all(),
            'locations' => Location::all(),
            'valueChainSegments' => ValueChainSegment::all(),
            'indicators' => Indicator::all(),
        ]);
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
        $pap->update($request->except('other_vc_segments'));

        // attach after removing null
        $pap->vc_segments()->sync($request->other_vc_segments);

        return Redirect::route('paps.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
