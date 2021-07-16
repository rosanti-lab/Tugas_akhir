@extends('main')

@section('title', 'profil')

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
                            <strong> Profil</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('profil/add') }}" class="btn btn-success btn-sm">
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
                                <th>Descripsi </th>
                                <th>Status </th>
                                <th>Date Update </th>
                                <th>Action</th>
                            </tr>
                        </thread>
                        <tbody>
                            @foreach ( $profil as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->judul}}</td>
                                    <td>{{ substr(strip_tags($item->konten),0,50) }} ...</td>
                                    <td>{{ $item->status}}</td>
                                    <td>{{ $item->updated_at}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('profil/edit/' .$item->id_profil) }}" class="btn btn-primary btn-sm">
                                            <i class=""></i>Edit
                                        </a>
                                        <!-- <button  type="submit" class="btn btn-danger btn-xs "onclick="return confirm ('Apa Anda yakin ingin menghapus ini')">HAPUS</button></form>  --> 
                                        <a href="{{ url('profil/destroy/' .$item->id_profil) }}" class="btn btn-danger btn-sm" onclick="return confirm ('Apa Anda yakin ingin menghapus ini')">
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
      