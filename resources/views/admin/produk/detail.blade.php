@extends('admin.template.master')
@section('content')
<div class="content-body">    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h4 class="d-inline">Detail Produk</h4>
                <p class="text-muted">Nama Kategori</p>
                <div class="card">
                    {{-- <br> --}}
                    <img class="img-fluid" src="images/big/img1.jpg" height="200" alt="">
                    {{-- <center><img class="img-fluid" src="images/big/img1.jpg" height="200" alt=""></center> --}}
                    <div class="card-body">
                        <center><h5 class="card-title">Nama Produk</h5></center>
                        <p class="card-text">Deskripsi Produk
                        <div class="card-footer">
                            <p class="card-text d-inline"><large class="text-muted">Harga</large>
                            </p><a href="#" class="card-link float-right"><large>Edit</large></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection