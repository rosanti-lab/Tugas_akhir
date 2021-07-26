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
                        <div class="pull-right">
                            <a href="" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>Add
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Name </th>
                                <th>Foto </th>
                                <th>Alamat </th>
                                <th>No.Telephon </th>
                                <th>Berat (kg) </th>
                                <th>Tanggal Penjemputan </th>
                                <th>Status Penjemputan </th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $sampahorganik as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->image}}</td>
                                    <td>{{ $item->alamat}}</td>
                                    <td>{{ $item->telephon}}</td>
                                    <td>{{ $item->berat}}</td>
                                    <td>{{ $item->tanggal}}</td>
                                    <td>{{ $item->status_penjemputan}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('sampahorganik/edit/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class=""></i>Edit
                                        </a>
                                        <a href="{{ url('sampahorganik/destroy/' .$item->id) }}" class="btn btn-danger btn-sm">
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

        </div>

@endsection

