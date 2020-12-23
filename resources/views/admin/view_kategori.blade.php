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
                        <h4 class="card-title">Rekap Kategori</h4>
                        <button type="button" class="btn mb-1 btn-rounded btn-info">Tambah Kategori</button>
                        <div class="table-responsive">
                            <table class="table header-border table-hover verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Status</th>
                                        {{-- <th scope="col">Stock</th>
                                        <th scope="col">Harga</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Air Conditioner</td>
                                        <td>Aktif
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