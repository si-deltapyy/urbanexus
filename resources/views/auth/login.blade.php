@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pe-md-0">
            <div class="auth-side-wrapper" style="background-image: url({{ url('https://via.placeholder.com/219x452') }})">
            </div>
          </div>
          <div class="col-md-8 ps-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo d-block mb-2">Urba<span>Nexus</span></a>
              <h5 class="text-muted fw-normal mb-4">Selamat datang kembali! Masuk ke akun anda.</h5>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                  <label for="email" :value="__('Email')" class="form-label">email</label>
                  <input type="email" class="form-control" id="email" placeholder="email" name="email" :value="old('email')" required autofocus>
                </div>
                <div class="mb-3">
                  <label for="password" :value="__('Password')" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="password"
                  name="password"
                  required autocomplete="current-password">
                </div>
                <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="authCheck">
                  <label class="form-check-label" for="authCheck">
                    {{ __('Ingat Saya') }}
                  </label>
                </div>
                <div>
                    <x-button class="ml-3 btn btn-primary me-3 mb-2 mb-md-0">
                        {{ __('Log in') }}
                    </x-button>
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Lupa Password') }}
                    </a>
                @endif

                </div>
                <a href="{{ url('register') }}" class="d-block mt-3 text-muted">Belum mendaftar? <span class="text-primary">Silahkan untuk mendaftar terlebih dahulu</span></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
