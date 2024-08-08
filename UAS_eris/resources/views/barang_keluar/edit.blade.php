
@extends('layouts.master')
@section('title','Edit Barang Keluar')
@section('judul','Edit Barang Keluar')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Barang</a></li>
        <li class="breadcrumb-item active">Edit Data</li>
    </ol>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="post" action="/barang_keluar/{{$bk->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" readonly value="{{$bk->nm_brg}}" class="form-control" name="nama_barang">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Barang</label>
                    <input type="text" value="{{$bk->jenis_brg}}" class="form-control" name="jenis">
                </div>
                <div class="mb-3">
                    <label class="form-label">Merk</label>
                    <input type="text" value="{{$bk->merk}}" class="form-control" name="merk">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="text" value="{{$bk->jumlah}}" class="form-control" name="jumlah">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" value="{{$bk->harga}}" class="form-control" name="harga">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Masuk</label>
                    <input type="text" value="{{$bk->tgl_klr}}" class="form-control" name="tanggal_keluar">
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
        Footer
        </div> --}}
        <!-- /.card-footer-->
    </div>
@endsection
