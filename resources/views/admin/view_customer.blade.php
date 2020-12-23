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
                        <h4 class="card-title">Rekap Customer</h4>
                        <div class="table-responsive">
                            <table class="table header-border table-hover verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Username</th>
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
            {{-- </div>

        </div> --}}
    </div>
</div>
@endsection