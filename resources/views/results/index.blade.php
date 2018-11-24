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
              <h1 class="m-0 text-dark">Assessment Results</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                <li class="breadcrumb-item active"> Assessment Results </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="container">
              <div class="container-fluid">
              
<div class="content-header">
  <div class="container-fluid">
  <br>
<a class="print-btn" href="javascript:void(0)" onClick="window.print()"> Print this page</a>
 <a class="email-btn" href="/EmailResults" target="_blank" > Email this page </a>
 
 <br> <br>
       <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }}">
                <thead class="bg-primary">
                    <tr>
                    @if(Auth::user()->isAdmin())
                        <th>@lang('general.results.fields.user')</th>
                    @endif
                        <th>Assessment Date Taken</th>
                        <th>Assessment Result</th>
                        <th>View Detailed Results</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($results) > 0)
                        @foreach ($results as $result)
                    
                            <tr>
                            @if(Auth::user()->isAdmin())
                            <td>{{ $result->user->name}} ({{$result->user->email}})</td>
                            @endif
                                <td>{{ $result->created_at->format('d M Y h:i A') }}</td>
                                 <td>
                                    <?php
                                        $total_questions = $controller->getTotalQuestion($result->id);
                                    ?>
                                    {{ $result->result }} out of  {{ $total_questions }}
                                </td>
                                <td>
                                    <a href="{{ route('results.show',[$result->id]) }}" class="btn btn-xs btn-primary">@lang('general.view')</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('general.no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
  </div>
</div>
@stop

@section('script')
@parent
<script src="{{ url('adminlte/js') }}/timepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script>
    $('.datetime').datetimepicker({
        autoclose: true,
  
        timeFormat: "hh:mm:ss"
    });
</script>
@endif
@stop
