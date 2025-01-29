@extends('layout.master')
@push('style')
    <link rel="stylesheet" href="/public/src/css/login.min.css">
@endpush
@section('main')
    <div class="card wrapper shadow">
        <div class="card-body">
            <h5>{{ config('app.name') }}</h5>
            <div class="graphics">
                <img src="/public/src/images/login.jpg" alt="">
            </div>
            <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        <input class="form-control" type="email" name="email" id="email" autocomplete="off" autofocus required>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" id="password" autocomplete="off" required>
                    </div>
                </div>
                <div class="mb-4">
                    <a href="#" class="nav-link text-primary">Forgot Password?</a>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection