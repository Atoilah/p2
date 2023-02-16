<?php

namespace App\Http\Controllers;

use App\Models\FacilityHotel;
use App\Http\Requests\StoreFacilityHotelRequest;
use App\Http\Requests\UpdateFacilityHotelRequest;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $request->validate([
            'namaFasilitas' => 'required',
            'keterangan' => 'required',
            'foto'=>'required',
        ],
        [
            'namaFasilitas.required' => 'tipe kamar wajib diisi',
            'keterangan.required' => 'harga wajib diisi',
            'foto.required' => 'foto wajib diisi',
        ]);
        $input = $request->all();
        if ($image = $request->file('foto')) {
            $destinationPath = public_path('image/hotel/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto'] = "image/hotel/$profileImage";
        }
        // dd($input);
        FacilityHotel::create($input);
        return redirect()->route('fasilitas-hotel.index')->with('Berhasil', 'Berhasil menambahkan data kamar');
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
    public function update(Request $request, FacilityHotel $fasilitas_hotel)
    {
        $request->validate([
            'namaFasilitas' => 'required',
            'keterangan' => 'required',
        ],
        [
            'namaFasilitas.required' => 'tipe kamar wajib diisi',
            'keterangan.required' => 'harga wajib diisi',
        ]);
        $input = $request->all();
        if ($image = $request->file('foto')) {
            $destinationPath = public_path('image/hotel/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto'] = "image/hotel/$profileImage";
            $update = $fasilitas_hotel->update([
                'namaFasilitas' => $input["namaFasilitas"],
                'keterangan' => $input["keterangan"],
                'foto' => $input["foto"],
            ]);
        }else{

            $update = $fasilitas_hotel->update([
                'namaFasilitas' => $input["namaFasilitas"],
                'keterangan' => $input["keterangan"],
            ]);
        }
        
        if(!$update){
            return redirect()->route('fasilitas-hotel.index')->with('Gagal', 'Gagal merubah data kamar');
        }
        return redirect()->route('fasilitas-hotel.index')->with('Berhasil', 'Berhasil merubah data kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacilityHotel  $facilityHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacilityHotel $fasilitas_hotel)
    {
        $image_path = $fasilitas_hotel->foto;  // the value is : localhost/project/image/filename.format
        if (file_exists($image_path)) {
            
            @unlink($image_path);
            
        }
        $fasilitas_hotel->delete();
        return redirect()->route('fasilitas-hotel.index')->with('Delete', 'Berhasil Menghapus Data');
    }
}
