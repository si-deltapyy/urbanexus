@extends('layout.master2')

@section('content')
    <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-xl-6 mx-auto">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 pe-md-0">
                            <div class="auth-side-wrapper"
                                style="background-image: url({{ url('https://via.placeholder.com/219x452') }})">

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

                                <form class="forms-sample" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Alamat Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="password" required autocomplete="current-password" name="password">
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox"
                                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                        <div class="flex items-center justify-end mt-4">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                    <x-button class="mt-3">
                                        {{ __('Log in') }}
                                    </x-button>
                                    <a href="{{ route('register') }}" class="d-block mt-3 text-muted">Belum mendaftar? <span class="text-primary">Silahkan untuk mendaftar terlebih dahulu</span></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
