@extends('template.dashboard')

@section('header')
    <div class="col-sm-6">
        <button class="btn btn-sm btn-primary float-right" data-bs-toggle="modal" data-bs-target="#modal">Tambah</button>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-primary mt-2" role="alert">
            {{ session('success') }}
        </div>
    @endif
@endsection

@section('main-content')
    @include('components.kelas.modal')
    @include('components.kelas.table')
@endsection
