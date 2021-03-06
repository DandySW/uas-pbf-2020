@extends('admin.template.master')
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Kategori</a></li>
                <li class="breadcrumb-item"><a>Tambah Kategori</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Tambah Kategori</h2> <br>
                        <div class="basic-form">
                            <form action="{{ route('categories.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Kategori</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="cat_name"
                                            class="form-control @error('cat_name') is-invalid @enderror"
                                            value="{{ old('cat_name') }}">
                                        @error('cat_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn mb-1 btn-success">Simpan<span
                                                class="btn-icon-right"><i class="fa fa-check"></i></span></button>
                                        <a href="{{url('/admin/categories')}}" type="button"
                                            class="btn mb-1 btn-danger">
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