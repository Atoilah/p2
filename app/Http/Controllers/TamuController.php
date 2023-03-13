<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacilityRoom;
use App\Models\FacilityHotel;
use App\Models\Room;
use App\Models\Transaction;

class TamuController extends Controller
{
    public function kamar()
    {
        $fRooms = Room::with(['facility_rooms'])->get();
        $room = FacilityRoom::all();
        $fHotel = FacilityHotel::all();

        return view('tamu.kamar', compact('fRooms'), compact('room'));
    }
    public function fasilitas()
    {
        $fHotel = FacilityHotel::all();

        return view('tamu.fasilitas', compact('fHotel'));
    }
    public function dashboard()
    {
        // $room = Room::all();
        $fRooms = Room::with(['facility_rooms'])->get();
        $room = FacilityRoom::all();
        $fHotel = FacilityHotel::all();

        return view('tamu.welcome', compact('room','fRooms','fHotel'));
    }

    public function store(Request $request)
    {
        //validasi
        $this->validate($request,[
            'namaPemesan' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'telp' => ['required', 'string', 'max:15'],
            'namaTamu' => ['required', 'string', 'max:50'],
            'room_id' => ['required', 'integer'],
            'cekIn' => ['required', 'date'],
            'cekOut' => ['required', 'date'],
            'jumlah' => ['required', 'integer'],
        ]);

        Transaction::create([
            'namaPemesan' => $request->namaPemesan,
            'email' => $request->email,
            'telp' => $request->telp,
            'namaTamu' => $request->namaTamu,
            'room_id' => $request->room_id,
            'cekIn' => $request->cekIn,
            'cekOut' => $request->cekOut,
            'jumlah' => $request->jumlah,
        ]);
        return redirect()->route('asu')
            ->with('success', 'Data berhasil dibuat!');
    }
}
