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
              <h5 class="text-muted fw-normal mb-4">Daftarkan akun anda.</h5>
              <form class="forms-sample">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" autocomplete="nama" placeholder="Nama">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Alamat Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="mb-3">
                  <label for="no_telp" class="form-label">Nomor Telepon</label>
                  <input type="tel" class="form-control" id="no_telp" placeholder="Nomor Telepon">
                </div>
                <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="authCheck">
                  <label class="form-check-label" for="authCheck">
                    Ingat Saya
                  </label>
                </div>
                <div>
                  <a href="{{ url('/') }}" class="btn btn-primary me-2 mb-2 mb-md-0">Daftar</a>
                </div>
                <a href="{{ url('/auth/login') }}" class="d-block mt-3 text-muted">Sudah mempunyai akun?<span class="text-primary"> Masuk sekarang</span></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
