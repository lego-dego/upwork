<?php

namespace App\Http\Controllers;

use App\PlanRequest;
use Illuminate\Http\Request;

class PlanRequestController extends Controller
{
    /**
     * Create a new DController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planRequest=planRequest::where('active', 1)->orderBy('createdAt', 'desc')->take(20)->get();
        return view('pages.plan_requests.index')->with('planRequest',$planRequest);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.plan_requests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlanRequest  $planRequest
     * @return \Illuminate\Http\Response
     */
    public function show(PlanRequest $planRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlanRequest  $planRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,planRequest $planRequestld,$id)
    {
        $planRequest= planRequest::all()->where('id',$id)->first();
        return view('pages.plan_requests.edit')->with('planRequest',$planRequest);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlanRequest  $planRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanRequest $planRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlanRequest  $planRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanRequest $planRequest)
    {
        //
    }
}
