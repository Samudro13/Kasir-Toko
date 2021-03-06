<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Pelanggan;
use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.index',[
            'transaksis' => $transaksis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = Barang::all();
        $pelanggans = Pelanggan::all();
        return view('transaksi.create',[
            'barangs' => $barangs,
            'pelanggans' => $pelanggans
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = validator($request->all(),[
            'id_barang' => 'required|integer',
            'id_pelanggan' => 'required|integer',
            'tanggal' => 'required|date',
            'jumlahbarang' => 'required|integer',
            'jumlahharga' => 'required|integer',
            'diskon' => 'required|integer',
            'setelahdiskon' => 'required|integer',
        ])->validate();

        $transaksi = new Transaksi($validateData);
        $transaksi->save();

        return redirect(route('daftarTransaksi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        $barangs = Barang::all();
        $pelanggans = Pelanggan::all();
        return view('transaksi.edit',[
            'transaksi' => $transaksi,
            'barangs' => $barangs,
            'pelanggans' => $pelanggans
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $validateData = validator($request->all(),[
            'id_barang' => 'required|integer',
            'id_pelanggan' => 'required|integer',
            'tanggal' => 'required|date',
            'jumlahbarang' => 'required|integer',
            'jumlahharga' => 'required|integer',
            'diskon' => 'required|integer',
            'setelahdiskon' => 'required|integer',
        ])->validate();

        $transaksi->id_barang = $validateData['id_barang'];
        $transaksi->id_pelanggan = $validateData['id_pelanggan'];
        $transaksi->tanggal = $validateData['tanggal'];
        $transaksi->jumlahbarang = $validateData['jumlahbarang'];
        $transaksi->jumlahharga = $validateData['jumlahharga'];
        $transaksi->diskon = $validateData['diskon'];
        $transaksi->setelahdiskon = $validateData['setelahdiskon'];
        $transaksi->save();

        return redirect(route('daftarTransaksi'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect(route('daftarTransaksi'));
    }
}
