@extends('layouts.master')
@section('title','dashboard')

@section('content')
<div class="card-body" style="display: flex; justify-content: center; align-items: center; text-align: center; height: 100vh;">
        Halo {{ Auth::user()->name }}, <br> nanti akan ada tampilan dashboard, mohon sabar
        </div>
        <!-- /.card-body -->
@endsection