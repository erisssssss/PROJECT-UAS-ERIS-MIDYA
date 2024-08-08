@extends('layouts.master')
@section('title','Tambah Data Barang Masuk')

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">

        </h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
            <form method="POST" action="/barang_masuk/store/">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Barang</label>
                    <input type="text" name="jenis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Merk</label>
                    <input type="text" name="merk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" class="form-control" id="exampleInputPassword1">
                </div>



                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        <!-- /.card-body -->

    </div>
@endsection