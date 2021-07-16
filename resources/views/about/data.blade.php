@extends('main')

@section('title', 'about')

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
                            <strong> About</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('about/add') }}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus"></i>Add
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                        <thread>
                            <tr>
                                <th>No. </th>
                                <th>Judul </th>
                                <th>Image </th>
                                <th>Deskripsi </th>
                                <th>Action</th>
                            </tr>
                        </thread>
                        <tbody>
                            @foreach ( $about as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->title}}</td>
                                    <td>{{ $item->photo}}</td>
                                    <td>{{ substr(strip_tags($item->konten),0,50) }} ...</td>
                                    
                                    <td class="text-center">
                                        <a href="{{ url('about/edit/' .$item->id) }}" class="btn btn-primary btn-sm">
                                            <i class=""></i>Edit
                                        </a> 
                                        <a href="{{ url('about/destroy/' .$item->id) }}" class="btn btn-danger btn-sm" onclick="return confirm ('Apa Anda yakin ingin menghapus ini')">
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
      