{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penduduk</title>
</head>

<body>

    <h2>Data Penduduk</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <h3>Tambah Penduduk</h3>
    <form action="{{ route('penduduk.store') }}" method="post">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="nik">NIK:</label>
        <input type="text" name="nik" required>
        <br>
        <label for="no_kk">No KK:</label>
        <input type="text" name="no_kk" required>
        <br>
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required>
        <br>
        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" required>
        <br>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        <label for="status">Status:</label>
        <select name="status" required>
            <option value="Hidup">Hidup</option>
            <option value="Meninggal">Meninggal</option>
        </select>
        <br>
        <label for="no_rt">RT:</label>
        <input type="number" name="no_rt" required>
        <br>
        <label for="no_rw">RW:</label>
        <input type="number" name="no_rw" required>
        <br>
        <button type="submit">Tambah Penduduk</button>
    </form>
</body>

</html> --}}



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
            <li class="breadcrumb-item"><a href="{{ route('admin.penduduk.index') }}">Data Penduduk</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Penduduk</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Penduduk</h4>
                    <form action="{{ route('admin.penduduk.store') }}" method="post" class="form form-horizontal">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" id="nama" required><br><br>
                                
                                <label for="nik" class="mt-1">NIK</label>
                                <input class="form-control" type="text" name="nik" id="nik" required><br><br>

                                <label for="no_kk" class="mt-1">Nomor KK</label>
                                <input class="form-control" type="text" name="no_kk" id="no_kk" required><br><br>
                                
                                <label for="tanggal_lahir" class="mt-1">Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir"
                                required><br><br>

                                <label for="tempat_lahir" class="mt-1">Tempat Lahir</label>
                                <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir"
                                    required><br><br>

                                <label for="jenis_kelamin" class="mt-1">Jenis Kelamin</label>
                                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                                    <option value="Laki-laki">
                                        Laki-laki
                                    </option>
                                    <option value="Perempuan">
                                        Perempuan
                                    </option>
                                </select><br><br>
                                
                                <label for="gol_darah" class="mt-1">Golongan Darah</label>
                                <select class="form-select" name="gol_darah" id="gol_darah" required>
                                    <option value="A">
                                        A
                                    </option>
                                    <option value="AB">
                                        AB
                                    </option>
                                    <option value="B">
                                        B
                                    </option>
                                    <option value="O">
                                        O
                                    </option>
                                </select><br><br>
                                
                                <label for="status_kawin" class="mt-1">Status Perkawinan</label>
                                <select class="form-select" name="status_kawin" id="status_kawin" required>
                                    <option value="Kawin">
                                        Kawin
                                    </option>
                                    <option value="Belum Kawin">
                                        Belum Kawin
                                    </option>
                                    <option value="Cerai Hidup">
                                        Cerai Hidup
                                    </option>
                                    <option value="Cerai Mati">
                                        Cerai Mati
                                    </option>
                                </select><br><br>
                                
                                <label for="status">Status</label>
                                <select class="form-select mt-1" name="status" id="status" required>
                                    <option value="Hidup">Hidup
                                    </option>
                                    <option value="Meninggal">
                                        Meninggal
                                    </option>
                                </select><br><br>
                                
                                <label for="agama">Agama</label>
                                <select class="form-select mt-1" name="agama" id="agama" required>
                                    <option value="Islam">
                                        Islam
                                    </option>
                                    <option value="Kristen">
                                        Kristen
                                    </option>
                                    <option value="Budha">
                                        Budha
                                    </option>
                                    <option value="Katolik">
                                        Katolik
                                    </option>
                                    <option value="Hindu">
                                        Hindu
                                    </option>
                                    <option value="Konghucu">
                                        Konghucu
                                    </option>
                                </select><br><br>
                                
                                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                <select class="form-select mt-1" name="pendidikan_terakhir" id="pendidikan_terakhir" required>
                                    <option value="Tidak Sekolah">
                                        Tidak Sekolah
                                    </option>
                                    <option value="SD/Sederajat">
                                        SD/Sederajat
                                    </option>
                                    <option value="SMP/Sederajat">
                                        SMP/Sederajat
                                    </option>
                                    <option value="SMA/Sederajat">
                                        SMA/Sederajat
                                    </option>
                                    <option value="Diploma">
                                        Diploma
                                    </option>
                                    <option value="Sarjana">
                                        Sarjana
                                    </option>
                                </select><br><br>
                                
                                <label class="mt-1" for="pekerjaan">Pekerjaan</label>
                                <input class="form-control" type="text" name="pekerjaan" id="pekerjaan" required><br><br>
                                
                                <label class="mt-1" for="alamat">Alamat</label>
                                <input class="form-control" type="text" name="alamat" id="alamat" required><br><br>

                                <label for="no_rt">Nomor RT</label>
                                <input class="form-control mt-1" type="number" name="no_rt" id="no_rt" min="1"
                                    required><br><br>

                                <label for="no_rw">Nomor RW</label>
                                <input class="form-control mt-1" type="number" name="no_rw" id="no_rw" min="1"
                                    required><br><br>
                                
                                <div class="col-sm-12 d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Tambah Penduduk</button>
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
