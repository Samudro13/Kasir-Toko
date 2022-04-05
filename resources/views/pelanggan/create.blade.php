@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Daftar Pelanggan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tambah Daftar Pelanggan</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="card">
    <div class="card-body">
        <form action="{{ route('storePelanggan') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="kode">Kode Pelanggan</label>
                <select class="form-control" name="kode" id="kode">
                    <option value="PA623034">PA623034</option>
                    <option value="PA623035">PA623035</option>
                    <option value="PA623036">PA623036</option>
                    <option value="PA623037">PA623037</option>
                    <option value="PA623038">PA623038</option>
                    <option value="PA623039">PA623039</option>
                    <option value="PA623040">PA623040</option>
                    <option value="PA623041">PA623041</option>
                    <option value="PA623042">PA623042</option>
                    <option value="PA623043">PA623043</option>
                    <option value="PA623044">PA623044</option>
                    <option value="PA623045">PA623045</option>
                    <option value="PA623046">PA623046</option>
                    <option value="PA623047">PA623047</option>
                    <option value="PA623048">PA623048</option>
                    <option value="PA623049">PA623049</option>
                    <option value="PA623050">PA623050</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nama">Nama Pelanggan</label>
                <input type="text" name="nama" id="nama" class="form-control" required="required"
                    placeholder="Masukan Nama Pelanggan">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat </label>
                <input type="text" name="alamat" id="alamat" class="form-control" required="required"
                    placeholder="Masukan Alamat Pelanggan">
            </div>

            <div class="text-right">
                <a href="{{ route('daftarPelanggan') }}" class="btn-outline-secondary mr-2" role="button">Batal</a>
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