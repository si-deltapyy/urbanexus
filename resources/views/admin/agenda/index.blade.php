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
                <li class="breadcrumb-item active" aria-current="page">Data Agenda</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-primary btn-md-12 mb-3" href="{{ route('admin.agenda.create') }}">
                                <i class="bi bi-plus-lg"></i>
                                Tambah Agenda
                            </a>
                            {{-- <a href="{{ route('admin.sebelum_bencana_pdf') }}" class="btn btn-primary btn-md-12 mb-3">Unduh
                            PDF</a> --}}
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTableExample">
                                <thead>
                                    <tr class="text-wrap" style="width: 6rem;">
                                        <th>Name</th>
                                        <th>Place</th>
                                        <th>Tanggal</th>
                                        {{-- <th>Images</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $nomorIterasi = 1 @endphp
                                    @foreach ($agendas as $agenda)
                                        <tr>
                                            <td class="text-wrap">{{ $agenda->name }}</td>
                                            <td class="text-wrap">{{ $agenda->place }}</td>
                                            <td class="text-wrap">{{ $agenda->tanggal }}</td>
                                            <td>
                                                <a href="{{ route('admin.agenda.edit', $agenda->id) }}"
                                                    class="btn icon btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                                <form action="{{ route('admin.agenda.destroy', $agenda->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn icon btn-sm btn-danger" name="Hapus"
                                                        onclick="return confirm('Are you sure?')">
                                                        <i class="bi bi-trash3-fill"></i>
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
