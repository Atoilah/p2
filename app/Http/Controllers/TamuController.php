<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacilityRoom;
use App\Models\FacilityHotel;
use App\Models\Room;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        $rooms = Room::all();
        $fRooms = Room::with(['facility_rooms'])->get();
        $room = FacilityRoom::all();
        $fHotel = FacilityHotel::all();

        return view('tamu.welcome', compact('room','rooms','fRooms','fHotel'));
    }

    public function store(Request $request)
    {
        //validasi
        $this->validate($request,[
            'namaPemesan' => ['required', 'string', 'max:50'],
            'telp' => ['required', 'string', 'max:15'],
            'namaTamu' => ['required', 'string', 'max:50'],
            'room_id' => ['required', 'integer'],
            'cekIn' => ['required', 'date'],
            'cekOut' => ['required', 'date'],
            'jumlah' => ['required', 'integer'],
        ]);

        Transaction::create([
            'namaPemesan' => $request->namaPemesan,
            'telp' => $request->telp,
            'namaTamu' => $request->namaTamu,
            'room_id' => $request->room_id,
            'cekIn' => $request->cekIn,
            'cekOut' => $request->cekOut,
            'jumlah' => $request->jumlah,
        ]);
        return redirect()->route('aku')
            ->with('success', 'Data berhasil dibuat!');
    }

    // public function invoice(Transaction $id){
    //     $data = DB::table('transactions')->where('user_id', $id->user_id)->get();
    //     $total = DB::table('transactions')->where('user_id', $id->user_id)->count();
    //     $semua = DB::table('transactions')->where('user_id', $id->user_id)->sum('jumlah');
    //     $id = Transaction::where($id);
    //     return view('tamu.invoice', compact('id', 'data', 'total'));
    // }
    public function invoice(User $user){
        // $data = DB::table('transactions')->where('user_id', $user->id)->get();
        $data = DB::table('transactions')
                ->leftJoin('rooms', 'transactions.room_id', '=', 'rooms.id')
                ->get();
        $total = DB::table('transactions')->where('user_id', $user->id)->count();
        $semua = DB::table('transactions')->where('user_id', $user->id)->sum('jumlah');
        $fRooms = Room::with(['facility_rooms'])->get();

        return view('tamu.invoice', compact('user', 'data', 'total', 'fRooms'));
    }
    public function detail(User $user){
        // $data = DB::table('transactions')->where('user_id', $user->id)->get();
        $data = DB::table('transactions')
                ->leftJoin('rooms', 'transactions.room_id', '=', 'rooms.id')
                ->get();
        $total = DB::table('transactions')->where('user_id', $user->id)->count();
        $semua = DB::table('transactions')->where('user_id', $user->id)->sum('jumlah');
        $fRooms = Room::with(['facility_rooms'])->get();

        return view('tamu.detail', compact('user', 'data', 'total', 'fRooms'));
    }
}
