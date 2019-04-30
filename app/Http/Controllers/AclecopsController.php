<?php

namespace App\Http\Controllers;

use App\Aclecops;
use Illuminate\Http\Request;

class AclecopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages/Index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aclecops  $aclecops
     * @return \Illuminate\Http\Response
     */
    public function show(Aclecops $aclecops)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aclecops  $aclecops
     * @return \Illuminate\Http\Response
     */
    public function edit(Aclecops $aclecops)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aclecops  $aclecops
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aclecops $aclecops)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aclecops  $aclecops
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aclecops $aclecops)
    {
        //
    }
}
