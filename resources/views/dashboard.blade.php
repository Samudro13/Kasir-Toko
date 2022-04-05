@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Home</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active"></li>
				</ol>
			</div>
			<!-- /.col -->
			<div class="col1-x1-3 col-md-2">

				<div class="card bg-green text-white mb-4">
					<div class="card-body">Barang

						<h4 class="mb-0">
							{{ $totalbarang }}
						</h4>
					</div>

					<div class="card-footer d-flex align-items-center justify-content-between">
						<a class="small text-white stretched-link" href="{{ route('daftarBarang') }}">Detail Barang</a>
						<div class="small text-white"><i class="fas fa-angel-right"></i></div>
					</div>
				</div>
			</div>

			<!-- /.col -->
			<div class="col1-x1-3 col-md-2">

				<div class="card bg-cyan text-white mb-4">
					<div class="card-body">Pelanggan

						<h4 class="mb-0">
							{{ $totalpelanggan }}
						</h4>
					</div>

					<div class="card-footer d-flex align-items-center justify-content-between">
						<a class="small text-white stretched-link" href="{{ route('daftarPelanggan') }}">Detail Pelanggan</a>
						<div class="small text-white"><i class="fas fa-angel-right"></i></div>
					</div>
				</div>
			</div>

			<!-- /.col -->
			<div class="col1-x1-3 col-md-2">

				<div class="card bg-yellow text-white mb-4">
					<div class="card-body">Transaksi

						<h4 class="mb-0">
							{{ $totaltransaksi }}
						</h4>
					</div>

					<div class="card-footer d-flex align-items-center justify-content-between">
						<a class="small text-white stretched-link" href="{{ route('daftarTransaksi') }}">Detail Transaksi</a>
						<div class="small text-white"><i class="fas fa-angel-right"></i></div>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
		
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection