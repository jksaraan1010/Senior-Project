@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@section('content')

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
              <li class="breadcrumb-item active">Calendar </li>
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
      <div class="row">
          <div class="col-12">
            <div class="card card-default">
              <div class="card-header bg-primary">
                <h5> <i class="fas fa-calendar"></i> List of Events</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table id="events" class="table table-hover">
                  <tr>
                  <th> Event Name</th>
                  <th> Event Date and Time Range</th>
                  <th> Edit</th>
                  <th> Delete</th>
                  </tr>
                  @foreach($events as $event)
            <tbody>
            <tr>
                <td>{{$event->event_name}}</td>
                <td>{{$event->event_time}}</td>
               

                <th><a href="{{action('EventsController@edit', $event['id'])}}" class="btn btn-primary btn-rounded mb-4">Edit</a>
                </th>
                <th>
                    <form method="post" action="{{action('EventsController@destroy', $event['id'])}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="Delete" />
                        <button type="submit" class="btn btn-danger btn-rounded mb-4"> Delete  </button>
                    </form>
                </th>
            </tr>
            </tbody>
        @endforeach
    </table>

              <!-- /.card-body -->
     </div>
            <!-- /.card -->
            </div>
</div>
</div>
</div>
</div>          

    @endsection


        
