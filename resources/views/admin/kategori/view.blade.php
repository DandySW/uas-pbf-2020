@extends('admin.template.master')
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        {{-- <div class="row">
            <div class="col-lg-6"> --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Rekap Kategori</h4>
                <div class="table-responsive">
                    <a style="float: right;" href="{{url('/admin/kategori/create')}}" type="button"
                        class="btn mb-1 btn-rounded btn-outline-info">Tambah
                        Kategori</a>
                    <table class="table header-border table-hover verticle-middle">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Status</th>
                                <th th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Air Conditioner</td>
                                <td>Aktif</td>
                                <td class="text-center">
                                    <a href="" type="button" class="btn mb-1 btn-rounded btn-info">Edit</a>
                                    <a href="" type="button" class="btn mb-1 btn-rounded btn-danger">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- </div>
        </div> --}}
    </div>
</div>
@endsection