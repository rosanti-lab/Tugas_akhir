@extends('main')

@section('title', 'infotransaksi')

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
                            <strong> Informasi Transaksi</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('infotransaksi/add') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>Add
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20px;">No</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th style="width: 156px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $info_transaksi as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->judul}}</td>
                                    <td>{{ substr(strip_tags($item->konten),0,50) }} ...</td>
                                    <td><img src="{{ asset('assets/img/' . $item->image) }}" alt="" style="width: 30%"></td>

                                    <td class="text-center">
                                        <a href="{{ url('infotransaksi/edit/' .$item->id_info_transaksi) }}" class="btn btn-primary btn-sm">
                                            <i class=""></i>Edit
                                        </a>
                                        <a href="{{ url('infotransaksi/destroy/' .$item->id_info_transaksi) }}" class="btn btn-danger btn-sm" onclick="return confirm ('Apa Anda yakin ingin menghapus ini')">
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
