@extends('admin.template.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Tambah Produk</h3>
                            <div class="form-group">
                                <label>Nama Produk :</label>
                                <input type="text" class="form-control input-rounded" placeholder="nama produk">
                            </div>
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <label>Banyak stock :</label>
                                    <input type="text" class="form-control input-rounded" placeholder="stock (pcs)">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Deskripsi:</label>
                                <textarea class="form-control h-150px" rows="6" id="comment"></textarea>
                            </div>
                            <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                    <label class="mr-sm-2">Kategori</label>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected="selected">Pilih kategori</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group"> 
                                <p>Pilih gambar :</p>    
                                <input type="file" class="form-control-file">
                            </div>
                        <button type="button" class="btn mb-1 btn-success">
                            Upload
                            <span class="btn-icon-right">
                                <i class="fa fa-check"></i>
                            </span>
                            
                        </button>
                        <button type="button" class="btn mb-1 btn-danger">
                            Cancel
                            <span class="btn-icon-right">
                                <i class="fa fa-close"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection