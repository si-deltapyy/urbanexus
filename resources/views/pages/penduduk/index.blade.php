aa{{-- <!DOCTYPE html>
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

    <h3>Data Penduduk</h3>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIK</th>
            <th>No KK</th>
            <th>No RT</th>
            <th>No RW</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach ($penduduk as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->nik }}</td>
            <td>{{ $p->tanggal_lahir }}</td>
            <td>{{ $p->tempat_lahir }}</td>
            <td>{{ $p->jenis_kelamin }}</td>
            <td>{{ $p->umur }}</td>
            <td>{{ $p->status }}</td>
            <td>
            <a href="{{ route('penduduk.edit', $p->id) }}">Edit</a>
            <form action="{{ route('penduduk.destroy', $p->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
        </tr>
        @endforeach
    </table>
    <div class="container">
        <h1>Statistik Umur Penduduk</h1>

        <ul>
            <li>1-5 Tahun (Balita): {{ $balita }}</li>
            <li>6-12 Tahun (Anak-anak): {{ $anak_anak }}</li>
            <li>13-20 Tahun (Remaja): {{ $remaja }}</li>
            <li>21-50 Tahun (Dewasa): {{ $dewasa }}</li>
            <li>> 50 Tahun (Lansia): {{ $lansia }}</li>
        </ul>
    </div>

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
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
    @endpus

    @section('content')
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Data Penduduk</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            @role('RW')
                                <a class="btn btn-primary btn-md-12 mb-3" href="{{ route('rw.penduduk.create') }}">
                                @endrole
                                @role('admin')
                                    <a class="btn btn-primary btn-md-12 mb-3" href="{{ route('admin.penduduk.create') }}">
                                    @endrole
                                    <i class="bi bi-plus-lg"></i>
                                    Tambah Penduduk
                                </a>
                                {{-- <a href="{{ route('admin.sebelum_bencana_pdf') }}" class="btn btn-primary btn-md-12 mb-3">Unduh
                            PDF</a> --}}
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTableExample">
                                <thead>
                                    <tr class="text-wrap" style="width: 6rem;">
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <!-- <th>No KK</th> -->
                                        <th>RT</th>
                                        <th>RW</th>
                                        {{-- <th>Tanggal Lahir</th>
                                        <th>Tempat Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                        <th>Status</th>
                                        <th>Golongan Darah</th>
                                        <th>Status Perkawinan</th>
                                        <th>Agama</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Pekerjaan</th>
                                        <th>Alamat</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $nomorIterasi = 1 @endphp
                                    @foreach ($penduduk as $p)
                                        <tr>
                                            <td class="text-wrap">{{ $p->nama }}</td>
                                            <td class="text-wrap">{{ $p->nik }}</td>
                                            <!-- <td class="text-wrap">{{ $p->no_kk }}</td> -->
                                            <td class="text-wrap">{{ $p->no_rt }}</td>
                                            <td class="text-wrap">{{ $p->no_rw }}</td>
                                            {{-- <td class="text-wrap">{{ $p->tanggal_lahir }}</td>
                                            <td class="text-wrap">{{ $p->tempat_lahir }}</td>
                                            <td class="text-wrap">{{ $p->jenis_kelamin }}</td>
                                            <td class="text-wrap">{{ $p->umur }}</td>
                                            <td class="text-wrap">{{ $p->status }}</td>
                                             <td class="text-wrap">{{ $p->gol_darah }}</td>
                                            <td class="text-wrap">{{ $p->status_kawin }}</td>
                                            <td class="text-wrap">{{ $p->agama }}</td>
                                            <td class="text-wrap">{{ $p->pendidikan_terakhir }}</td>
                                            <td class="text-wrap">{{ $p->pekerjaan }}</td>
                                            <td class="text-wrap">{{ $p->alamat }}</td> --}}
                                            <td style="display: flex; max-height: 34px; justify-content: space-between;">
                                                @role('RW')
                                                    <a href="{{ route('rw.penduduk.show', $p->id) }}"
                                                        class="btn icon btn-sm btn-primary"><i class="bi bi-eye"></i></a>
                                                    <a href="{{ route('rw.penduduk.edit', $p->id) }}"
                                                        class="btn icon btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                                    <form style="width: 40%" action="{{ route('rw.penduduk.destroy', $p->id) }}"
                                                        method="POST">
                                                    @endrole
                                                    @role('admin')
                                                        <a href="{{ route('admin.penduduk.show', $p->id) }}"
                                                            class="btn icon btn-sm btn-primary"><i class="bi bi-eye"></i></a>
                                                        <a href="{{ route('admin.penduduk.edit', $p->id) }}"
                                                            class="btn icon btn-sm btn-success"><i
                                                                class="bi bi-pencil-square"></i></a>
                                                        <form action="{{ route('admin.penduduk.destroy', $p->id) }}"
                                                            method="POST">
                                                        @endrole
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn icon btn-sm btn-danger" title="Hapus"
                                                            onclick="return confirm('Are you sure?')">
                                                            <i class="bi bi-trash3-fill"></i>
                                                            hapus
                                                        </button>
                                                    </form>
                                            </td>
                                        </tr>
                                        @php $nomorIterasi++ @endphp
                                    @endforeach
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
        <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
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
        <script src="{{ asset('assets/js/data-table.js') }}"></script>
    @endpush
