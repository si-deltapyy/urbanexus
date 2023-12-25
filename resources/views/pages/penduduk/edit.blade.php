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
                    <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST"
                        class="form form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" id="nama"
                                    value="{{ $penduduk->nama }}"><br><br>

                                <label for="nik" class="mt-1">NIK</label>
                                <input class="form-control" type="text" name="nik" id="nik"
                                    value="{{ $penduduk->nik }}"><br><br>

                                <label for="tanggal_lahir" class="mt-1">Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir"
                                    value="{{ $penduduk->tanggal_lahir }}"><br><br>

                                <label for="tempat_lahir" class="mt-1">Tempat Lahir</label>
                                <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir"
                                    value="{{ $penduduk->tempat_lahir }}"><br><br>

                                <label for="jenis_kelamin" class="mt-1">Jenis Kelamin</label>
                                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="Laki-laki"
                                        {{ $penduduk->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>
                                        Laki-laki
                                    </option>
                                    <option value="Perempuan"
                                        {{ $penduduk->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>
                                        Perempuan
                                    </option>
                                </select><br><br>

                                <label for="no_rt">Nomor RT</label>
                                <input class="form-control mt-1" type="number" name="no_rt" id="no_rt"
                                    value="{{ $penduduk->no_rt }}"><br><br>

                                <label for="no_rw">Nomor RW</label>
                                <input class="form-control mt-1" type="number" name="no_rw" id="no_rw"
                                    value="{{ $penduduk->no_rw }}"><br><br>

                                <label for="status">Status</label>
                                <select class="form-select mt-1" name="status" id="status">
                                    <option value="Hidup" {{ $penduduk->status === 'Hidup' ? 'selected' : '' }}>Hidup
                                    </option>
                                    <option value="Meninggal" {{ $penduduk->status === 'Meninggal' ? 'selected' : '' }}>
                                        Meninggal
                                    </option>
                                </select><br><br>

                                <label for="no_kk">Nomor KK</label>
                                <input type="text" name="no_kk" id="no_kk" value="{{ $penduduk->no_kk }}"><br><br>

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
