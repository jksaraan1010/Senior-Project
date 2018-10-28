@extends('layouts.master')

@section('content')
<div class="container">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <p>Welcome {{ Auth::user()->name }}</p>
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h2>Results Graph</h2>

                            <p>Survey Results Graph</p>

                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="ResultGraph" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>

                    <div class="chart-container" style="position: relative; height:10vh; width:100vh;">
                        <canvas id="line-chart"></canvas>
                    </div>



        </div>
    </section>
  
           
</div>
@endsection
