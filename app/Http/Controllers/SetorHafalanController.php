<?php

namespace App\Http\Controllers;

use App\Models\SetorHafalan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SetorHafalanController extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SetorHafalan  $setorHafalan
     * @return \Illuminate\Http\Response
     */
    public function show(SetorHafalan $setorHafalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SetorHafalan  $setorHafalan
     * @return \Illuminate\Http\Response
     */
    public function edit(SetorHafalan $setorHafalan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SetorHafalan  $setorHafalan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SetorHafalan $setorHafalan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SetorHafalan  $setorHafalan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SetorHafalan $setorHafalan)
    {
        //
    }
}
