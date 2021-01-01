@extends('admin.template.master')
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/admin/categories')}}">Kategori</a></li>
                <li class="breadcrumb-item"><a>Edit Kategori</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Kategori</h2>
                        <div class="basic-form">
                            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Kategori</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="cat_name"
                                            class="form-control @error('cat_name') is-invalid @enderror"
                                            value="{{ $category->cat_name }}">
                                        @error('cat_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <select name="status"
                                                    class="custom-select mr-sm-2 @error('status') is-invalid @enderror"
                                                    id="inlineFormCustomSelect">
                                                    @if ($category->status == 1)
                                                    <option selected value="1">Aktif</option>
                                                    <option value="0">Tidak Aktif</option>
                                                    @else
                                                    <option value="1">Aktif</option>
                                                    <option selected value="0">Tidak Aktif</option>
                                                    @endif
                                                </select>
                                                @error('status')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
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