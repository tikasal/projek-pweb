@extends('layouts/master')
@section('layoutContent')
<div class="row">

    <!-- order-card start -->
    <div class="col-md-6 col-xl-3">
        <div class="card bg-c-blue order-card">
            <div class="card-block">
                <h6 class="m-b-20">Total Pengguna</h6>
                <h2 class="text-right"><i class=""></i><span>20</span></h2>
                <p class="m-b-0"><span class="f-right"></span></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card bg-c-green order-card">
            <div class="card-block">
                <h6 class="m-b-20">Total Kegiatan</h6>
                <h2 class="text-right"><i class=""></i><span>10</span></h2>
                <p class="m-b-0"><span class="f-right"></span></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card bg-c-yellow order-card">
            <div class="card-block">
                <h6 class="m-b-20">Rating Pengguna</h6>
                <h2 class="text-right"><i class=""></i><span>7/10</span></h2>
                <p class="m-b-0"><span class="f-right"></span></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card bg-c-pink order-card">
            <div class="card-block">
                <h6 class="m-b-20">Program Selesai</h6>
                <h2 class="text-right"><i class=""></i><span>7</span></h2>
                <p class="m-b-0"><span class="f-right"></span></p>
            </div>
        </div>
    </div>
    
    <!-- order-card end -->

    <!-- statustic and process start -->
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Statistics</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-times close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <canvas id="Statistics-chart" height="200"></canvas>
            </div>
        </div>
    </div>
    
    <!-- statustic and process end -->
    <!-- tabs card start -->
    <div class="col-sm-12">
        <div class="card tabs-card">
            <div class="card-block p-0">
                <!-- Nav tabs -->
                
                <!-- Tab panes -->
                
            </div>
        </div>
    </div>
    <!-- tabs card end -->

    <!-- social statustic start -->
   
    
   
    <!-- social statustic end -->

    <!-- users visite and profile start -->
    
   
    <!-- users visite and profile end -->

</div>
@endsection