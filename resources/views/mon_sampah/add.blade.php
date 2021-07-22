@extends('main')

@section('title', 'mon_sampah')

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
                <div class="card">
                    <div class ="card-header">
                        <div class="pull-left">
                            <strong> Tambah Info Sampah Oragnik</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('mon_sampah') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i>Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body ">

                    <div class ="card">
                    <div class=" card-body card-padding">
                    <form action ="{{ url('mon_sampah') }}" method ="post">
                        @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="fg-line">
                                <label>Minggu Ke-</label>
                                <input type="text" name="hari" class="form-control" placeholder="Enter title" maxlength="150" required="require" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="fg-line">
                                    <label>Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" placeholder="Enter title" maxlength="150" required="require" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="fg-line">
                                    <label>Total Sampah Organik</label>
                                    <textarea id="text" name="total_sampah" class="form-control" rows="10" placeholder="Enter description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <div class="m-b-10">
                                        <label>Status Monitoring</label>
                                    </div>
                                    <label class="radio radio-inline m-r-20">
                                        <input type="radio" name="status" value="Y" checked>
                                        <i class="input-helper"></i> Yes
                                    </label>
                                    <label class="radio radio-inline m-r-20">
                                        <input type="radio" name="status" value="N">
                                        <i class="input-helper"></i> No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group kaki">
                        <button type="submit" class="btn btn-primary btn-sm m-t-10 waves-effect"><i class="zmdi zmdi-check"></i> Save</button>
                        <button type="button" class="btn btn-danger btn-sm m-t-10 waves-effect" onclick="self.history.back()"><i class="zmdi zmdi-close"></i> Cancel</button>
                    </div>

                        </form>
                    </div>
                    
                    </div>
                        
                    </div>
                </div>

            </div>

        </div>

@endsection
      