@extends('admin.template.master')
@section('content')
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Artikel</a></li>
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
            <a style="float: right;" href="{{url('/admin/blogs/create')}}" type="button"
                class="btn mb-1 btn-rounded btn-outline-info">Tambah Artikel</a>
            <h4 class="card-title">Rekap Artikel</h4>
            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Judul Artikel</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Lihat Artikel</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr>
                            <td style="text-align: center; vertical-align: middle">{{ $loop->iteration }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->slug }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-primary"><a
                                        href="{{url('blog/'.$blog->slug)}}"></a> Lihat
                                </button>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('blogs.edit', $blog->id) }}" type="button"
                                    class="btn mb-1 btn-rounded btn-info">Edit</a>
                                <button type="button" class="btn mb-1 btn-rounded btn-danger" data-toggle="modal"
                                    data-target="#deleteBlog{{ $blog->id }}">Hapus</button>
                            </td>
                        </tr>

                        <!-- Modal hapus blog -->
                        <div class="modal fade" id="deleteBlog{{ $blog->id }}" data-backdrop="static"
                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Apakah anda yakin ingin
                                            menghapus "{{ $blog->title }}" dari Rekap Artikel?</h5>
                                    </div>
                                    <div class="modal-body">
                                        <strong>Perhatian!</strong> Data Artikel yang telah dihapus tidak dapat
                                        dikembalikan
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn mb-1 btn-secondary"
                                            data-dismiss="modal">Batal</button>
                                        <form action=" {{ route('blogs.destroy', $blog->id) }}" method="POST"
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