<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Pelanggan;
use App\Transaksi;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalbarang = Barang::all()->count();
        $totalpelanggan = Pelanggan::all()->count();
        $totaltransaksi = Transaksi::all()->count();

        return view('dashboard', compact('totalbarang','totalpelanggan','totaltransaksi'));
    }
}
