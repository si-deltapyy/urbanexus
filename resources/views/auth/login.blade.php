
@extends('layout.form')
@section('content')
      <div class="row">

        <div class="form-holder">
          <div class="form-content">
            <div class="form-items">
              <h3>Urba<span>Nexus</span></h3>
              <p>Selamat datang kembali! Masuk ke akun anda.</p>
              <!-- Session Status -->
              <x-auth-session-status class="mb-4" :status="session('status')" />

              <!-- Validation Errors -->
              <x-auth-validation-errors class="mb-4" :errors="$errors" />
              <form
                class="forms-sample"
                method="POST"
                action="{{ route('login') }}"
              >
                @csrf
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Email"
                  value="{{ old('email') }}"
                />

                <input
                  type="password"
                  class="form-control"
                  id="password"
                  placeholder="password"
                  required
                  autocomplete="current-password"
                  name="password"
                />
                <div class="form-button">
                  <button id="submit" type="submit" class="ibtn" style="margin-right: 5px; margin-bottom: 5px;">
                    {{ __('Log in') }}
                  </button>
                  @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" style="text-decoration: none;">
                    {{ __('Forgot your password?') }}
                  </a>
                  @endif
                </div>
              </form>
              <div class="page-links">
                <!-- <a href="{{ route('register') }}">Register new account</a> -->
                <a href="{{ route('ds') }}">Beranda</a>
              </div>
            </div>
          </div>
        </div>
     @endsection
