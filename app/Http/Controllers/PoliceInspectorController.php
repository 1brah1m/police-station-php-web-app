<?php

namespace App\Http\Controllers;

use App\PoliceInspector;
use Illuminate\Http\Request;

class PoliceInspectorController extends Controller
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
        $inspector = new PoliceInspector; 
        $inspector->name = $request->input('name');
        $inspector->staff_id = $request->input('staff_id'); 
        $inspector->staff_name = $request->input('staff_name'); 
        $inspector->contact_id = $request->input('contact_id');
        $inspector->rank = $request->input('rank');
        $inspector->save(); 
        return redirect()->route('home');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PoliceInspector  $policeInspector
     * @return \Illuminate\Http\Response
     */
    public function show(PoliceInspector $policeInspector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PoliceInspector  $policeInspector
     * @return \Illuminate\Http\Response
     */
    public function edit(PoliceInspector $policeInspector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PoliceInspector  $policeInspector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoliceInspector $policeInspector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PoliceInspector  $policeInspector
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoliceInspector $policeInspector)
    {
        //
    }
}
