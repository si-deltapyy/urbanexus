

@extends('layout.form')
@section('content')
      <div class="row">

        <div class="form-holder">
          <div class="form-content">
            <div class="form-items">
              <h3>Urba<span>Nexus</span></h3>
              <p>Silahkan Ganti Password Anda.</p>
              <!-- Validation Errors -->
              <x-auth-validation-errors class="mb-4" :errors="$errors" />
              <form
                class="forms-sample"
                method="POST" action="{{ route('password.update') }}">
                @csrf

                 <!-- Password Reset Token -->
                 <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <input
                 placeholder="Email"
                  class="form-control"
                  id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus
                />

                <input

                  class="form-control"
                  id="password" class="block mt-1 w-full" type="password" name="password" required placeholder="Password"
                />

                <input
                placeholder="Confirm Password"
                  class="form-control"
                  id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
                <div class="form-button">
                  <button id="submit" type="submit" class="ibtn" style="margin-right: 5px; margin-bottom: 5px;">
                    {{ __('Reset Password') }}
                  </button>
                </div>
              </form>

            </div>
          </div>
        </div>
     @endsection
