@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Daftar Barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Daftar Barang</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="card">
    <div class="card-body">
        <form action="{{ route('updateBarang',['id' => $barang->id])}}" method="post">
            @csrf
            <div class="form-group">
                <label for="kode">Kode Barang</label>
                <select class="form-control" name="kode" id="kode">
                    <option value="FU822034">FU822034</option>
                    <option value="FU822035">FU822035</option>
                    <option value="FU822036">FU822036</option>
                    <option value="FU822037">FU822037</option>
                    <option value="FU822038">FU822038</option>
                    <option value="FU822039">FU822039</option>
                    <option value="FU822040">FU822040</option>
                    <option value="FU822041">FU822041</option>
                    <option value="FU822042">FU822042</option>
                    <option value="FU822043">FU822043</option>
                    <option value="FU822044">FU822044</option>
                    <option value="FU822045">FU822045</option>
                    <option value="FU822046">FU822046</option>
                    <option value="FU822047">FU822047</option>
                    <option value="FU822048">FU822048</option>
                    <option value="FU822049">FU822049</option>
                    <option value="FU822050">FU822050</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $barang->nama }}" required="required"
                    placeholder="Masukan Nama Barang">
            </div>

            <div class="form-group">
                <label for="harga">Harga Barang</label>
                <input type="number" name="harga" id="harga" class="form-control" value="{{ $barang->harga }}"required="required"
                    placeholder="Masukan Harga Barang">
            </div>

            <div class="text-right">
                <a href="{{ route('daftarBarang') }}" class="btn-outline-secondary mr-2" role="button">Batal</a>
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