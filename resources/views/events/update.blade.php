@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Reminders Calendar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Reminders Calendar </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
            <div class="container-fluid">

<div class="container">
    <form action="{{action('EventsController@update',$id)}}" method="post">
        {{csrf_field()}}
        <div style="margin-top:5%;">
            <h1> Update Event</h1>
            <hr>
            <input type="hidden" name="_method" value="Update" />
            <div class="form-group">
                <label> Name of Event </label>
                <input type="text" class="'form-control" name="event_name" placeholder="Event Name" value="{{$events->event_name}}">
            </div>

            <div class="form-group">
                <label> Start Time of Event </label>
                <input type="datetime-local" class="'form-control" name="start_date" placeholder="Event Start Time" value="{{$events->event_name}}">
            </div>

            <div class="form-group">
                <label> End Time of Event </label>
                <input type="datetime-local" class="'form-control" name="end_date" placeholder="Event End Time" value="{{$events->event_name}}">
            </div>

            {{ method_field('put') }}

            <button type="submit" name="submit" class="btn btn-warning"> Update Event </button>

        </div>
    </form>
</div>
@endsection
