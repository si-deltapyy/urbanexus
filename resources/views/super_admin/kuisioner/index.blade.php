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
                    <h4 class="card-title">Data Pertanyaan</h4>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th class="w-10px text-center">No</th>
                                    <th class="w-100px text-center">Kategori</th>
                                    <th class="w-100px text-center">Jenis Pertanyaan</th>
                                    <th class="w-100px text-center">Pertanyaan</th>
                                    <th class="w-100px text-center">Opsi Jawaban</th>
                                    <th class="w-20px text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!@empty($pertanyaans))
                                    @forelse ($pertanyaans as $kuisioner)
                                        <tr>
                                            <td class="align-top text-center"> {{ $loop->iteration }}</td>
                                            <td>
                                                {{ $kuisioner->kategori_pertanyaan }}
                                            </td>
                                            <td>
                                                {{ $kuisioner->jenis_pertanyaan }}
                                            </td>
                                            <td>
                                                {{ $kuisioner->pertanyaan }}
                                            </td>
                                            <td>
                                                @if ($kuisioner->opsi_jawaban->isNotEmpty())
                                                    <table class="table table-borderless">
                                                        <tbody>
                                                            @foreach ($kuisioner->opsi_jawaban as $opsi)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}.</td>
                                                                    <td>{{ $opsi->opsi_jawaban }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                <strong>Belum Ada Data</strong>
                                            </td>
                                        </tr>
                                    @endforelse
                                @endif
                            </tbody>
                        </table>

                    </div>
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
