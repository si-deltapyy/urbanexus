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
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Forms</a></li>
    <li class="breadcrumb-item active" aria-current="page">Advanced Elements</li>
  </ol>
</nav>

<div class="row">
  <div class="col-lg grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Asset Buat Form</h4>
        <form id="signupForm">
          <div class="mb-3">
            <label for="Text" class="form-label">Text</label>
            <input id="Text" class="form-control" name="Text" type="text">
          </div>
          <div class="mb-3">
            <label for="ageSelect" class="form-label">Dropdown</label>
            <select class="form-select" name="age_select" id="ageSelect">
              <option selected disabled>Dropdown</option>
              <option>Opsi 1</option>
              <option>Opsi 2</option>
              <option>Opsi 3</option>
              <option>Opsi 4</option>
              <option>Opsi 5</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Radio</label>
            <div>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="radio" id="1">
                <label class="form-check-label" for="1">
                Opsi 1
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="radio" id="2">
                <label class="form-check-label" for="2">
                Opsi 2
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="radio" id="3">
                <label class="form-check-label" for="3">
                  Opsi 3
                </label>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Multi-Choice Radio</label>
            <div>
              <div class="form-check form-check-inline">
                <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline1">
                <label class="form-check-label" for="checkInline1">
                  Opsi 1
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline2">
                <label class="form-check-label" for="checkInline2">
                  Opsi 2
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline3">
                <label class="form-check-label" for="checkInline3">
                  Opsi 3
                </label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="input-group flatpickr" id="flatpickr-date">
                <input type="text" class="form-control" placeholder="Select date" data-input>
                <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
              </div>
          </div>

          <div class="mb-3">
            <div class="input-group flatpickr" id="flatpickr-time">
                <input type="text" class="form-control" placeholder="Select time" data-input>
                <span class="input-group-text input-group-addon" data-toggle><i data-feather="clock"></i></span>
              </div>
          </div>

          <div class="mb-3">
            <div class="card-body">
                <input type="file" id="myDropify"/>
              </div>
          </div>

          <div class="mb-3">
            <label for="text" class="form-label">Text Area</label>
            <textarea id="maxlength-textarea" class="form-control" id="defaultconfig-4" maxlength="100" rows="8" placeholder="This textarea has a limit of 100 chars."></textarea>
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
