@extends('layouts.auth')

@section('content')
<h3 class="text-center mt-0 m-b-15">
    <a href="index.html" class="logo logo-admin"><img src="{{ asset('annex/assets/images/logo.png') }}" height="24" alt="logo"></a>
</h3>

<div class="p-3">
    <form class="form-horizontal m-t-20" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-12">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
            </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row">
            <div class="col-12">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            </div>
            
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row">
            <div class="col-12">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                </div>
            </div>
        </div>

        <div class="form-group text-center row m-t-20">
            <div class="col-12">
                <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button>
            </div>
        </div>

        <div class="form-group m-t-10 mb-0 row">
            <div class="col-sm-7 m-t-20">
                <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> <small>Forgot your password ?</small></a>
            </div>
            <div class="col-sm-5 m-t-20">
                <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> <small>Create an account ?</small></a>
            </div>
        </div>
    </form>
</div>
@endsection
