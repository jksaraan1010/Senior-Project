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

 <button type="submit"> <a onClick="window.print()"> Print this page</a></button>
 <button type="submit"> <a href="/MailEvents">Email this page</a></button>
<br>
<br>
 <!-- Main content -->
 <div class="content">
      <div class="container-fluid">

<div class="card card-default">
          <div class="card-header bg-primary">
            <h5><i class="fas fa-marker"></i> Add A New Note</h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <form class="form-inline" action="{{ route('notes.store') }}" method="post">
                    {{csrf_field()}}
                    <div class="col">
                        <input class="form-control" type="text" name="newNoteName" placeholder="Enter a new note">
                    </div>

                    <div class="col">
                        <input class="btn btn-success btn-block" type="submit" value="Add Note">
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

            @if (count($storedNotes) > 0)

    <div class="row">
          <div class="col-12">
            <div class="card card-default">
              <div class="card-header bg-primary">
                <h5><i class="fas fa-clipboard-list"></i> List of Notes</h5>
             </div>
              <!-- /.card-header -->
         <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>Note</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  @foreach ($storedNotes as $storedNotes)
                  <tr>
                     <td>{{ $storedNotes->name }}</td>
                     <td><a href="{{ route('notes.edit', ['notes'=>$storedNotes->id]) }}" class='btn btn-primary'>Edit</a></td>
                     <td>
                     <form action="{{ route('notes.destroy', ['notes'=>$storedNotes->id]) }}" method='post'>
                                    {{ csrf_field() }}
                         <input type="hidden" name='_method' value='Delete'>
                         <input type="submit" class='btn btn-danger' value='Delete'> 
                    </form>
                     </td>
                    </tr>
                    @endforeach
                </table>
            @endif                
             </div>
              <!-- /.card-body -->
          </div>
            <!-- /.card -->
</div>
</div>
</div>
</div>
                </div>
    </div>
                </div>
  </section>

@endsection
