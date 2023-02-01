<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
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
        $room = Room::all();
        return view('admin.kamar.index', compact('room'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kamar.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipeKamar' => 'required',
            'foto'=>'required',
            'harga' => 'required|integer|min:150000',
            'jumlah' => 'required|integer',
        ],
        [
            'tipeKamar.required' => 'tipe kamar wajib diisi',
            'foto.required' => 'foto wajib diisi',
            'harga.required' => 'harga wajib diisi',
            'harga.min' => 'harga minimum 150,000',
        ]);


        // $room = new Room;
        // $room->tipeKamar = $request->tipeKamar;
        // $room->foto = $request->foto;
        // $room->harga = $request->harga;
        // $room->jumlah = $request->jumlah;
        // $room->save();
        $input = $request->all();

        if ($image = $request->file('foto')) {
            $destinationPath = public_path('image/kamar/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // move_uploaded_file($image['tmp_name'], $destinationPath.$profileImage);
            $image->move($destinationPath, $profileImage);
            $input['foto'] = "image/kamar/$profileImage";
        }


        // dd($input['foto']);

        Room::create($input);


        return redirect()->route('adminkamar.index')->with('Berhasil', 'Berhasil menambahkan data kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomRequest  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update($id ,Request $request, Room $room)
    {
        // $request->validate([
        //     'tipeKamar' => 'required',
        //     'harga' => 'required',
        //     'jumlah' => 'required',
        // ]);

        // $input = $request->all();
        // if ($image = $request->file('foto')) {
        //     $destinationPath = public_path('image/kamar/');
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     // move_uploaded_file($image['tmp_name'], $destinationPath.$profileImage);
        //     $image->move($destinationPath, $profileImage);
        //     $input['foto'] = "image/kamar/$profileImage";
        // }else{
        //     unset($input['foto']);
        // }
        // $rooms = Room::findOrFail($request->get('id'));

        $Validasi = $request->validate([
            'tipeKamar' => 'required',
            // 'foto'=>'required',
            'harga' => 'required',
            'jumlah' => 'required',
        ]);
        $rooms = Room::find($id);
        $rooms->update($request->except(['_token', 'sumbit']));

        dd($request);
        // $room->update($rooms);

        // $rooms->update($request->except(['_token', 'sumbit']));

        return redirect()->route('adminkamar.index')->with('Berhasil', 'Menambahkan Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $kamar = Room::find($id);
        $kamar->delete();
        return redirect()->route('adminkamar.index')->with('Berhasil', 'Berhasil Menghapus Data');
    }
}
