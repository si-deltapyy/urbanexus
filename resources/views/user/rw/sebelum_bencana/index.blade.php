@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Kuisioner</a></li>
            <li class="breadcrumb-item active" aria-current="page">Riwayat</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div>
                        <a class="btn btn-primary btn-md-12 mb-3" href="{{ route('rw.kuisioner_sb.create') }}">
                            <i class="bi bi-plus-lg"></i>
                            Isi Kuisioner
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
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
                                                {{-- {{ $riwayat->pertanyaan }} <br>
                                            @foreach ($riwayat->pertanyaan->respon_kuisioner as $jawaban)
                                                {{ $jawaban->jawaban }}
                                            @endforeach --}}
                                            </td>
                                            <td>
                                                <a class="btn icon btn-sm btn-primary"
                                                href="{{ route('rw.kuisioner_sb.show', $riwayat->group_id) }}"
                                                title="Detail">
                                                <i data-feather="file-text">
                                                </i>
                                                </a>
                                                {{-- <form class=" hover:bg-red-900 text-white rounded-md" method="POST"
                                                action="{{ route('admin.roles.destroy', $role->id) }}"
                                                onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form> --}}
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
