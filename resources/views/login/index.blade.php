@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">

            @if (session()->has('Berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('Berhasil') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 font-weight-normal text-center">Login Dulu Banh</h1>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-floating">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control rounded-bottom " id="password"
                            placeholder="Password" required>
                        <div class="checkbox mb-3">
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
                </form>
            </main>
            <small class="d-block text-center mt-4">Belum daftar? <a href="/register">Gas Daftar La</a></small>
        </div>
    </div>
@endsection
