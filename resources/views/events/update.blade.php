
@extends('layouts.master')
<link rel="stylesheet" href="/daterangepicker/daterangepicker-bs3.css">
<script type="text/javascript" src="/daterangepicker/daterangepicker.js"></script>
@section('content')
@if($eventsUnderEdit->user_id == Auth::user()->id )
  <!-- Main content -->
  <section class="content"> 
   
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Calendar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item active"> Calendar </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
            <div class="container-fluid">

                {{-- Success Alert --}}
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success:</strong> {{ Session::get('success') }}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            {{-- If the page has any errors passed to it --}}
            @if(count($errors) > 0)

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Errors:</strong>

                    <ul>
                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach
                    </ul>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            @endif

<br>
<br>
 <!-- Main content -->
 <div class="content">
      <div class="container-fluid">

<div class="card card-default">
          <div class="card-header bg-primary">
            <h5><i class="fas fa-calendar-alt"></i> Update Event</h5>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              <form action="{{action('EventsController@update', $eventsUnderEdit['id'])}}" method="post">
        {{csrf_field()}}
            <input type="hidden" name="_method" value="Update" />
            <div class="form-group">
                <label> Name of Event </label>
                <input type="text" class="form-control" name="event_name" placeholder="Event Name" value="{{$eventsUnderEdit->event_name}}" >
            </div>

            <div class="form-group">
                <label> Event Date and Time Range </label>
                <input type="text" class="form-control" name="event_time" placeholder="Event Time" id="event_Time" value="{{$eventsUnderEdit->event_time}}"readonly>
            </div>
            <div class="form-group">
                <label> Updated Event Date and Time Range </label>
                <p class="text-primary"> *Format: MM/DD/YYYY 12:00 AM - MM/DD/YYYY 11:59 PM </p>
                {!! Form::text('event_time', null, ['class' => 'form-control', 'id' => 'eventTime']) !!}
            </div>

            {{ method_field('put') }}
            <div class="form-group">
                    <input type="submit" value="Update Event" class="btn btn-primary">
                    <a href="{{ route('events.index')}}" class='btn btn-danger pull-right'>Go Back</a>
                </div>
            </form>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

@endif
<script src="/js/app.js"></script>
    
@endsection

