@extends('layouts.master')

@section('content')
<div class="container">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <br>
        <p>Welcome {{ Auth::user()->name }}!</p>
            <div class="row">
            <div class="col-md-12">
            <div class="card card-primary">
              <h4 class="card-header"> How To Use My Transition Explorer
               
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
                </h4>
              <!-- /.card-header -->
              <div class="card-body">
                Steps to learning MTE
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
                <div class="chart-container" style="position: relative; height:10vh; width:100vh;">
                    <canvas id="line-chart"></canvas>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua height:10vh; width:100vh;">
                        <div class="inner">
                            <h2>Results Graph</h2>
                            <p>Survey Results Graph</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="ResultGraph" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                    </div>



                </div>
                <div>
            
    </section>
  
           
</div>
@endsection
