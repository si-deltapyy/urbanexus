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
                                <h5 class="text-muted fw-normal mb-4">Daftarkan akun anda.</h5>

                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form forms-sample method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Name -->
                                    <!-- Email Address -->
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama</label>
                                            <input type="name" class="form-control" id="name" name="name" placeholder="Nama" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Alamat Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-select" id="role" name="role">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="password" required autocomplete="current-password" name="password">
                                    </div>
                                    <div class="mt-3">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" placeholder="password confirmation" required
                                                 autocomplete="current-password" name="password_confirmation">
                                    </div>


                                    <div class="flex items-center justify-end mt-4">
                                        <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Sudah mempunyai
                                            akun?<span class="text-primary"> Masuk sekarang</span></a>

                                        <x-button class="mt-4">
                                            {{ __('Register') }}
                                        </x-button>
                                    </div>
                                </form>

                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
