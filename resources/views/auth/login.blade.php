@extends('layout.master')
@push('style')
    <link rel="stylesheet" href="/public/src/css/login.min.css">
@endpush
@section('main')
    <div class="card wrapper">
        <div class="card-body">
            <h4>{{ config('app.name') }}</h4>
            <div class="graphics">
                <img src="/public/src/images/login.jpg" alt="">
            </div>
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection