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
          <div>
            
    </section>
  
           
</div>
@endsection
