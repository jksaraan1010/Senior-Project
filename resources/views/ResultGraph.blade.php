@extends('layouts.master')
@section('content')
@if(Auth::user()->role_id != 1)
<!-- Main content -->
<section class="content">
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">Results Graph</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
               <li class="breadcrumb-item active"> Results Graph</li>
            </ol>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container">
<div class="container-fluid">
<br>
<a onClick="window.print()" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
<a onclick="downloadImage();" href= "javascript:void(0);" id="download-graph" class="btn btn-default"><i class="fa fa-download"></i> Download</a> 
<br>
<br>
<!-- below is for rendering the chart, and i added settings  -->
<div class="chart-container" style="position: relative; height:40vh; width:auto;">
   <canvas id="line-chart"></canvas>
</div>
@endif
@endsection

