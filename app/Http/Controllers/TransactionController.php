<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('transactions')
        ->select('transactions.*' , 'rooms.harga', 'rooms.tipeKamar', 'rooms.jumlah as tKamar', 'users.email', 'users.name', 'users.role')
        ->leftJoin('rooms', 'transactions.room_id', '=', 'rooms.id')
        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
        ->get();
        return view('resepsionis.invoice',compact('data'));
    }
    public function persetujuan()
    {
        $data = DB::table('transactions')
        ->select('transactions.*' , 'rooms.harga', 'rooms.tipeKamar', 'rooms.jumlah as tKamar', 'users.email', 'users.name', 'users.role')
        ->leftJoin('rooms', 'transactions.room_id', '=', 'rooms.id')
        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
        ->where('status', 0)
        ->get();
        dd($data);
        return view('resepsionis.invoice',compact('data'));
    }
    public function cekIn()
    {
        $data = DB::table('transactions')
        ->select('transactions.*' , 'rooms.harga', 'rooms.tipeKamar', 'rooms.jumlah as tKamar', 'users.email', 'users.name', 'users.role')
        ->leftJoin('rooms', 'transactions.room_id', '=', 'rooms.id')
        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
        ->where('status', 1)
        ->get();
        return view('resepsionis.invoice',compact('data'));
    }
    public function cekOut()
    {
        $data = DB::table('transactions')
        ->select('transactions.*' , 'rooms.harga', 'rooms.tipeKamar', 'rooms.jumlah as tKamar', 'users.email', 'users.name', 'users.role')
        ->leftJoin('rooms', 'transactions.room_id', '=', 'rooms.id')
        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
        ->where('status', 2)
        ->get();
        return view('resepsionis.invoice',compact('data'));
    }
    public function cancel()
    {
        $data = DB::table('transactions')
        ->select('transactions.*' , 'rooms.harga', 'rooms.tipeKamar', 'rooms.jumlah as tKamar', 'users.email', 'users.name', 'users.role')
        ->leftJoin('rooms', 'transactions.room_id', '=', 'rooms.id')
        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
        ->where('status', 3)
        ->get();
        return view('resepsionis.invoice',compact('data'));
    }
    public function selesai()
    {
        $data = DB::table('transactions')
        ->select('transactions.*' , 'rooms.harga', 'rooms.tipeKamar', 'rooms.jumlah as tKamar', 'users.email', 'users.name', 'users.role')
        ->leftJoin('rooms', 'transactions.room_id', '=', 'rooms.id')
        ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
        ->where('status', 4)
        ->get();
        return view('resepsionis.invoice',compact('data'));
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
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaPemesan' =>'required|max:50',
            'telp' =>'required|max:15',
            'namaTamu' =>'required|max:50',
            'room_id' =>'required|integer',
            'user_id' =>'required|integer',
            'cekIn' =>'required|date',
            'cekOut' =>'required|date',
            'jumlah' =>'required|integer',
        ]);
        $mytime = date('H:i:s');

        $transaction = new Transaction;
        $transaction->namaPemesan = $request->namaPemesan;
        $transaction->telp = $request->telp;
        $transaction->namaTamu = $request->namaTamu;
        $transaction->room_id = $request->room_id;
        $transaction->user_id = $request->user_id;
        $transaction->cekIn = $request->cekIn;
        $transaction->cekOut = $request->cekOut;
        $transaction->jumlah = $request->jumlah;
        $transaction->save();

        return redirect()->route('aku')->with('success','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function reservasi(Request $request){
        $data = Transaction::where('status',0)->get();
        if(isset($request['check_in_filter'])){
            $data = Transaction::where('status',$request['check_in_filter'])->get();
        }
        return view('reservasi', compact('data'));
    }

    public function acc(Transaction $id)
    {
        $id -> update(['status' =>1]);
        return redirect()->back()->with('Berhasil','Berhasil Menerima');
    }
    public function batal(Transaction $id)
    {
        $id -> update(['status' =>3]);
        return redirect()->back()->with('Delete','Membatalkan Pesanan');
    }

    public function detail(Transaction $tr, $kode){
        // $data = DB::table('transactions')->where('user_id', $user->id)->get();
        $data = DB::table('transactions')
                ->select('transactions.*' , 'rooms.harga', 'rooms.tipeKamar', 'rooms.jumlah as tKamar')
                ->leftJoin('rooms', 'transactions.room_id', '=', 'rooms.id')
                ->where('kode', $kode)
                ->get();
        // dd($data);
        return view('tamu.detail', compact('data'));
    }
}
