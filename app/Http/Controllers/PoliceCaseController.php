<?php

namespace App\Http\Controllers;

use App\PoliceCase;
use Illuminate\Http\Request;

class PoliceCaseController extends Controller
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
        
        $case = new PoliceCase; 
        $case->cr_no = $request->input('cr_no'); 
        $case->station = $request->input('station'); 
        $case->description = $request->input('description'); 
        $case->save(); 
        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PoliceCase  $policeCase
     * @return \Illuminate\Http\Response
     */
    public function show(PoliceCase $policeCase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PoliceCase  $policeCase
     * @return \Illuminate\Http\Response
     */
    public function edit(PoliceCase $policeCase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PoliceCase  $policeCase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoliceCase $policeCase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PoliceCase  $policeCase
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoliceCase $policeCase)
    {
        //
    }
}
