@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        Dashboard
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="jumbotron">
                    <div class="row w-100">
                            <div class="col-md-3">
                                <div class="card border-info mx-sm-1 p-3">
                                    <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-car" aria-hidden="true"></span></div>
                                    <div class="text-info text-center mt-3"><h4>Pengajuan Diproses</h4></div>
                                    <div class="text-info text-center mt-2"><h1>{{ $proses }}</h1></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card border-success mx-sm-1 p-3">
                                    <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>
                                    <div class="text-success text-center mt-3"><h4>Pengajuan Diterima</h4></div>
                                    <div class="text-success text-center mt-2"><h1>{{ $terima }}</h1></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card border-danger mx-sm-1 p-3">
                                    <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                                    <div class="text-danger text-center mt-3"><h4>Pengajuan Selesai</h4></div>
                                    <div class="text-danger text-center mt-2"><h1>{{ $selesai }}</h1></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card border-warning mx-sm-1 p-3">
                                    <div class="card border-warning shadow text-warning p-3 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
                                    <div class="text-warning text-center mt-3"><h4>Coa Disetujui</h4></div>
                                    <div class="text-warning text-center mt-2"><h1>{{ $coa }}</h1></div>
                                </div>
                            </div>
                         </div>
                    </div>
            </div>
        </div>
    </div>
@endsection