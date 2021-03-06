@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        {{-- <h1>Selamat datang di halaman Dashboard Tim CSR</h1> --}}
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
                        <div class="pull-right">
                            <a href="{{ url('mon_transaksi/add') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>Add
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20px;">No</th>
                                <th>Minggu Ke-</th>
                                <th>Tanggal</th>
                                <th>Total Terjual</th>
                                <th>Status Monitoring</th>
                                <th>Note dari Tim CSR</th>
                                <th style="width: 156px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_monitoring as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->hari}}</td>
                                    <td>{{ $item->tgl}}</td>
                                    <td>{{ $item->total_terjual}} Kg</td>
                                    <td>{{ $item->status_monitoring}}</td>
                                    <td>{{ $item->note}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('mon_transaksi/edit/' .$item->id_monitoring) }}" class="btn btn-primary btn-sm">
                                            <i class=""></i>Edit
                                        </a>
                                        <a href="{{ url('mon_transaksi/destroy/' .$item->id_monitoring) }}" class="btn btn-danger btn-sm" onclick="return confirm ('Apa Anda yakin ingin menghapus ini')">
                                            <i class=""></i>Delete
                                        </a>
                                        <a href="{{ url('cetak1/' .$item->id_monitoring) }}" class="btn btn-secondary btn-sm"> Cetak Nota
                                            <i class="fa fa-undo"></i>
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
