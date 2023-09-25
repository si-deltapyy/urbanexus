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
            <li class="breadcrumb-item"><a href="#">Kuisioner</a></li>
            <li class="breadcrumb-item active" aria-current="page">Isi Kuisioner</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Isi Kuisioner</h4>
                    <form class="form form-horizontal needs-validation" novalidate method="POST"
                        enctype="multipart/form-data" action="{{ route('rt.kuisioner_sb.store') }}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                @foreach ($pertanyaans as $index => $pertanyaan)
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label>{{ $pertanyaan->pertanyaan }}</label>
                                            
                                        </div>
                                        <div class="col-md-8 form-group">
                                            @if ($pertanyaan->jenis_pertanyaan == 'Text')
                                            <input type="hidden" class="form-control mt-1" name="pertanyaan_id[]"
                                                value="{{ $pertanyaan->id }}">
                                                <input type="text"
                                                    class="form-control @error("jawaban.$index") is-invalid @enderror"
                                                    name="jawaban[]" required>
                                            @elseif ($pertanyaan->jenis_pertanyaan == 'Select')
                                            <input type="hidden" class="form-control mt-1" name="pertanyaan_id[]"
                                                value="{{ $pertanyaan->id }}">
                                                <select class="form-select @error("jawaban.$index") is-invalid @enderror"
                                                    autocomplete="off" name="jawaban[]" required>
                                                    <option>--- Pilih ---</option>
                                                    @foreach ($pertanyaan->opsi_jawaban as $opsi)
                                                        <option value="{{ $opsi->id }}">{{ $opsi->opsi_jawaban }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            @elseif ($pertanyaan->jenis_pertanyaan == 'Datetime')
                                            <input type="hidden" class="form-control mt-1" name="pertanyaan_id[]"
                                                value="{{ $pertanyaan->id }}">
                                                <input class="form-control" data-inputmask="'alias': 'datetime'"
                                                    data-inputmask-inputformat="dd/mm/yyyy HH:MM:ss" name="jawaban[]"
                                                    required />
                                            @elseif ($pertanyaan->jenis_pertanyaan == 'Image')
                                            <input type="hidden" class="form-control mt-1" name="pertanyaan_id[]"
                                                value="{{ $pertanyaan->id }}">
                                                <input type="file"
                                                    class="form-control mt-2 @error('jawaban.' . $index) is-invalid @enderror"
                                                    name="jawaban[]" required>
                                            @elseif ($pertanyaan->jenis_pertanyaan == 'Radio')
                                            <input type="hidden" class="form-control mt-1" name="pertanyaan_id[]"
                                                value="{{ $pertanyaan->id }}">
                                                <div>
                                                    @foreach ($pertanyaan->opsi_jawaban as $opsi)
                                                        <div class="form-check form-check-inline">
                                                            <input type="radio"
                                                                class="form-check-input @error("jawaban.$index") is-invalid @enderror"
                                                                name="jawaban[]" value="{{ $opsi->id }}">
                                                            <label class="form-check-label" for="1">
                                                                {{ $opsi->opsi_jawaban }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                            @error("jawaban.$index")
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach
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
