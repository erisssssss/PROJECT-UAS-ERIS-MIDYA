
@extends('layouts.master')
@section('title','Edit Barang Masuk')
@section('judul','Edit Barang Masuk')
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
            <form method="post" action="/barang_masuk/{{$bm->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" readonly value="{{$bm->nm_brg}}" class="form-control" name="nama_barang">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Barang</label>
                    <input type="text" value="{{$bm->jenis_brg}}" class="form-control" name="jenis">
                </div>
                <div class="mb-3">
                    <label class="form-label">Merk</label>
                    <input type="text" value="{{$bm->merk}}" class="form-control" name="merk">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="text" value="{{$bm->jumlah}}" class="form-control" name="jumlah">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" value="{{$bm->harga}}" class="form-control" name="harga">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Masuk</label>
                    <input type="text" value="{{$bm->tgl_msk}}" class="form-control" name="tanggal_masuk">
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
