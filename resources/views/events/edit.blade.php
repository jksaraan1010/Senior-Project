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
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-light">
        <tr>
            <th> Name</th>
            <th> Start Time</th>
            <th> End Time </th>
            <th> Edit</th>
            <th> Delete</th>
        </tr>
        </thead>
        @foreach($events as $event)
            <tbody>
            <tr>
                <td>{{$event->event_name}}</td>
                <td>{{$event->start_date}}</td>
                <td>{{$event->end_date}}</td>

                <th><a href="{{action('EventsController@edit',$event['id'])}}" class="btn btn-success"> Edit</a>
                </th>
                <th>
                    <form method="post" action="{{action('EventsController@destroy', $event['id'])}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="Delete" />
                        <button type="submit" class="btn btn-danger" > Delete </button>
                    </form>
                </th>
            </tr>
            </tbody>
        @endforeach
    </table>

</div>
@endsection
