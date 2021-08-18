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
                    {{-- <div class="pull-right">
                        <a href="{{ url('transaksi') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i>Back
                        </a>
                    </div> --}}
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
                            <strong> Data Pembeli</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('transaksi') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i>Back
                            </a>
                        </div>
                        {{-- <div class="pull-right">
                            <a href="{{ url('print/'.$item->id. '/cetak') }}" class="btn btn-secondary btn-sm"> Cetak Nota
                                <i class="fa fa-undo"></i>Back
                            </a>
                        </div> --}}


                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Data Masuk</th>
                                <th>Nama </th>
                                {{-- <th>Alamat </th>
                                <th>No.Telephon </th> --}}
                                <th>Nama Produk </th>
                                <th>Jumlah Pembelian </th>
                                {{-- <th>Harga </th> --}}
                                <th>Total Pembayaran </th>
                                {{-- <th>Bukti Pembayaran</th>
                                <th>Ekpedisi Pengiriman</th> --}}
                                <th>Status Pengiriman</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $barang_terjual as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->create}}</td>
                                    <td>{{ $item->name}}</td>
                                    {{-- <td>{{ $item->alamat}}</td>
                                    <td>{{ $item->telephon}}</td> --}}
                                    <td>{{ $item->nama}}</td>
                                    <td>{{ $item->berat_produk}} Pack</td>
                                    {{-- <td>Rp. {{ $item->harga * $item->berat_produk}}</td> --}}
                                    <td>Rp. {{ $item->harga * $item->berat_produk + $item->ongkir}}</td>
                                    {{-- <td><img src="{{ asset('public/assets/bukti_tf/' . $item->bukti_tf) }}" alt="" style="width: 50%"></td>
                                    <td>{{ $item->jasa_pengiriman}}</td> --}}
                                    <td>{{ $item->status_pengiriman}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('transaksi/edit/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class=""></i>Edit
                                        </a>
                                        <a href="{{ url('transaksi/destroy/' .$item->id) }}" class="btn btn-danger btn-sm" onclick="return confirm ('Apa Anda yakin ingin menghapus ini')">
                                            <i class=""></i>Hapus
                                        </a>
                                        <br>
                                        <a href="{{ url('transaksi/details/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class=""></i>Detail
                                        </a>
                                        {{-- <a href="{{ url('cetak1/' .$item->id) }}" class="btn btn-secondary btn-sm"> Cetak Nota
                                            <i class="fa fa-undo"></i>
                                        </a> --}}


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

