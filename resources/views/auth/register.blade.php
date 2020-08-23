@extends('layouts.auth')

@section('content')
<div class="card-body">

    <h3 class="text-center mt-0 m-b-15">
        <a href="index.html" class="logo logo-admin"><img src="{{ asset('annex/assets/images/logo.png') }}" height="24" alt="logo"></a>
    </h3>

    <div class="p-3">
        <form class="form-horizontal" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="col-12">
                    {{-- <input class="form-control" type="email" required="" placeholder="Email"> --}}
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    {{-- <input class="form-control" type="text" required="" placeholder="Username"> --}}
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    {{-- <input class="form-control" type="text" required="" placeholder="Username"> --}}
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    {{-- <input class="form-control" type="password" required="" placeholder="Password"> --}}
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password" autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                    </div>
                </div>
            </div>

            <div class="form-group text-center row m-t-20">
                <div class="col-12">
                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Register</button>
                </div>
            </div>

            <div class="form-group m-t-10 mb-0 row">
                <div class="col-12 m-t-20 text-center">
                    <a href="pages-login.html" class="text-muted">Already have account?</a>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection
