@extends('main')

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
                            <strong> Data Sampah Organik Yang masuk</strong>
                        </div>
                        {{-- <div class="pull-right">
                            <a href="" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>Add
                            </a>
                        </div> --}}
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Nama </th>
                                <th>Alamat </th>
                                <th>No.Telephon </th>
                                <th>Berat Produk </th>
                                <th>Nama Produk </th>
                                <th>Berat (Kurir) </th>
                                <th>Bukti Pembayaran</th>
                                <th>Ekpedisi Pengiriman</th>
                                <th>Status Pengiriman</th>

                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $barang_terjual as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->name}}</td>

                                    <td>{{ $item->alamat}}</td>
                                    <td>{{ $item->telephon}}</td>
                                    <td>{{ $item->berat_produk}}</td> --}}
                                    <td>{{ $item->nama}}</td>
                                    <td>{{ $item->berat}}</td>
                                    <td><img src="{{ asset('public/assets/bukti_tf/' . $item->bukti_tf) }}" alt="" style="width: 50%"></td>
                                    <td>{{ $item->jasa_pengiriman}}</td>
                                    <td>{{ $item->status_pengiriman}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('transaksi/edit/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class=""></i>Edit
                                        </a>
                                        <a href="{{ url('transaksi/destroy/' .$item->id) }}" class="btn btn-danger btn-sm">
                                            <i class=""></i>Delete
                                        </a>
                                    </td> --}}
                                    <td>{{ $item->status_transaksi}}</td>

                                </tr>
                            @endforeach

                        </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

@endsection

