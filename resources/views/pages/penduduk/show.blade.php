@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/pickr/themes/classic.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
@endpush

<style scoped>
    @media (min-width : 710px) {

        .desktop-behavior {
            display: flex;
            flex-direction: column;
            padding: 0px;
        }

        .child-1 {
            width: 30% !important;
        }

        .child-2 {
            width: 40% !important;
        }

        .child-3 {
            width: 60% !important;
        }

        .child-4 {
            width: 30% !important;
        }

        .child-5 {
            width: 25% !important;
        }

        .child-6 {
            width: 50% !important;
        }
    }
</style>

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
                    <h4 class="card-title">Data Diri <span class="text-muted">{{ $penduduk->nama }}</span> || Kelurahan Ratu
                        Jaya</h4>
                    <form class="form form-horizontal needs-validation" novalidate method="POST"
                        enctype="multipart/form-data" action="{">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="child-2 row mt-3 desktop-behavior">
                                    <div class="col-md-4">
                                        <label>Nama </label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text" class="form-control @error('nama_rw') is-invalid @enderror"
                                            id="nama_rw" name="nama_rw" value="{{ $penduduk->nama }}" disabled required>
                                        @error('nama_rw')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="child-1 row mt-3 desktop-behavior">
                                    <div class="col-md-4">
                                        <label>NIK </label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ $penduduk->nik }}" disabled required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3 desktop-behavior child-1">
                                    <div class="col-md-4" style="width:90%">
                                        <label>Tempat Lahir</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text"
                                            class="form-control @error('alamat_kantor') is-invalid @enderror"
                                            id="alamat_kantor" name="alamat_kantor" value="{{ $penduduk->tempat_lahir }}"
                                            disabled required>
                                        @error('alamat_kantor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3 desktop-behavior child-5">
                                    <div class="col-md-4" style="width:90%">
                                        <label>No RT</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                            id="no_hp" name="no_hp" value="{{ $penduduk->no_rt }}" disabled required>
                                        @error('no_hp')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3 desktop-behavior child-5">
                                    <div class="col-md-4" style="width:90%">
                                        <label>No RW</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror"
                                            id="pekerjaan" name="pekerjaan" value="{{ $penduduk->no_rw }}" disabled
                                            required>
                                        @error('pekerjaan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3 desktop-behavior child-5">
                                    <div class="col-md-4" style="width:90%">
                                        <label>Status</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text"
                                            class="form-control @error('alamat_kantor') is-invalid @enderror"
                                            id="alamat_kantor" name="alamat_kantor" value="{{ $penduduk->status }}"
                                            disabled required>
                                        @error('alamat_kantor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3 desktop-behavior child-5">
                                    <div class="col-md-4" style="width:90%">
                                        <label>Status Kependudukan</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text"
                                            class="form-control @error('alamat_rumah') is-invalid @enderror"
                                            id="alamat_rumah" name="alamat_rumah"
                                            value="{{ $penduduk->status_kependudukan }}" disabled required>
                                        @error('alamat_rumah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3 desktop-behavior child-5">
                                    <div class="col-md-4" style="width:90%">
                                        <label>Kebutuhan Khusus</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text"
                                            class="form-control @error('alamat_kantor') is-invalid @enderror"
                                            id="alamat_kantor" name="alamat_kantor" value="{{ $penduduk->disability }}"
                                            disabled required>
                                        @error('alamat_kantor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3 desktop-behavior child-5">
                                    <div class="col-md-4" style="width:90%">
                                        <label>Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text"
                                            class="form-control @error('alamat_kantor') is-invalid @enderror"
                                            id="alamat_kantor" name="alamat_kantor"
                                            value="{{ $penduduk->tanggal_lahir }}" disabled required>
                                        @error('alamat_kantor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3 desktop-behavior child-5">
                                    <div class="col-md-4" style="width:90%">
                                        <label>Golongan Darah</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text"
                                            class="form-control @error('alamat_kantor') is-invalid @enderror"
                                            id="alamat_kantor" name="alamat_kantor" value="{{ $penduduk->gol_darah }}"
                                            disabled required>
                                        @error('alamat_kantor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3 desktop-behavior child-5">
                                    <div class="col-md-4" style="width:90%">
                                        <label>Umur</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text"
                                            class="form-control @error('alamat_kantor') is-invalid @enderror"
                                            id="alamat_kantor" name="alamat_kantor" value="{{ $penduduk->umur }}"
                                            disabled required>
                                        @error('alamat_kantor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3 desktop-behavior child-5">
                                    <div class="col-md-4" style="width:90%">
                                        <label>Agama</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text"
                                            class="form-control @error('alamat_kantor') is-invalid @enderror"
                                            id="alamat_kantor" name="alamat_kantor" value="{{ $penduduk->agama }}"
                                            disabled required>
                                        @error('alamat_kantor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3 desktop-behavior child-5">
                                    <div class="col-md-4" style="width:90%">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text"
                                            class="form-control @error('alamat_kantor') is-invalid @enderror"
                                            id="alamat_kantor" name="alamat_kantor"
                                            value="{{ $penduduk->jenis_kelamin }}" disabled required>
                                        @error('alamat_kantor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3 desktop-behavior child-5">
                                    <div class="col-md-4" style="width:90%">
                                        <label>Pendidika Terakhir</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text"
                                            class="form-control @error('alamat_kantor') is-invalid @enderror"
                                            id="alamat_kantor" name="alamat_kantor"
                                            value="{{ $penduduk->pendidikan_terakhir }}" disabled required>
                                        @error('alamat_kantor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3 desktop-behavior child-5">
                                    <div class="col-md-4" style="width:90%">
                                        <label>Pekerjaan</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text"
                                            class="form-control @error('alamat_kantor') is-invalid @enderror"
                                            id="alamat_kantor" name="alamat_kantor" value="{{ $penduduk->pekerjaan }}"
                                            disabled required>
                                        @error('alamat_kantor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3 desktop-behavior">
                                    <div class="col-md-4" style="width:95%">
                                        <label>alamat</label>
                                    </div>
                                    <div class="col-md-8 form-group" style="width:90%">
                                        <input type="text"
                                            class="form-control @error('alamat_kantor') is-invalid @enderror"
                                            id="alamat_kantor" name="alamat_kantor" value="{{ $penduduk->alamat }}"
                                            disabled required>
                                        @error('alamat_kantor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
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
