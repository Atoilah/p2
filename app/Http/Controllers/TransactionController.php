<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TransactionController extends Controller
{
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
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uuid = Str::uuid()->toString();
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
        return redirect()->back()->with('success','update');
    }
}
