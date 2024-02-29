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
            <li class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">Data News</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit News</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit news</h4>
                    <form action="{{ route('admin.news.update', $news->id) }}" method="POST"
                        class="form form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <label for="title">Judul Berita</label>
                                <input class="form-control" type="text" name="title" id="name"
                                value="{{ $news->title }}"><br><br>
                                
                                <label for="author" class="mt-1">Author</label>
                                <input class="form-control" type="text" name="author" id="author"
                                value="{{ $news->author }}"><br><br>

                                <label for="content" class="mt-1">Content</label>
                                <textarea class="form-control" type="text" name="content" id="content" required>{{ $news->content }}</textarea><br><br>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                </div>                       
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
