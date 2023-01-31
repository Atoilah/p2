<?php

namespace App\Http\Controllers;

use App\Models\FacilitysRoom;
use App\Http\Requests\StoreFacilitysRoomRequest;
use App\Http\Requests\UpdateFacilitysRoomRequest;

class FacilitysRoomController extends Controller
{
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
     * @param  \App\Http\Requests\StoreFacilitysRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacilitysRoomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FacilitysRoom  $facilitysRoom
     * @return \Illuminate\Http\Response
     */
    public function show(FacilitysRoom $facilitysRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacilitysRoom  $facilitysRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(FacilitysRoom $facilitysRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacilitysRoomRequest  $request
     * @param  \App\Models\FacilitysRoom  $facilitysRoom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacilitysRoomRequest $request, FacilitysRoom $facilitysRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacilitysRoom  $facilitysRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacilitysRoom $facilitysRoom)
    {
        //
    }
}
