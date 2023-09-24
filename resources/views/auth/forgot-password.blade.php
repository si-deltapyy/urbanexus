
@extends('layout.form')
@section('content')

        <div class="form-holder">
          <div class="form-content">
            <div class="form-items">
              <h3>Password Reset</h3>
              <p>
                To reset your password, enter the email address you use to sign
                in to UrbaNexus
              </p>
              <!-- Session Status -->
              <x-auth-session-status class="mb-4" :status="session('status')" />

              <!-- Validation Errors -->
              <x-auth-validation-errors class="mb-4" :errors="$errors" />

              <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <x-input
                  id="email"
                  class="form-control"
                  type="email"
                  name="email"
                  :value="old('email')"
                  required
                  autofocus
                />
                <div class="form-button full-width">
                  <button id="submit" type="submit" class="ibtn btn-forget">
                    Send Reset Link
                  </button>
                </div>
              </form>
            </div>
            <div class="form-sent">
              <div class="tick-holder">
                <div class="tick-icon"></div>
              </div>
              <h3>Password link sent</h3>
              <p>Please check your inbox UrbaNexus@gmail.com</p>
              <div class="info-holder">
                <span>Unsure if that email address was correct?</span>
                <a href="#">We can help</a>.
              </div>
            </div>
          </div>
        </div>

@endsection
