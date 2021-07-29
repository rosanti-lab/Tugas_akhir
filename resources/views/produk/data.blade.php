@extends('main')

@section('title', 'produk')

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
        <div class="card">
                    <div class ="card-header">
                        <div class="pull-left">
                            <strong> Informasi Produk</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('produk/add') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>Add
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20px;">No</th>
                                <th>Nama</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Harga</th>
                                <th>Stok Produk</th>
                                <th style="width: 156px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $produk as $produk)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $produk->nama}}</td>
                                    <td>{{ substr(strip_tags($produk->deskripsi),0,50) }} ...</td>
                                    <td><img src="{{ asset('assets/img/' . $produk->image) }}" alt="" style="width: 30%"></td>
                                    <td>{{ $produk->harga}}</td>
                                    <td>{{ $produk->stok}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('produk/edit/' .$produk->id_produk) }}" class="btn btn-primary btn-sm">
                                            <i class=""></i>Edit
                                        </a>
                                        <a href="{{ url('produk/destroy/' .$produk->id_produk) }}" class="btn btn-danger btn-sm" onclick="return confirm ('Apa Anda yakin ingin menghapus ini')">
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
