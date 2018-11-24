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
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                <li class="breadcrumb-item active"> Results Graph</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="container">
              <div class="container-fluid">
              <br>
      <a class="print-btn" href="javascript:void(0)" onClick="window.print()"> Print this page</a>
 <a class="email-btn" href="/EmailTable" target="_blank" >Email this page </a>
  <br>
<br>
    <div class="chart-container" style="position: relative; height:40vh; width:auto;">
        <canvas id="line-chart"></canvas>
    </div>
    @endif
@endsection
