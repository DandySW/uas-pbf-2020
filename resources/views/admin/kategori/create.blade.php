@extends('admin.template.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Kategori</h2>
                        <div class="basic-form">
                            <form>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Kategori</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" placeholder="Nama Produk">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected="selected">Pilih Status</option>
                                                    <option value="1">Aktif</option>
                                                    <option value="2">Non-Aktif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="button" class="btn mb-1 btn-success">
                                            Upload
                                            <span class="btn-icon-right">
                                                <i class="fa fa-check"></i>
                                            </span>
                                        </button>
                                        <a href="{{url('/admin/kategori')}}" type="button" class="btn mb-1 btn-danger">
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