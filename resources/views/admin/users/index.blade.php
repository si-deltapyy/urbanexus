{{-- <x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email</th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $user->name }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        {{ $user->email }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="flex justify-end">
                                                        <div class="flex space-x-2">
                                                            <a href="{{ route('admin.users.show', $user->id) }}"
                                                                class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Roles</a>
                                                            <form
                                                                class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                                                method="POST"
                                                                action="{{ route('admin.users.destroy', $user->id) }}"
                                                                onsubmit="return confirm('Are you sure?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
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
        </div>
    </div>
</x-admin-layout> --}}


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
            <li class="breadcrumb-item"><a href="#">Data RT</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="user-tab" data-bs-toggle="tab" data-bs-target="#user"
                                type="button" role="tab" aria-controls="user" aria-selected="true">User</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rw-tab" data-bs-toggle="tab" data-bs-target="#rw" type="button"
                                role="tab" aria-controls="rw" aria-selected="false">RW</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rt-tab" data-bs-toggle="tab" data-bs-target="#rt" type="button"
                                role="tab" aria-controls="rt" aria-selected="false">RT</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title d-flex justify-content-center">Jumlah User Terdaftar pada Sistem
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table">
                                            <thead>
                                                <tr>
                                                    <th class="w-10px text-center">No</th>
                                                    <th class="w-100px text-center">Nama</th>
                                                    <th class="w-100px text-center">Email</th>
                                                    <th class="w-100px text-center">Jabatan</th>
                                                    <th class="w-20px text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}.</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                {{ $user->name }}
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                {{ $user->email }}
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                @if ($user->roles)
                                                                    @foreach ($user->roles as $user_role)
                                                                        @if ($user_role->name == 'rw')
                                                                            {{ $user_role->name }}
                                                                            @foreach ($user->rw as $rw)
                                                                                {{ $rw->id ?? 'N/A' }}
                                                                            @endforeach
                                                                        @else
                                                                            RW
                                                                            @foreach ($user->rt as $rt)
                                                                                {{ $rt->rw->id ?? 'N/A' }},
                                                                            @endforeach
                                                                            {{ $user_role->name }}
                                                                            @foreach ($user->rt as $rt)
                                                                                {{ $rt->id ?? 'N/A' }}
                                                                            @endforeach
                                                                        @endif
                                                                    @endforeach
                                                                @endif

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex justify-end">
                                                                <div class="flex space-x-2">
                                                                    {{-- <a href="{{ route('admin.users.show', $user->id) }}"
                                                                            class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Roles</a> --}}
                                                                    <form
                                                                        class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                                                        method="POST"
                                                                        action="{{ route('admin.users.destroy', $user->id) }}"
                                                                        onsubmit="return confirm('Are you sure?');">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit">Delete</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="rw" role="tabpanel" aria-labelledby="rw-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title d-flex justify-content-center">Jumlah RW</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table">
                                            <thead>
                                                <tr>
                                                    <th class="w-10px text-center">No</th>
                                                    <th class="w-10px text-center">RW</th>
                                                    <th class="w-100px text-center">Nama</th>
                                                    <th class="w-100px text-center">Email</th>
                                                    <th class="w-100px text-center">Alamat Kantor</th>
                                                    <th class="w-100px text-center">Alamat Rumah</th>
                                                    <th class="w-20px text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    @foreach ($user->rw as $rw)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}.</td>
                                                            <td>RW {{ $rw->id }}</td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    {{ $rw->nama_rw }}
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    {{ $rw->email }}
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    {{ $rw->pekerjaan }}
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    {{ $rw->alamat_kantor }}
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    {{ $rw->alamat_rumah }}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="flex justify-end">
                                                                    <div class="flex space-x-2">
                                                                        {{-- <a href="{{ route('admin.users.show', $user->id) }}"
                                                                            class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Roles</a> --}}
                                                                        <form
                                                                            class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                                                            method="POST"
                                                                            action="{{ route('admin.users.destroy', $user->id) }}"
                                                                            onsubmit="return confirm('Are you sure?');">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit">Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="rt" role="tabpanel" aria-labelledby="rt-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title d-flex justify-content-center">Jumlah RT</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table">
                                            <thead>
                                                <tr>
                                                    <th class="w-10px text-center">No</th>
                                                    <th class="w-10px text-center">RW, RT</th>
                                                    <th class="w-100px text-center">Nama</th>
                                                    <th class="w-100px text-center">Email</th>
                                                    <th class="w-100px text-center">Alamat Kantor</th>
                                                    <th class="w-100px text-center">Alamat Rumah</th>
                                                    <th class="w-20px text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    @foreach ($user->rt as $rt)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}.</td>
                                                            <td>RW {{ $rt->rw_id }}, RT {{ $rt->id }}</td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    {{ $rt->nama_rt }}
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    {{ $rt->email }}
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    {{ $rt->pekerjaan }}
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    {{ $rt->alamat_kantor }}
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    {{ $rt->alamat_rumah }}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="flex justify-end">
                                                                    <div class="flex space-x-2">
                                                                        {{-- <a href="{{ route('admin.users.show', $user->id) }}"
                                                                            class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Roles</a> --}}
                                                                        <form
                                                                            class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                                                            method="POST"
                                                                            action="{{ route('admin.users.destroy', $user->id) }}"
                                                                            onsubmit="return confirm('Are you sure?');">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit">Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
@endpush
