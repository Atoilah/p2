<?php

namespace App\Http\Controllers;

use App\Models\FacilityRoom;
use App\Models\FacilitysRoom;
use App\Models\Room;
use App\Http\Requests\StoreFacilityRoomRequest;
use App\Http\Requests\UpdateFacilityRoomRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FacilityRoomController extends Controller
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
        $fRooms = Room::with(['facility_rooms'])->get();
        $room = FacilityRoom::all();
        // $fRooms = FacilityRoom::with(['rooms'])->get();
        // dd($fRooms);

        return view('admin.fasilitas-kamar.index', compact('fRooms'), compact('room'));
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
     * @param  \App\Http\Requests\StoreFacilityRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaFasilitas' => 'required',
        ]);

        $fRoom = new FacilityRoom;

        $fRoom->namaFasilitas = $request->namaFasilitas;
        $fRoom->save();

        return redirect()->route('fasilitas-kamar.index')->with('Berhasil','menambah data fasilitas kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FacilityRoom  $facilityRoom
     * @return \Illuminate\Http\Response
     */
    public function show(FacilityRoom $facilityRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacilityRoom  $facilityRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(FacilityRoom $facilityRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacilityRoomRequest  $request
     * @param  \App\Models\FacilityRoom  $facilityRoom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacilityRoomRequest $request, FacilityRoom $facilityRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacilityRoom  $facilityRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $fasilitas = FacilityRoom::find($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas-kamar.index')->with('Delete', 'Berhasil Menghapus Data');
    }
}
