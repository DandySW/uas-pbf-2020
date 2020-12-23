@extends('admin.template.master')
@section('content')     
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Rekap Produk</h4>
                        <button type="button" class="btn mb-1 btn-rounded btn-info">Tambah Produk</button>
                        <div class="table-responsive">
                            <table class="table header-border table-hover verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Air Conditioner</td>
                                        <td>
                                            <div class="progress" style="height: 10px">
                                                <div class="progress-bar gradient-1" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                </div>
                                            </div> 
                                        </td>
                                        <td><span class="label gradient-1 btn-rounded">70%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Textiles</td>
                                        <td>
                                            <div class="progress" style="height: 10px">
                                                <div class="progress-bar gradient-2" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                </div>
                                            </div> 
                                        </td>
                                        <td><span class="label btn-rounded gradient-2">70%</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection