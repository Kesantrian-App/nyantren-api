<?php

namespace App\Http\Controllers;

use App\Models\BorrowPhone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BorrowPhoneController extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BorrowPhone::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'borrowing_date' => 'required|date',
            'borrowing_time' => 'required',
            'reason' => 'sometimes'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all();
        $setorHafalan = BorrowPhone::create($input);
        $success['reason'] =  $setorHafalan->reason;
        $success['borrowing_date'] = $setorHafalan->borrowing_date;

        return response()->json(['success'=>$success], $this->successStatus);
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
     * @param  \App\Models\BorrowPhone  $borrowPhone
     * @return \Illuminate\Http\Response
     */
    public function show(BorrowPhone $borrowPhone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BorrowPhone  $borrowPhone
     * @return \Illuminate\Http\Response
     */
    public function edit(BorrowPhone $borrowPhone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BorrowPhone  $borrowPhone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BorrowPhone $borrowPhone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BorrowPhone  $borrowPhone
     * @return \Illuminate\Http\Response
     */
    public function destroy(BorrowPhone $borrowPhone)
    {
        //
    }
}
