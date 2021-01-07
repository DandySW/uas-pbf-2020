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
                                        <th>Ongkir</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td style="text-align: center">{{$order->id}}</td>
                                        <td>{{$order->user->name}}</td>
                                        <td>{{$order->order_date}}</td>
                                        <td>{{$order->ongkir}}</td>
                                        <td>{{$order->total}}</td>
                                        <td>{{$order->order_status}}</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#detailOrderModal{{ $order->id }}">Lihat</button>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="detailOrderModal{{ $order->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Order - ID
                                                        Order {{ $order->id }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    @foreach ($od as $detail)
                                                    @if($order->id == $detail->order_id)
                                                    <ul class="list-group">
                                                        <li class="list-group-item">{{ $detail->product->prod_name }}
                                                            ({{ $detail->quantity }}) -
                                                            Rp.
                                                            {{ @rupiah($detail->product->price * $detail->quantity ) }}
                                                        </li>
                                                    </ul>
                                                    @endif
                                                    @endforeach
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
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection