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
            <h1 class="m-0 text-dark">Notes To Self</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item active"> Notes To Self </li>
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
            <h5><i class="fas fa-edit"></i> Update Note</h5>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              <form action="{{ route('notes.update', [$notesUnderEdit->id]) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name='_method' value='put'>

                <div class="form-group">
                    <input type="text" name='updatedNoteName' class='form-control input-lg' value='{{ $notesUnderEdit->name }}'>
                </div>

                <div class="form-group">
                    <input type="submit" value='Update Note' class='btn btn-primary'>
                    <a href="{{ route('notes.index')}}" class='btn btn-danger pull-right'>Go Back</a>
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
</div>
</div>
@endsection