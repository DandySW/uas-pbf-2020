@extends('admin.template.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Tambah Produk</h2>
                        <div class="basic-form">
                            <form>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Produk</label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected="selected">Pilih Kategori</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->cat_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Stok</label>
                                    <div class="col-sm-10">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text">Rp</span></div>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <div class="form-row align-items-center">
                                            <textarea class="form-control h-150px" rows="6" id="comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Pilih Gambar</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input type="file" class="form-control-file">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="button" class="btn mb-1 btn-success">
                                            Upload
                                            <span class="btn-icon-right">
                                                <i class="fa fa-check"></i>
                                            </span>
                                        </button>
                                        <a href="{{url('/admin/products')}}" type="button" class="btn mb-1 btn-danger">
                                            Cancel
                                            <span class="btn-icon-right">
                                                <i class="fa fa-close"></i>
                                            </span>
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