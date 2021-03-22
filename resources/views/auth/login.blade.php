@extends('layouts.auth')

@section('content')
<div class="sign_form">
    <h2>Welcome Back</h2>
    <p>Log In to Your Edututs+ Account!</p>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="ui search focus mt-15">
            <div class="ui left icon input swdh95">
                <input class="prompt srch_explore py-4" type="email" name="email" value="{{ old('email') }}" id="id_email" required="" maxlength="64" placeholder="Email Address">
                <i class="uil uil-envelope icon icon2"></i>
                @error('email')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="ui search focus mt-15">
            <div class="ui left icon input swdh95">
                <input class="prompt srch_explore py-4" type="password" name="password" value="" id="id_password" required="" maxlength="64" placeholder="Password">
                <i class="uil uil-key-skeleton-alt icon icon2"></i>
            </div>
        </div>
        <div class="ui form mt-30 checkbox_sign">
            <div class="inline field">
                <div class="ui checkbox mncheck">
                    <input type="checkbox" tabindex="0" class="hidden">
                    <label>Remember Me</label>
                </div>
            </div>
        </div>
        <button class="login-btn" type="submit">Sign In</button>
    </form>
    <p class="sgntrm145">Or <a href="forgot_password.html">Forgot Password</a>.</p>
    <p class="mb-0 mt-30 hvsng145">Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
</div>
@endsection