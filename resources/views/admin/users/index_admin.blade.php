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
            <li class="breadcrumb-item"><a href="#">Data RW</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="rw-tab" data-bs-toggle="tab" data-bs-target="#rw"
                                type="button" role="tab" aria-controls="rw" aria-selected="false">RW</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rt-tab" data-bs-toggle="tab" data-bs-target="#rt" type="button"
                                role="tab" aria-controls="rt" aria-selected="false">RT</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="rw" role="tabpanel" aria-labelledby="rw-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title d-flex justify-content-center">Jumlah RW</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table">
                                            <thead>
                                                <tr>
                                                    <th class="w-10px text-center">No</th>
                                                    <th class="w-10px text-center">RW</th>
                                                    <th class="w-10px text-center">Jumlah RT</th>
                                                    <th class="w-100px text-center">Nama</th>
                                                    <th class="w-100px text-center">Email</th>
                                                    <th class="w-100px text-center">No Telepon</th>
                                                    <th class="w-100px text-center">Pekerjaan</th>
                                                    <th class="w-100px text-center">Alamat Kantor</th>
                                                    <th class="w-100px text-center">Alamat Rumah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($rws as $rw)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}.</td>
                                                        <td>RW {{ $rw->id }}</td>
                                                        <td>{{ $rw->rt->count() }}</td>
                                                        <td>
                                                                {{ $rw->nama_rw }}
                                                        </td>
                                                        <td>
                                                                {{ $rw->email }}
                                                        </td>
                                                        <td>
                                                                {{ $rw->no_hp }}
                                                        </td>
                                                        <td>
                                                                {{ $rw->pekerjaan }}
                                                        </td>
                                                        <td>
                                                                {{ $rw->alamat_kantor }}
                                                        </td>
                                                        <td>
                                                                {{ $rw->alamat_rumah }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="rt" role="tabpanel" aria-labelledby="rt-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title d-flex justify-content-center">Jumlah RT</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table">
                                            <thead>
                                                <tr>
                                                    <th class="w-10px text-center">No</th>
                                                    <th class="w-10px text-center">RW</th>
                                                    <th class="w-10px text-center">RT</th>
                                                    <th class="w-100px text-center">Nama</th>
                                                    <th class="w-100px text-center">Email</th>
                                                    <th class="w-100px text-center">No Telepon</th>
                                                    <th class="w-100px text-center">Pekerjaan</th>
                                                    <th class="w-100px text-center">Alamat Kantor</th>
                                                    <th class="w-100px text-center">Alamat Rumah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($rts as $rt)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}.</td>
                                                        <td>RW {{ $rt->rw_id }}</td>
                                                        <td>RT {{ $rt->id }}</td>
                                                        <td>
                                                                {{ $rt->nama_rt }}
                                                        </td>
                                                        <td>
                                                                {{ $rt->email }}
                                                        </td>
                                                        <td>
                                                                {{ $rw->no_hp }}
                                                        </td>
                                                        <td>
                                                                {{ $rt->pekerjaan }}
                                                        </td>
                                                        <td>
                                                                {{ $rt->alamat_kantor }}
                                                        </td>
                                                        <td>
                                                                {{ $rt->alamat_rumah }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
