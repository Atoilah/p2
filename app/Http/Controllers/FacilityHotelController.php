<?php

namespace App\Http\Controllers;

use App\Models\FacilityHotel;
use App\Http\Requests\StoreFacilityHotelRequest;
use App\Http\Requests\UpdateFacilityHotelRequest;

class FacilityHotelController extends Controller
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
        $htl = FacilityHotel::all();
        return view('admin.fasilitas-hotel.index', compact('htl'));
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
     * @param  \App\Http\Requests\StoreFacilityHotelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacilityHotelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FacilityHotel  $facilityHotel
     * @return \Illuminate\Http\Response
     */
    public function show(FacilityHotel $facilityHotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacilityHotel  $facilityHotel
     * @return \Illuminate\Http\Response
     */
    public function edit(FacilityHotel $facilityHotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacilityHotelRequest  $request
     * @param  \App\Models\FacilityHotel  $facilityHotel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacilityHotelRequest $request, FacilityHotel $facilityHotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacilityHotel  $facilityHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacilityHotel $facilityHotel)
    {
        //
    }
}
