@extends('admin.template.master')
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Produk</a></li>
                <li class="breadcrumb-item"><a>Edit Produk</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Edit Produk</h2> <br>
                        <div class="basic-form">
                            <form action="{{ route('products.update',$product->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Produk</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="prod_name"
                                            class="form-control @error('prod_name') is-invalid @enderror"
                                            value="{{ $product->prod_name }}">
                                        @error('prod_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-4">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <select name="category_id"
                                                    class="custom-select mr-sm-2 @error('category_id') is-invalid @enderror"
                                                    id="inlineFormCustomSelect">
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $product->category_id == $category->id ? "selected":"" }}> {{
                                                        $category->cat_name }} </option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Stok</label>
                                    <div class="col-sm-10">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <input type="text" name="stock"
                                                    class="form-control @error('stock') is-invalid @enderror"
                                                    value="{{ $product->stock }}">
                                                @error('stock')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
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
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="text" name="price"
                                                        class="form-control @error('price') is-invalid @enderror"
                                                        value="{{ $product->price }}">
                                                    @error('price')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Berat (gram)</label>
                                    <div class="col-sm-10">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <input type="text" name="weight"
                                                    class="form-control @error('weight') is-invalid @enderror"
                                                    value="{{ $product->weight }}">
                                                @error('weight')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <div class="form-row align-items-center">
                                            <textarea
                                                class="form-control summernote @error('description') is-invalid @enderror"
                                                id="description" name="description"> {!! $product->description !!}
                                            </textarea>
                                            @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Gambar (max: 3MB)</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <input type="file"
                                                    class="form-control-file @error('image') is-invalid @enderror"
                                                    name="image" id="image" accept="image/*">
                                                <a href="{{url('storage/'.$product->image_path)}}" target='_blank'>Lihat
                                                    gambar saat ini</a>
                                                @error('image')
                                                <div class=" invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn mb-1 btn-success">Simpan<span
                                                class="btn-icon-right"><i class="fa fa-check"></i></span></button>
                                        <a href="{{url('/admin/products')}}" type="button" class="btn mb-1 btn-danger">
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