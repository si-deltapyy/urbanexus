@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Data Table</h6>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.data_table_pdf') }}" class="btn btn-primary">Unduh PDF</a>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>RW</th>
                                    <th>RT</th>
                                    <th>Nama</th>
                                    <th>Jumlah Penduduk</th>
                                    <th>Jumlah Warga Terdampak </th>
                                    <th>Waktu Diperbarui</th>
                                </tr>
                            </thead>
                            <tbody>
                              @php $nomorIterasi = 1 @endphp
                                @foreach ($laporan as $item)
                                    <tr>
                                        {{-- @dd($item->user) --}}
                                        <td>{{ $nomorIterasi }}.</td>
                                        <td>
                                            @foreach ($item->user->roles as $role)
                                                {{-- @dd($role) --}}
                                                @if ($role->name == 'RW')
                                                    {{ optional($item->user->rw)->id }}
                                                @elseif ($role->name == 'RT')
                                                    {{ $item->user->rt->rw->id ?? '-' }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($item->user->roles as $role)
                                                @if ($role->name == 'RW')
                                                    {{ $item->user->rt->id ?? '-' }}
                                                @elseif ($role->name == 'RT')
                                                    {{ $item->user->rt->id ?? '-' }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td> {{ $item->total_jawaban }}</td>
                                        <td>{{ $item->jawaban_91 }}</td>
                                        <td>{{ $item->timestamp }}</td>
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
    <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
