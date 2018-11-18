@extends('layouts.master')

@section('content')
 <!-- Main content -->
 <section class="content"> 
   
   
   <!-- Content Header (Page header) -->
   <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">{{$module->name}} Module</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                <li class="breadcrumb-item active"> {{$module->name}} Module</li>
              </ol>
  
            </div><!-- /.col -->
            
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <!-- /.content-header -->
      <div class="container">
              <div class="container-fluid">
              <button type="submit"> <a onClick="window.print()"> Print this page</a></button>
 <button type="submit"> <a href="/EmailModules" target="_blank">Email this page</a></button>
 <br>
 <br>
 <!-- Main content -->
 <div class="content">
      <div class="container-fluid">
  <div class="card card-default">
          <div class="card-header bg-primary">
            <h5>
            <i class="fas fa-book-reader"></i>
            {{$module->name}}
            </h5>
          </div>
          <div class="card-body">

            <div class="row">
              
              <p>  Maintain a diary with your 
                  health records and can keep it with you at all times.</p>
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->


 <div class="row">
 @forelse($module->module_detail as $key => $value)
          <div class="col-md-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h5>
                <i class="fas fa-book-reader"></i>
                {{$value->title}}
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p class="card-text">
                {!!$value->description!!}
              </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
  
    @empty
    @endforelse
    </div>
    

  </div>
 
</div>
@stop

@section('javascript')
@parent
<script src="{{ url('adminlte/js') }}/timepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script>
    $('.datetime').datetimepicker({
        autoclose: true,
        dateFormat: "{{ config('app.date_format_js') }}",
        timeFormat: "hh:mm:ss"
    });
</script>

@stop
