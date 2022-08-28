



















{{-- 


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Espire - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.ico')}}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">

</head>

<body>
    <div class="auth-full-height d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-2">
                                <div class="d-flex justify-content-center mt-3">
                                    <div class="text-center logo">
                                        <img alt="logo" class="img-fluid" src="{{asset('assets/images/logo/logo-fold.png')}}" style="height: 70px;">
                                    </div>
                                </div>
                                <div class="text-center mt-3">  
                                    <h4 class="fw-bolder">Assalamualaikum</h4>
                                    <p class="text-muted">Silahkan Masukkan Email Dan Kata Sandi  </p>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="form-label">{{ __('Email') }}</label>
                                        <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  name="email" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label d-flex justify-content-between">
                                            <span>{{ __('Kata Sandi') }}</span>
                                            {{-- <a href="" class="text-primary font">Forget Password?</a> --}}
                                        </label>
                                        <div class="form-group input-affix flex-column">
                                            <label class="d-none">Password</label>
                                            <input formcontrolname="password" class="form-control @error('email') is-invalid @enderror" name="password" value="{{ old('email') }}" type="password">
                                            {{-- <i class="suffix-icon feather cursor-pointer text-dark icon-eye" ng-reflect-ng-class="icon-eye"></i> --}}
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                       
                                    </div>
                                    <button type="submit" class="btn btn-primary w-10"> {{ __('Login') }}</button>


                         
                                </form>
                                {{-- <div class="mb-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> --}}
                                {{-- <div class="divider">
                                    <span class="divider-text text-muted">or login with</span>
                                </div>
                                <div class="row">
                                    <div class="col px-1">
                                        <button class="btn btn-outline-secondary w-100">
                                            <img src="{{asset('assets/images/thumbs/thumb-1.png')}}" alt="" style="max-width: 20px;">
                                        </button>
                                    </div>
                                    <div class="col px-1">
                                        <button class="btn btn-outline-secondary w-100">
                                            <img src="{{asset('assets/images/thumbs/thumb-2.png')}}" alt="" style="max-width: 20px;">
                                        </button>
                                    </div>
                                    <div class="col px-1">
                                        <button class="btn btn-outline-secondary w-100">
                                            <img src="{{asset('assets/images/thumbs/thumb-3.png')}}" alt="" style="max-width: 20px;">
                                        </button>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <p class="text-muted">Don't have an account yet? <a href="/register">Sign Up</a></p>
                                </div> --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
    <!-- Core Vendors JS -->
    <script src="{{asset('assets/js/vendors.min.js')}}"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>

</body>

</html>
