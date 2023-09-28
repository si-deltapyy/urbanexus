@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Kuisioner</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sebelum Bencana</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.sebelum_bencana_pdf') }}" class="btn btn-primary">Unduh PDF</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTableExample">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Responden</th>
                                    <th>RW</th>
                                    <th>RT</th>
                                    <th>Tanggal Isi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $nomorIterasi = 1 @endphp
                                @foreach ($riwayats as $riwayat)
                                    @if ($riwayat->pertanyaan->kategori_pertanyaan == 'Sebelum Bencana')
                                        <tr>
                                            <td>{{ $nomorIterasi }}.</td>
                                            <td>
                                                {{ $riwayat->user->name }}
                                            </td>
                                            <td>
                                                @foreach ($riwayat->user->roles as $role)
                                                {{-- @dd($role) --}}
                                                    @if ($role->name == 'RW')
                                                        {{ optional($riwayat->user->rw)->id }}
                                                    @elseif ($role->name == 'RT')
                                                        {{ $riwayat->user->rt->rw->id ?? '-' }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($riwayat->user->roles as $role)
                                                    @if ($role->name == 'RW')
                                                        {{ $riwayat->user->rt->id ?? '-' }}
                                                    @elseif ($role->name == 'RT')
                                                        {{ $riwayat->user->rt->id ?? '-' }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                {{ $riwayat->created_at }}
                                            </td>
                                            <td>
                                                @role('super_admin')
                                                    <a class="btn btn-sm btn-primary"
                                                        href="{{ route('super_admin.kuisioner_sb.show', $riwayat->group_id) }}"
                                                        title="Detail">
                                                    </a>
                                                    <form class=" hover:bg-red-900 text-white rounded-md" method="POST"
                                                        action="{{ route('super_admin.kuisioner_sb.destroy', $riwayat->group_id) }}"
                                                        onsubmit="return confirm('Are you sure?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                    </form>
                                                @endrole
                                                @role('admin')
                                                    <a class="btn btn-sm btn-primary"
                                                        href="{{ route('admin.kuisioner_sb.show', $riwayat->group_id) }}"
                                                        title="Detail">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </a>
                                                @endrole
                                            </td>
                                        </tr>
                                        @php $nomorIterasi++ @endphp
                                    @endif
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
