@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/pickr/themes/classic.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
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
                    <div>
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.pertanyaan.create') }}">
                            <i class="bi bi-plus-lg"></i>
                            Tambah Pertanyaan
                        </a>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTableExample">
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
                                                                    <td class="text-center d-flex justify-content-center in-line align-top"
                                                                        data-kt-menu="true">
                                                                        <a href=""
                                                                            class="btn icon btn-sm btn-warning"
                                                                            data-bs-target="#edit{{ $opsi->id }}"
                                                                            data-id="{{ $opsi->id }}"
                                                                            data-bs-toggle="modal" title="Edit"><i
                                                                                class="bi bi-pencil-fill"></i>
                                                                        </a>
                                                                        <form
                                                                            action="{{ route('admin.opsi_jawaban.destroy', $opsi->id) }}"
                                                                            method="POST" class="d-inline">
                                                                            @method('delete')
                                                                            @csrf
                                                                            <button class="btn icon btn-sm btn-danger"
                                                                                title="Hapus"
                                                                                onclick="return confirm('Are you sure?')"><i
                                                                                    class="bi bi-trash3-fill"></i></button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @endif
                                            </td>
                                            <td class="text-center justify-content-center in-line align-top"
                                                data-kt-menu="true">
                                                <a class="btn icon btn-sm btn-primary"
                                                    data-bs-target="#tambah{{ $kuisioner->id }}"
                                                    data-id="{{ $kuisioner->id }}" data-bs-toggle="modal"
                                                    title="Detail kuisioner">
                                                    <i data-feather="file-text"></i>
                                                </a>
                                                {{-- <a class="btn icon btn-sm btn-primary"
                                                    href="{{ route('admin.pertanyaan.show', $kuisioner->id) }}"
                                                    title="Detail kuisioner">
                                                    <i class="bi bi-eye-fill"></i>
                                                </a> --}}
                                                <a class="btn icon btn-sm btn-success"
                                                    href="{{ route('admin.pertanyaan.edit', $kuisioner->id) }}"
                                                    title="Edit kuisioner">
                                                    <i data-feather="edit-3"></i>
                                                </a>
                                                <form action="{{ route('admin.pertanyaan.destroy', $kuisioner->id) }}"
                                                    method="POST" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn icon btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure?')" title="Hapus kuisioner">
                                                        <i data-feather="trash-2"></i>
                                                    </button>
                                                </form>
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
                        @if (!@empty($pertanyaans))
                            @foreach ($pertanyaans as $kuisioner)
                                <!--Basic Modal -->
                                <div class="modal fade text-left" id="tambah{{ $kuisioner->id }}" tabindex="-1"
                                    aria-labelledby="tambahLabel{{ $kuisioner->id }}" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Tambah Opsi Jawaban</h5>
                                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form form-vertical" novalidate method="POST"
                                                    enctype="multipart/form-data"
                                                    action="{{ route('admin.opsi_jawaban.index') }}">
                                                    @csrf
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <input type="hidden" id="pertanyaan_id"
                                                                class="form-control mt-1" name="pertanyaan_id"
                                                                value="{{ old('pertanyaan_id', $kuisioner->id) }}">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="pertanyaan">Pertanyaan</label>
                                                                    <input type="text" id="pertanyaan"
                                                                        class="form-control mt-1" name="pertanyaan"
                                                                        value="{{ $kuisioner->pertanyaan }}" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-2">
                                                                <div class="form-group">
                                                                    <label for="opsi_jawaban">Opsi Jawaban</label>
                                                                    <input type="text" id="opsi_jawaban"
                                                                        class="form-control mt-1 @error('opsi_jawaban') is-invalid @enderror"
                                                                        name="opsi_jawaban" placeholder="Opsi Jawaban"
                                                                        required>
                                                                    @error('opsi_jawaban')
                                                                        <div class="invalid-feedback">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-12 d-flex justify-content-end mt-4">
                                                                <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1">Submit</button>
                                                                <button type="reset"
                                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if (!@empty($opsiJawabans))
                            <!--Basic Modal -->
                            @foreach ($opsiJawabans as $opsi)
                                <div class="modal fade text-left" id="edit{{ $opsi->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="tambahLabel{{ $opsi->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Edit Opsi Jawaban</h5>
                                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form form-vertical" novalidate method="POST"
                                                    enctype="multipart/form-data"
                                                    action="{{ route('admin.opsi_jawaban.update', $opsi->id) }}">
                                                    @method('put')
                                                    @csrf
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <input type="hidden" id="pertanyaan_id"
                                                                class="form-control mt-1" name="pertanyaan_id"
                                                                value="{{ old('pertanyaan_id', $opsi->pertanyaan_id) }}">
                                                            <div class="col-12 mt-2">
                                                                <div class="form-group">
                                                                    <label for="opsi_jawaban">Opsi Jawaban</label>
                                                                    <input type="text" id="opsi_jawaban"
                                                                        class="form-control mt-1 @error('opsi_jawaban') is-invalid @enderror"
                                                                        name="opsi_jawaban"
                                                                        placeholder="Nama sub kategori"
                                                                        value="{{ old('opsi_jawaban', $opsi->opsi_jawaban) }}"
                                                                        required>
                                                                    @error('opsi_jawaban')
                                                                        <div class="invalid-feedback">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-12 d-flex justify-content-end mt-4">
                                                                <button type="submit"
                                                                    class="btn btn-primary me-1 mb-1">Submit</button>
                                                                <button type="reset"
                                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

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
