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
            <li class="breadcrumb-item"><a href="#">Kuisioner</a></li>
            <li class="breadcrumb-item active" aria-current="page">Isi Kuisioner</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Isi Kuisioner</h4>
                    <form action="{{ route('penduduk.store') }}" method="post" class="form form-horizontal">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" id="nama" required><br><br>

                                <label for="nik" class="mt-1">NIK</label>
                                <input class="form-control" type="text" name="nik" id="nik" required><br><br>

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

                                <label for="no_rt">Nomor RT</label>
                                <input class="form-control mt-1" type="number" name="no_rt" id="no_rt"
                                    required><br><br>

                                <label for="no_rw">Nomor RW</label>
                                <input class="form-control mt-1" type="number" name="no_rw" id="no_rw"
                                    required><br><br>

                                <label for="status">Status</label>
                                <select class="form-select mt-1" name="status" id="status" required>
                                    <option value="Hidup">Hidup
                                    </option>
                                    <option value="Meninggal">
                                        Meninggal
                                    </option>
                                </select><br><br>

                                <label for="no_kk">Nomor KK</label>
                                <input type="text" name="no_kk" id="no_kk" required><br><br>

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
