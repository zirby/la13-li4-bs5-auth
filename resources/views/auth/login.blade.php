@extends('layouts.auth')

@section('content')
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
</svg>
    <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header text-center">
            <h1 class="h3 mb-3 fw-normal">{{ 'Login' }}</h1>
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
                        {{ 'Remember Me' }}
                    </label>
                </div>
                <div class="d-grid ">

                    <button type="submit" class="btn btn-warning mt-4">
                        {{ 'Login' }}
                    </button>
                </div>

                @if (Route::has('password.request'))
                    <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                        {{ 'Forgot Your Password?' }}
                    </a>
                @endif

            </form>
        </div>
    </div>
@endsection
