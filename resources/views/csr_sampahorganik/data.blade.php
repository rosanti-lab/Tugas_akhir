@extends('main2')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Selamat datang di halaman Dashboard Tim CSR</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
</div>

@endsection

@section('content')

<div class="content mt-3">
        <div class="card">
                    <div class ="card-header">
                        <div class="pull-left">
                            <strong> Monitoring Pendapatan Sampah Organik</strong>
                        </div>
                        {{-- <div class="pull-right">
                            <a href="{{ url('csr/add') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>Add
                            </a>
                        </div> --}}
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20px;">No</th>
                                <th>Minggu Ke-</th>
                                <th>Tanggal</th>
                                <th>Total Sampah Organik</th>
                                {{-- <th>Status Monitoring</th> --}}
                                <th>Note</th>
                                <th style="width: 156px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $sampah as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->hari}}</td>
                                    <td>{{ $item->tanggal}}</td>
                                    <td>{{ $item->total_sampah}} Kg</td>
                                    {{-- <td>{{ $item->status_monitoring}}</td> --}}
                                    <td>{{ $item->note}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('csr_sampahorganik/edit/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class=""></i>Note
                                        </a>
                                        <a href="{{ url('csr/destroy/' .$item->id) }}" class="btn btn-danger btn-sm" onclick="return confirm ('Apa Anda yakin ingin menghapus ini')">
                                            <i class=""></i>Delete
                                        </a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>


                        </table>
                    </div>
        </div>

</div>
@endsection
