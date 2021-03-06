@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
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

<div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span> Selamat Datang Pada Halaman Admin Maggot Wiralodra.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                    </button>
            </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-3">
        <div class="card-body pb-0">

            <h4 class="mb-0">
                <span class="count"><?= $coba1 ?></span>
            </h4>
            <p class="text-light">Jumlah Produk</p>

            <div class="chart-wrapper px-0" style="height:60px;" height="60">
                <canvas id="widgetChart1"></canvas>
            </div>

        </div>

    </div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-2">
        <div class="card-body pb-0">

            <h4 class="mb-0">
                <span class="count"><?= $coba ?></span>
            </h4>
            <p class="text-light">Data Customer</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart2"></canvas>
            </div>

        </div>
    </div>
</div>
<!--/.col-->

{{-- <div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-3">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-menu-content">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <h4 class="mb-0">
                <span class="count">3</span>
            </h4>
            <p class="text-light">Jumlah Produk</p>

        </div>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart3"></canvas>
            </div>
    </div>
</div> --}}
<!--/.col-->

{{-- <div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-4">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-menu-content">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <h4 class="mb-0">
                <span class="count">4</span>
            </h4>
            <p class="text-light">Members online</p>

            <div class="chart-wrapper px-3" style="height:70px;" height="70">
                <canvas id="widgetChart4"></canvas>
            </div>

        </div>
    </div>
</div> --}}
<!--/.col-->

{{-- <div class="col-lg-3 col-md-6">
    <div class="social-box facebook">
        <i class="fa fa-facebook"></i>
        <ul>
            <li>
                <strong><span class="count">40</span> k</strong>
                <span>friends</span>
            </li>
            <li>
                <strong><span class="count">450</span></strong>
                <span>feeds</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div><!--/.col--> --}}


{{-- <div class="col-lg-3 col-md-6">
    <div class="social-box twitter">
        <i class="fa fa-twitter"></i>
        <ul>
            <li>
                <strong><span class="count">30</span> k</strong>
                <span>friends</span>
            </li>
            <li>
                <strong><span class="count">450</span></strong>
                <span>tweets</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div><!--/.col--> --}}

{{--
<div class="col-lg-3 col-md-6">
    <div class="social-box linkedin">
        <i class="fa fa-linkedin"></i>
        <ul>
            <li>
                <strong><span class="count">40</span> +</strong>
                <span>contacts</span>
            </li>
            <li>
                <strong><span class="count">250</span></strong>
                <span>feeds</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div><!--/.col--> --}}


{{-- <div class="col-lg-3 col-md-6">
    <div class="social-box google-plus">
        <i class="fa fa-google-plus"></i>
        <ul>
            <li>
                <strong><span class="count">94</span> k</strong>
                <span>followers</span>
            </li>
            <li>
                <strong><span class="count">92</span></strong>
                <span>circles</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div><!--/.col--> --}}

{{-- <div class="col-xl-6">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <h4 class="card-title mb-0">Traffic</h4>
                    <div class="small text-muted">October 2017</div>
                </div>
                <!--/.col-->
                <div class="col-sm-8 hidden-sm-down">
                    <button type="button" class="btn btn-primary float-right bg-flat-color-1"><i class="fa fa-cloud-download"></i></button>
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                            <label class="btn btn-outline-secondary">
                                <input type="radio" name="options" id="option1"> Day
                            </label>
                            <label class="btn btn-outline-secondary active">
                                <input type="radio" name="options" id="option2" checked=""> Month
                            </label>
                            <label class="btn btn-outline-secondary">
                                <input type="radio" name="options" id="option3"> Year
                            </label>
                        </div>
                    </div>
                </div><!--/.col-->


            </div><!--/.row-->
            <div class="chart-wrapper mt-4" >
                <canvas id="trafficChart" style="height:200px;" height="200"></canvas>
            </div>

        </div>
        <div class="card-footer">
            <ul>
                <li>
                    <div class="text-muted">Visits</div>
                    <strong>29.703 Users (40%)</strong>
                    <div class="progress progress-xs mt-2" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                <li class="hidden-sm-down">
                    <div class="text-muted">Unique</div>
                    <strong>24.093 Users (20%)</strong>
                    <div class="progress progress-xs mt-2" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                <li>
                    <div class="text-muted">Pageviews</div>
                    <strong>78.706 Views (60%)</strong>
                    <div class="progress progress-xs mt-2" style="height: 5px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                <li class="hidden-sm-down">
                    <div class="text-muted">New Users</div>
                    <strong>22.123 Users (80%)</strong>
                    <div class="progress progress-xs mt-2" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                <li class="hidden-sm-down">
                    <div class="text-muted">Bounce Rate</div>
                    <strong>40.15%</strong>
                    <div class="progress progress-xs mt-2" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div> --}}
</div>
@endsection

