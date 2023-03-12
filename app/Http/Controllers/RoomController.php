<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\FacilityRoom;
use App\Models\FacilitysRoom;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\File;

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
        $froom = FacilityRoom::all();
        $frooms = FacilitysRoom::all();
        return view('admin.kamar.index', compact('room'), compact('froom'), compact('frooms'));
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
        $input = $request->all();
        if ($image = $request->file('foto')) {
            $destinationPath = public_path('image/kamar/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto'] = "image/kamar/$profileImage";
        }
        // Room::create($input);
        $room = new Room;
        $room->tipeKamar = $request->tipeKamar;
        $room->foto = $input['foto'];
        $room->harga = $request->harga;
        $room->jumlah = $request->jumlah;
        $room->save();
        $room->facility_rooms()->attach($request->fasilitasKamar);
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
    public function edit(Room $room, $adminkamar)
    {
        $room = Room::find($adminkamar);
        // dd($kamar);
        return view('admin.kamar.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomRequest  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $adminkamar)
    {
        $request->validate([
            'tipeKamar' => 'required',
            'harga' => 'required|integer|min:150000',
            'jumlah' => 'required|integer',
        ],
        [
            'tipeKamar.required' => 'tipe kamar wajib diisi',
            'harga.required' => 'harga wajib diisi',
            'harga.min' => 'harga minimum 150,000',
        ]);



        // $input = $request->all();
        // if ($image = $request->file('foto')) {
        //     $destinationPath = public_path('image/kamar/');
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['foto'] = "image/kamar/$profileImage";
        // }else{
        //     unset($input['image']);
        // }


        // $data = $request->all();
        // dd($data);
        // $kamar->update($request->all());
        dd($request->all());
        return redirect()->route('adminkamar.index')->with('Berhasil', 'Update data kamar');
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
        // dd($kamar->foto);
        $image_path = $kamar->foto;  // the value is : localhost/project/image/filename.format
        if (file_exists($image_path)) {

            @unlink($image_path);

        }
        $kamar->facility_rooms()->detach($request->fasilitasKamar);
        $kamar->delete();
        return redirect()->route('adminkamar.index')->with('Delete', 'Berhasil Menghapus Data');
    }

    public function delete(Request $request)
    {
        $kamar = Room::find($request);
        // dd($kamar->foto);
        // $image_path = $kamar->foto;  // the value is : localhost/project/image/filename.format
        // if (file_exists($image_path)) {

        //     @unlink($image_path);

        // }
        // $kamar->facility_rooms()->detach($request->fasilitasKamar);
        // $kamar->delete();

        dd($kamar);
        return redirect()->route('adminkamar.index')->with('Delete', 'Berhasil Menghapus Data');
    }
}
