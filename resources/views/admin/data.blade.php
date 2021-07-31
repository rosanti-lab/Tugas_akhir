@extends('main')

@section('title', 'admin')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <!-- <h1>Dashboard</h1> -->
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

            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif


                <div class="card">
                    <div class ="card-header">
                        <div class="pull-left">
                            <strong> Admin</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('admin/add') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>Add
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Nama </th>
                                <th>Email </th>
                                <th>Alamat </th>
                                <th>Password </th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $users as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->email}}</td>
                                    <td>{{ $item->alamat}}</td>
                                    <td>{{ $item->password}}</td>
                                    <td>{{ $item->role}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('admin/edit/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class=""></i>Edit
                                        </a>
                                        <a href="{{ url('admin/destroy/' .$item->id) }}" class="btn btn-danger btn-sm" onclick="return confirm ('Apa Anda yakin ingin menghapus ini')">
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
