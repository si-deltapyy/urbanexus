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
                    <form action="{{ route('admin.penduduk.update', $penduduk->id) }}" method="POST"
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

                                <label for="no_kk" class="mt-1">Nomor KK</label>
                                <input class="form-control" type="text" name="no_kk" id="no_kk" value="{{ $penduduk->no_kk }}"><br><br>

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

                                <label for="gol_darah" class="mt-1">Golongan Darah</label>
                                <select class="form-select" name="gol_darah" id="gol_darah">
                                    <option value="AB"
                                        {{ $penduduk->gol_darah === 'AB' ? 'selected' : '' }}>
                                        AB
                                    </option>
                                    <option value="A"
                                        {{ $penduduk->gol_darah === 'A' ? 'selected' : '' }}>
                                        A
                                    </option>
                                    <option value="B"
                                        {{ $penduduk->gol_darah === 'B' ? 'selected' : '' }}>
                                        B
                                    </option>
                                    <option value="O"
                                        {{ $penduduk->gol_darah === 'O' ? 'selected' : '' }}>
                                        O
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

                                <label for="status_kawin">Status Perkawinan</label>
                                <select class="form-select mt-1" name="status_kawin" id="status_kawin">
                                    <option value="Kawin" {{ $penduduk->status_kawin === 'Kawin' ? 'selected' : '' }}>
                                        Kawin
                                    </option>
                                    <option value="Belum Kawin" {{ $penduduk->status_kawin === 'Belum Kawin' ? 'selected' : '' }}>
                                        Belum Kawin
                                    </option>
                                    <option value="Cerai Hidup" {{ $penduduk->status_kawin === 'Cerai Hidup' ? 'selected' : '' }}>
                                        Cerai Hidup
                                    </option>
                                    <option value="Cerai Mati" {{ $penduduk->status_kawin === 'Cerai Mati' ? 'selected' : '' }}>
                                        Cerai Mati
                                    </option>
                                </select><br><br>

                                <label for="agama">Agama</label>
                                <select class="form-select mt-1" name="agama" id="agama">
                                    <option value="Islam" {{ $penduduk->agama === 'Islam' ? 'selected' : '' }}>
                                        Islam
                                    </option>
                                    <option value="Kristen" {{ $penduduk->agama === 'Kristen' ? 'selected' : '' }}>
                                        Kristen
                                    </option>
                                    <option value="Katolik" {{ $penduduk->agama === 'Katolik' ? 'selected' : '' }}>
                                        Katolik
                                    </option>
                                    <option value="Hindu" {{ $penduduk->agama === 'Hindu' ? 'selected' : '' }}>
                                        Hindu
                                    </option>
                                    <option value="Budha" {{ $penduduk->agama === 'Budha' ? 'selected' : '' }}>
                                        Budha
                                    </option>
                                    <option value="Konghucu" {{ $penduduk->agama === 'Konghucu' ? 'selected' : '' }}>
                                        Konghucu
                                    </option>
                                </select><br><br>

                                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                <select class="form-select mt-1" name="pendidikan_terakhir" id="pendidikan_terakhir">
                                    <option value="Tidak Sekolah" {{ $penduduk->pendidikan_terakhir === 'Tidak Sekolah' ? 'selected' : '' }}>
                                        Tidak Sekolah
                                    </option>
                                    <option value="SD/sederajat" {{ $penduduk->pendidikan_terakhir === 'SD/sederajat' ? 'selected' : '' }}>
                                        SD/sederajat
                                    </option>
                                    <option value="SMP/sederajat" {{ $penduduk->pendidikan_terakhir === 'SMP/sederajat' ? 'selected' : '' }}>
                                        SMP/sederajat
                                    </option>
                                    <option value="SMA/sederajat" {{ $penduduk->pendidikan_terakhir === 'SMA/sederajat' ? 'selected' : '' }}>
                                        SMA/sederajat
                                    </option>
                                    <option value="Diploma" {{ $penduduk->pendidikan_terakhir === 'Diploma' ? 'selected' : '' }}>
                                        Diploma
                                    </option>
                                    <option value="Sarjana" {{ $penduduk->pendidikan_terakhir === 'Sarjana' ? 'selected' : '' }}>
                                        Sarjana
                                    </option>
                                </select><br><br>

                                <label for="pekerjaan" class="mt-1">Pekerjaan</label>
                                <input class="form-control" type="text" name="pekerjaan" id="pekerjaan" value="{{ $penduduk->pekerjaan }}"><br><br>

                                <label for="alamat" class="mt-1">Alamat</label>
                                <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $penduduk->alamat }}"><br><br>

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
