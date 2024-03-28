
@extends('layout.form')
@section('content')

        <div class="form-holder">
          <div class="form-content">
            <div class="form-items">
              <h3>Daftarkan akun anda</h3>

              <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
              <form forms-sample method="POST" action="{{ route('register') }}">
                @csrf
                <input
                  type="name"
                  class="form-control"
                  id="name"
                  name="name"
                  placeholder="Nama"
                  value="{{ old('name') }}"
                />
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
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Harus berisi minimal satu angka dan satu huruf besar dan kecil, serta minimal 8 karakter atau lebih"
                />
                <input
                  type="password"
                  class="form-control"
                  id="password_confirmation"
                  placeholder="password confirmation"
                  required
                  autocomplete="current-password"
                  name="password_confirmation"
                  />
                  <select
                    class="form-select mb-3"
                    id="role"
                    name="role"
                    placeholder="Role"
                  >
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                  </select>
                <div class="form-button">
                    <button id="submit" type="submit" class="ibtn">{{ __('Register') }}</button>
                </div>
              </form>

              <div class="page-links">
                <a href="{{ route('login') }}" class="d-block mt-3 text-muted"
                  >Sudah mempunyai akun?<span class="text-primary">
                    Masuk sekarang</span
                  ></a
                >
              </div>
            </div>
          </div>
        </div>
     @endsection
