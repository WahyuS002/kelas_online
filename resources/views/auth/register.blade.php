@extends('layouts.auth')

@section('content')
<div class="sign_form">
    <h2>Welcome to Edututs+</h2>
    <p>Sign Up and Start Learning!</p>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="ui search focus">
            <div class="ui left icon input swdh11 swdh19">
                <input class="prompt srch_explore" type="text" name="name" value="{{ old('name') }}" id="id_fullname" required="" maxlength="64" placeholder="Nama Lengkap">
            </div>
        </div>
        <div class="ui search focus mt-15">
            <div class="ui left icon input swdh11 swdh19">
                <input class="prompt srch_explore" type="email" name="email" value="{{ old('email') }}" id="id_email" required="" maxlength="64" placeholder="Email">
            </div>
        </div>
        <div class="ui search focus mt-15">
            <div class="ui left icon input swdh11 swdh19">
                <input class="prompt srch_explore" type="password" name="password" value="" id="id_password" required="" maxlength="64" placeholder="Password">
            </div>
        </div>
        <div class="ui search focus mt-15">
            <div class="ui left icon input swdh11 swdh19">
                <input class="prompt srch_explore" type="password" name="password_confirmation" value="" id="password_confirmation" required="" maxlength="64" placeholder="Password Konfirmasi">
            </div>
        </div>
        <button class="login-btn" type="submit">Next</button>
    </form>
    <p class="sgntrm145">By signing up, you agree to our <a href="terms_of_use.html">Terms of Use</a> and <a href="terms_of_use.html">Privacy Policy</a>.</p>
    <p class="mb-0 mt-30">Already have an account? <a href="sign_in.html">Log In</a></p>
</div>
@endsection