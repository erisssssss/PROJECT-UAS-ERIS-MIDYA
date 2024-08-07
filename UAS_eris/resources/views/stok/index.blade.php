@extends('layouts.master')

@section('title', 'Data Stok')
@section('judul', 'Data Stok')

@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Stock</li>
    </ol>
@endsection

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('js')
<!-- DataTables & Plugins -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Stok Barang</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Merk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stoks as $stok)
                <tr>
                    <td>{{ $stok->nm_brg }}</td>
                    <td>{{ $stok->jns_brg }}</td>
                    <td>{{ $stok->merk }}</td>
                    <td>{{ $stok->harga }}</td>
                    <td>{{ $stok->stok }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
