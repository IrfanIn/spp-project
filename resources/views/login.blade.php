@extends('main')

@push('css')
    <link rel="stylesheet" href="css/login.css">
@endpush

@section('content')
    <div class="container-fluid login position-relative d-flex justify-content-center align-items-center">
        <form action="{{ route('post') }}" method="post">
            @csrf
            <div class="text-white text-center position-relative" style="z-index: 1">
                <h2 class="text-uppercase text-center">login</h2>
                @if (session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @else
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis nulla eum quidem tenetur
                        assumenda
                        fugiat harum perferendis minima voluptas aperiam. Numquam sed debitis iusto ipsam.
                    </p>
                @endif
            </div>
            <div class="mb-3 form-floating">
                <input class="form-control" type="text" name="username" id="username" placeholder="username">
                <label class="form-label" for="username">username / nis</label>
            </div>
            <div class="form-floating mb-3 position-relative">
                <input class="form-control" type="password" name="password" id="password" placeholder="password">
                <label class="form-label" for="password">password</label>
                <div class="position-absolute" style="right: 1rem; top: 1.1rem;">
                    <i class="fa-solid fa-eye " style="cursor: pointer;" id="show"></i>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Masuk</button>
        </form>
    </div>
@endsection
