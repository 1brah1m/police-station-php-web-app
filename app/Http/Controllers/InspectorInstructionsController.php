<?php

namespace App\Http\Controllers;

use App\InspectorInstructions;
use Illuminate\Http\Request;

class InspectorInstructionsController extends Controller
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
        $instructions = new InspectorInstructions;
        $instructions->inspector_id = $request->input('inspector_id');
        $instructions->station = $request->input('ps_name');
        $instructions->case_no = $request->input('case_no');
        $instructions->instructions = $request->input('instructions');
        $instructions->start_date = $request->input('instruction_date');
        $instructions->complete_date = $request->input('instruction_complete_date');
        $instructions->save(); 
        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InspectorInstructions  $inspectorInstructions
     * @return \Illuminate\Http\Response
     */
    public function show(InspectorInstructions $inspectorInstructions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InspectorInstructions  $inspectorInstructions
     * @return \Illuminate\Http\Response
     */
    public function edit(InspectorInstructions $inspectorInstructions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InspectorInstructions  $inspectorInstructions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InspectorInstructions $inspectorInstructions)
    {
        $inspectorInstructions = InspectorInstructions::find($request->input('id'));
        $inspectorInstructions->complete_date = $request->input('instruction_complete_date');
        $inspectorInstructions->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InspectorInstructions  $inspectorInstructions
     * @return \Illuminate\Http\Response
     */
    public function destroy(InspectorInstructions $inspectorInstructions)
    {
        //
    }

    public function complete(Request $request)
    {
        $inspectorInstructions = InspectorInstructions::find($request->input('id')); 
        $inspectorInstructions->isCompleted = true; 
        $inspectorInstructions->save(); 
        return redirect()->route('home');
    }
}
