@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Data RT</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div>
                <a class="btn btn-primary btn-md-12 mb-3" href="{{ route('admin.roles.create') }}">
                    <i class="bi bi-plus-lg"></i>
                    Tambah Role
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                          <th >Nomor</th>
                          <th >Role</th>
                          <th >Aksi</th>
                        </tr>
                      </thead>
                  <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>
                                {{ $role->name }}
                        </td>
                        <td>
                                    <form
                                        class=" hover:bg-red-900 text-white rounded-md"
                                        method="POST"
                                        action="{{ route('admin.roles.destroy', $role->id) }}"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                        </td>
                    </tr>
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
