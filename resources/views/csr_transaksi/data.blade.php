@extends('main2')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <!-- <h1>Selamat datang di halaman admin</h1> -->
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


            <div class="animated fadeIn">
                <div class="card">
                    <div class ="card-header">
                        <div class="pull-left">
                            <strong> Monitoring Penjualan </strong>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No. </th>
                                {{-- <th>Minggu Ke-</th> --}}

                                <th>Nama Produk </th>



                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $produk1 as $item)

                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    {{-- <td>{{ $item->tgl}}</td> --}}
                                    <td>{{ $item->nama}}</td>

                                    <td class="text-center">
                                        <a href="{{ url('csr_transaksi/data_monitoring/' .$item->id_produk) }}" class="btn btn-primary btn-sm">
                                            <i class=""></i>Data Pembeli
                                        </a>
                                        {{-- <a href="{{ url('transaksi/destroy/' .$item->id_produk) }}" class="btn btn-danger btn-sm" onclick="return confirm ('Apa Anda yakin ingin menghapus ini')">
                                            <i class=""></i>Delete
                                        </a>  --}}

                                    </td>


                                </tr>
                            @endforeach

                        </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

@endsection

