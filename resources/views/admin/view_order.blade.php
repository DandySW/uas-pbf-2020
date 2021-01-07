@extends('admin.template.master')
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Rekap Order</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Rekap Order</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr class="text-center">
                                        <th>Order id</th>
                                        <th>Nama Pembeli</th>
                                        <th>Tanggal Order</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td style="text-align: center">{{$order->id}}</td>
                                        <td>{{$order->user->name}}</td>
                                        <td>{{$order->order_date}}</td>
                                        <td>{{$order->order_status}}</td>
                                        <td class="text-center">
                                            <a href="{{url('review')}}"><button type="button" class="btn btn-primary">Detail</button></a>
                                            </button>
                                        </td>             
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection