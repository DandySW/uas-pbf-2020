@extends('admin.template.master')
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Artikel</a></li>
                <li class="breadcrumb-item"><a>Edit Artikel</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Edit Artikel</h2> <br>
                        <div class="basic-form">
                            <form action="{{ route('blogs.update',$blog->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Judul Artikel</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="title"
                                            class="form-control @error('title') is-invalid @enderror"
                                            value="{{ $blog->title }}">
                                        @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <div class="form-row align-items-center">
                                            <textarea
                                                class="form-control summernote @error('content') is-invalid @enderror"
                                                id="content" name="content"> {!! $blog->content !!}
                                            </textarea>
                                            @error('content')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Gambar (max: 1MB)</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input type="file"
                                                    class="form-control-file @error('image') is-invalid @enderror"
                                                    name="image" id="image" accept="image/*">
                                                <a href="{{url('storage/'.$blog->image_path)}}" target='_blank'>Lihat
                                                    gambar saat ini</a>
                                                @error('image')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn mb-1 btn-success">Simpan<span
                                                class="btn-icon-right"><i class="fa fa-check"></i></span></button>
                                        <a href="{{url('/admin/blogs')}}" type="button" class="btn mb-1 btn-danger">
                                            Batal <span class="btn-icon-right"> <i class="fa fa-close"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection