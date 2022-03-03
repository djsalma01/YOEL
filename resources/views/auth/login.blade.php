@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="assets/img/login-register/login.jpeg" class="card-img" alt="Register image">
            </div>
        <div class="card-body">
            <img src="assets/img/favicon.png" class="img-responsive rounded mx-auto d-block" alt="capture logo">
                <div class="d-flex justify-content-center font-italic">
                    <h3>Welcome to Capture</h3>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                
                    <!--email input-->
                    <div class="form-group row p-2">
                        <div class="col-md-12">
                            <input id="email" type="email" placeholder="johnsmith@gmail.com" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!--password input-->
                    <div class="form-group row p-2">
                        <div class="col-md-12">
                            <input id="password" type="password" placeholder="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4 p-3">
                        <div class="col d-flex justify-content-center">
                        <!--remember checkbox-->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        </div>
                        <!--remember checkbox-->
                        <div class="col">
                          @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                      </div>
                      <!-- submit button -->
                      <button type="submit" class="btn btn-white btn-block btn-lg btn-outline-dark">{{ __('Login') }}</button>
                
                
                </form>
            </div>
        </div>
    </div>
</div>
@endsection