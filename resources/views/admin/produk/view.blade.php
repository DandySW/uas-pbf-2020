@extends('admin.template.master')
@section('content')
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Produk</a></li>
            </ol>
        </div>
    </div>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {!! session('success') !!}
    </div>
    @elseif (session('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {!! session('warning') !!}
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <a style="float: right;" href="{{url('/admin/products/create')}}" type="button"
                class="btn mb-1 btn-rounded btn-outline-info">Tambah Produk</a>
            <h4 class="card-title">Rekap Produk</h4>
            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Gambar + Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td style="text-align: center; vertical-align: middle">{{ $loop->iteration }}</td>
                            <td>{{ $product->prod_name }}</td>
                            <td>{{ $product->slug }}</td>
                            <td>{{ $product->category->cat_name }}</td>
                            <td class="text-center">{{ $product->stock }}</td>
                            <td class="text-center">RP. {{ @rupiah($product->price) }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#imageDescProduct{{ $product->id }}"> Lihat
                                </button>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('products.edit', $product->id) }}" type="button"
                                    class="btn mb-1 btn-rounded btn-info">Edit</a>
                                <button type="button" class="btn mb-1 btn-rounded btn-danger" data-toggle="modal"
                                    data-target="#deleteProduct{{ $product->id }}">Hapus</button>
                            </td>
                        </tr>

                        <!-- Modal Gambar + Deskripsi -->
                        <div class="modal fade" id="imageDescProduct{{ $product->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Gambar dan Dekripsi Produk
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p><img src="{{ asset('storage/'.$product->image_path) }}"
                                                alt="{{ $product->prod_name }}" style="width: 100%"></p>
                                        <hr>
                                        <p> {!! $product->description !!} </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal hapus kategori -->
                        <div class="modal fade" id="deleteProduct{{ $product->id }}" data-backdrop="static"
                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Apakah anda yakin ingin
                                            menghapus "{{ $product->prod_name }}" dari Rekap Produk?</h5>
                                    </div>
                                    <div class="modal-body">
                                        <strong>Perhatian!</strong> Data Produk yang telah dihapus tidak dapat
                                        dikembalikan
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn mb-1 btn-secondary"
                                            data-dismiss="modal">Batal</button>
                                        <form action=" {{ route('products.destroy', $product->id) }}" method="POST"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn mb-1 btn-danger">Yakin</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection