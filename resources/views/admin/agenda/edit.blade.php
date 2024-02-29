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
            <li class="breadcrumb-item"><a href="{{ route('admin.agenda.index') }}">Data Agenda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Agenda</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Agenda</h4>
                    <form action="{{ route('admin.agenda.update', $agenda->id) }}" method="POST"
                        class="form form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <label for="name">Nama Agenda</label>
                                <input class="form-control" type="text" name="name" id="name"
                                value="{{ $agenda->nama }}"><br><br>
                                
                                <label for="place" class="mt-1">Tempat Agenda</label>
                                <input class="form-control" type="text" name="place" id="place"
                                value="{{ $agenda->place }}"><br><br>

                                <label for="tanggal" class="mt-1">Tanggal Pelaksanaan</label>
                                <input class="form-control" type="datetime-local" name="tanggal" id="tanggal" value="{{ $agenda->tanggal }}"><br><br>                      
                                <div class="col-sm-12 d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
