<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div class="container d-flex
         align-items-center
         justify-content-center
         min-vh-100">
    <div class="card">
        <div class="card-header text-center">
            <h1 class="h3 mb-3 fw-normal">{{ __('Login') }}</h1>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input class="form-control" type="email" placeholder="Email Address" @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    aria-label="Email Address">

                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>Email
                        Address</span>
                @enderror
                <input class="form-control mt-4" type="password" placeholder="Password"
                    @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required
                    autocomplete="password" autofocus aria-label="password Address">

                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>Email
                        Address</span>
                @enderror

                <div class="form-check mt-4">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <button type="submit" class="btn btn-primary mt-4">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

            </form>
        </div>
    </div>
</div>
</div>
