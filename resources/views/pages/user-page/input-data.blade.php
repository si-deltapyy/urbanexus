@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/pickr/themes/classic.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
@endpush

@section('content')

<div class="row">
  <div class="col-lg grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Desa</h4>
        <form id="signupForm">
            <div class="mb-3">
                <label for="kecamatan" class="form-label">Pilih Kecamatan</label>
                <select class="form-select" name="kecamatan" id="kecamatan">
                    <option selected disabled>--Pilih--</option>
                    <option>Opsi 1</option>
                    <option>Opsi 2</option>
                    <option>Opsi 3</option>
                    <option>Opsi 4</option>
                    <option>Opsi 5</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="kode" class="form-label">Kode Desa/Kelurahan</label>
              <input id="kode" class="form-control" name="kode" type="text">
            </div>

            <div class="mb-3">
                <label for="Nama" class="form-label">Nama Desa/Kelurahan</label>
                <input id="Nama" class="form-control" name="Nama" type="text">
              </div>

              <div class="mb-3">
                <label for="Jumlah" class="form-label">Jumlah Penduduk Laki-Laki</label>
                <input id="jumlah" class="form-control" name="jumlah" type="number" placeholder="Laki-Laki">
              </div>

              <div class="mb-3">
                <label for="Jumlah" class="form-label">Jumlah Penduduk Perempuan</label>
                <input id="jumlah" class="form-control" name="jumlah" type="number" placeholder="Perempuan">
              </div>

          <div class="mb-3">
            <div class="form-check">
              <label class="form-check-label" for="termsCheck">
                Agree to <a href="#"> terms and conditions </a>
              </label>
              <input type="checkbox" class="form-check-input" name="terms_agree" id="termsCheck">
            </div>
          </div>
          <input class="btn btn-primary" type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/typeahead-js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/pickr/pickr.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/form-validation.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-maxlength.js') }}"></script>
  <script src="{{ asset('assets/js/inputmask.js') }}"></script>
  <script src="{{ asset('assets/js/select2.js') }}"></script>
  <script src="{{ asset('assets/js/typeahead.js') }}"></script>
  <script src="{{ asset('assets/js/tags-input.js') }}"></script>
  <script src="{{ asset('assets/js/dropzone.js') }}"></script>
  <script src="{{ asset('assets/js/dropify.js') }}"></script>
  <script src="{{ asset('assets/js/pickr.js') }}"></script>
  <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
@endpush
