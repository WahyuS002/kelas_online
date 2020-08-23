@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Annex</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->

        
<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-webcam"></i>
                        </div>
                    </div>
                    <div class="col-6 align-self-center text-center">
                        <div class="m-l-10">
                            <h5 class="mt-0 round-inner">$18090</h5>
                            <p class="mb-0 text-muted">Visits Today</p>                                                                 
                        </div>
                    </div>
                    <div class="col-3 align-self-end align-self-center">
                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>5.26%</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-account-multiple-plus"></i>
                        </div>
                    </div>
                    <div class="col-6 text-center align-self-center">
                        <div class="m-l-10 ">
                            <h5 class="mt-0 round-inner">562</h5>
                            <p class="mb-0 text-muted">New Users</p>
                        </div>
                    </div>
                    <div class="col-3 align-self-end align-self-center">
                        <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>8.68%</span></h6>
                    </div>                                                        
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round ">
                            <i class="mdi mdi-basket"></i>
                        </div>
                    </div>
                    <div class="col-6 align-self-center text-center">
                        <div class="m-l-10 ">
                            <h5 class="mt-0 round-inner">7514</h5>
                            <p class="mb-0 text-muted">New Orders</p>
                        </div>
                    </div>
                    <div class="col-3 align-self-end align-self-center">
                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-rocket"></i>
                        </div>
                    </div>
                    <div class="col-6 align-self-center text-center">
                        <div class="m-l-10">
                            <h5 class="mt-0 round-inner">$32874</h5>
                            <p class="mb-0 text-muted">Total Sales</p>
                        </div>
                    </div>
                    <div class="col-3 align-self-end align-self-center">
                        <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>2.35%</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<div class="row">
    <div class="col-md-12 col-lg-12 col-xl-8">
        <div class="card m-b-30">
            <div class="card-body">
                <h5 class="header-title pb-3 mt-0">Overview</h5>
                <div id="multi-line-chart" style="height:400px;"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-xl-4">
        <div class="card m-b-30">
            <div class="card-body">
                <a href="" class="btn btn-primary btn-sm float-right">More Info</a>
                <h5 class="header-title mt-0 pb-3">Revenue By Country</h5>
                                                                
                <ul class="list-unstyled list-inline text-center">
                    <li class="list-inline-item">
                        <p><i class="mdi mdi-checkbox-blank-circle text-primary mr-2"></i>Canada</p> 
                    </li>
                    <li class="list-inline-item">
                        <p><i class="mdi mdi-checkbox-blank-circle text-info mr-2"></i>USA</p>
                    </li>
                    <li class="list-inline-item">
                        <p><i class="mdi mdi-checkbox-blank-circle text-greylight mr-2"></i>London</p>    
                    </li>
                </ul> 
                <div id="morris-donut-chart" style="height:345px;"></div>
            </div>
        </div>
    </div>
</div>
@endsection