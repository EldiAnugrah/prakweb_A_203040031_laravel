@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 font-weight-normal text-center">Daftar Banh</h1>
                <form>
                    <div class="form-floating">
                        <label for="inputEmail" class="sr-only" id="email"></label>
                        <input type="email" id="email" class="form-control" placeholder="Email address" required
                            autofocus>
                    </div>
                    <div class="form-floating">
                        <label for="inputEmail" class="sr-only" id="name">Name</label>
                        <input type="name" name="name" id="name" class="form-control" placeholder="Name" required
                            autofocus>
                    </div>
                    <div class="form-floating">
                        <label for="inputEmail" class="sr-only" id="username">Username</label>
                        <input type="name" name="username" id="username" class="form-control" placeholder="username"
                            required autofocus>
                    </div>
                    <label for="Password" class="sr-only">Password</label>
                    <input type="password" id="Password" name="Password" class="form-control" placeholder="Password"
                        required>
                    <div class="checkbox mb-3">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center mt-4">Sudah Daftar? <a href="/login">Gas Masuk </a></small>
            </main>
        </div>
    </div>
@endsection
