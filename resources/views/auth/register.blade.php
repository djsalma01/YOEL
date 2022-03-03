@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="assets/img/login-register/register.jpeg" class="card-img" alt="Register image">
                </div>
            <div class="card-body">
                <img src="assets/img/favicon.png" class="img-responsive rounded mx-auto d-block" alt="capture logo">
                    <div class="d-flex justify-content-center font-italic">
                        <h3>Welcome to Capture</h3>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row p-2">
                            <div class="col-md-12">
                                <input id="name" type="text" placeholder="johnsmith" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row p-2">
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="johnsmith@gmail.com" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row p-2">
                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row p-2">
                            <div class="col-md-12">
                                <input id="password-confirm" placeholder="confirm password" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="mt-auto">
                            <button type="submit" class="btn btn-white btn-block btn-lg btn-outline-dark">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
