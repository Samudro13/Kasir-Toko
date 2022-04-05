<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $barangs = Barang::all();
       return view('barang.index',[
           'barangs' => $barangs
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
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
            'kode' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'harga' => 'required|integer',
        ])->validate();

        $barang = new Barang($validateData);
        $barang->save();

        return redirect(route('daftarBarang'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit',[
            'barang' => $barang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $validateData = validator($request->all(),[
            'kode' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'harga' => 'required|integer',
        ])->validate();

        $barang->kode = $validateData['kode'];
        $barang->nama = $validateData['nama'];
        $barang->harga = $validateData['harga'];
        $barang->save();

        return redirect(route('daftarBarang'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect(route('daftarBarang'));
    }
}
