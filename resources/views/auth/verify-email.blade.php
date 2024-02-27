
@extends('layout.form')
@section('content')

        <div class="form-holder">
          <div class="form-content">
            <div class="form-items">
              <h3>Verification Email</h3>
              <p>
                Silahkan Cek Email untuk Verivikasi Email.
              </p>

              @if (session('status') == 'verification-link-sent')
              <div class="mb-4 font-medium text-sm text-success">
                {{ __('A new verification link has been sent to the email
                address you provided during registration.') }}
              </div>
              @endif

              <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div class="form-button full-width">
                  <x-button id="submit" type="submit" class="ibtn btn-forget">
                    {{ __('Resend Verification Email') }}
                  </x-button>
                </div>
              </form>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="form-button full-width">
                  <button id="submit" type="submit" class="ibtn btn-forget">
                    {{ __('Log Out') }}
                  </button>
                </div>
              </form>
            </div>
            <div class="form-sent">
              <div class="tick-holder">
                <div class="tick-icon"></div>
              </div>
              <h3>Password link sent</h3>
              <p>Please check your inbox iofrm@iofrmtemplate.io</p>
              <div class="info-holder">
                <span>Unsure if that email address was correct?</span>
                <a href="#">We can help</a>.
              </div>
            </div>
          </div>
        </div>
@endsection
