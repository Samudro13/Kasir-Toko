@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Daftar Transaksi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Daftar Transaksi</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="card">
    <div class="card-body">
        <form action="{{ route('updateTransaksi',['id' => $transaksi->id])}}" method="post">
            @csrf

            <div class="form-group">
                <label for="id_barang">Nama Barang</label>
                <select class="form-control" name="id_barang" id="id_barang" required="required">
                    @foreach ($barangs as $barang )
                    <option value="{{ $barang->id }}"{{ $barang->id == $transaksi->id_barang ? 'selected' : '' }}>{{ $barang->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="id_pelanggan">Nama Pelanggan</label>
                <select class="form-control" name="id_pelanggan" id="id_pelanggan" required="required">
                    @foreach ($pelanggans as $pelanggan )
                    <option value="{{ $pelanggan->id }}"{{ $pelanggan->id == $transaksi->id_pelanggan ? 'selected' : '' }}>{{ $pelanggan->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $transaksi->tanggal }}" required="required"
                    placeholder="Masukan Tanggal Transaksi">
            </div>

            <div class="form-group">
                <label for="jumlahbarang">Jumlah Barang</label>
                <input type="number" name="jumlahbarang" id="jumlahbarang" class="form-control" value="{{ $transaksi->jumlahbarang }}" required="required"
                    placeholder="Masukan Jumlah Barang">
            </div>

            <div class="form-group">
                <label for="jumlahharga">Jumlah Harga</label>
                <input type="number" name="jumlahharga" id="jumlahharga" class="form-control" value="{{ $transaksi->jumlahharga }}" required="required"
                    placeholder="Masukan Jumlah Harga">
            </div>

            <div class="form-group">
                <label for="diskon">Diskon</label>
                <input type="number" name="diskon" id="diskon" class="form-control" value="{{ $transaksi->diskon }}" required="required"
                    placeholder="Diskon">
            </div>

            <div class="form-group">
                <label for="setelahdiskon">Harga Setelah Diskon</label>
                <input type="number" name="setelahdiskon" id="setelahdiskon" class="form-control" value="{{ $transaksi->setelahdiskon}}" required="required"
                    placeholder="Harga Setelah Diskon">
            </div>

            <div class="text-right">
                <a href="{{ route('daftarTransaksi') }}" class="btn-outline-secondary mr-2" role="button">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
<div class="content">
    <div class="container-fluid">

        {{-- main content here --}}

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection