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
            <li class="breadcrumb-item"><a href="#">Data RT</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update Data</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Data RT</h4>
                    <form class="form form-horizontal needs-validation" novalidate method="POST"
                        enctype="multipart/form-data" action="{{ route('rt.daftar_rt.store') }}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Nama RT</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control @error('nama_rt') is-invalid @enderror"
                                            id="nama_rt" name="nama_rt" value="{{ $user->name }}" disabled>
                                        @error('nama_rt')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Email RT</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ $user->email }}" disabled>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Nomor RW</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select class="form-select @error('rw_id') is-invalid @enderror" id="rw_id"
                                            autocomplete="off" name="rw_id" required>
                                            <option>--- Pilih ---</option>
                                            @foreach ($rws as $rw)
                                                <option value="{{ $rw->id }}">{{ $rw->id }}</option>
                                            @endforeach
                                        </select>
                                        @error('rw_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Nomor RT</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" class="form-control @error('id') is-invalid @enderror"
                                            id="id" name="id" required>
                                        @error('id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>No Telepon</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                            id="no_hp" name="no_hp" required>
                                        @error('no_hp')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Pekerjaan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror"
                                            id="pekerjaan" name="pekerjaan" required>
                                        @error('pekerjaan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Alamat Kantor</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text"
                                            class="form-control @error('alamat_kantor') is-invalid @enderror"
                                            id="alamat_kantor" name="alamat_kantor" required>
                                        @error('alamat_kantor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label>Alamat Rumah</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text"
                                            class="form-control @error('alamat_rumah') is-invalid @enderror"
                                            id="alamat_rumah" name="alamat_rumah" required>
                                        @error('alamat_rumah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
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
