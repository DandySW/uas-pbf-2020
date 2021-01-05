@extends('admin.template.master')
@section('content')
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Kategori</a></li>
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
            <a style="float: right;" href="{{url('/admin/categories/create')}}" type="button"
                class="btn mb-1 btn-rounded btn-outline-info">Tambah Kategori</a>
            <h4 class="card-title">Rekap Kategori</h4>
            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <th style="text-align: center">{{ $loop->iteration }}</th>
                            <td>{{ $category->cat_name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->status == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                            <td class="text-center">
                                <a href="{{ route('categories.edit', $category->id) }}" type="button"
                                    class="btn mb-1 btn-rounded btn-info">Edit</a>
                                <button type="button" class="btn mb-1 btn-rounded btn-danger" data-toggle="modal"
                                    data-target="#deleteCategory{{ $category->id }}">Hapus</button>
                            </td>
                        </tr>

                        <!-- Modal hapus kategori -->
                        <div class="modal fade" id="deleteCategory{{ $category->id }}" data-backdrop="static"
                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Apakah anda yakin ingin
                                            menghapus "{{ $category->cat_name }}" dari Rekap Kategori?</h5>
                                    </div>
                                    <div class="modal-body">
                                        <strong>Perhatian!</strong> Data Kategori yang telah dihapus tidak dapat
                                        dikembalikan
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn mb-1 btn-secondary"
                                            data-dismiss="modal">Batal</button>
                                        <form action=" {{ route('categories.destroy', $category->id) }}" method="POST"
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