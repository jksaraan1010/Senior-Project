<?php 
  $module = \App\Module::All(); //get all records review tables 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title> My Transition Explorer </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/app.css"> 

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    {!! $calendar_details->script() !!}
    
    <link rel="stylesheet"  href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
  <!-- bottom Script is for quiz/adminlte, yeahyea-->
  <link rel="stylesheet" href="{{asset('adminlte/css/app.css')}}"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-primary  navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i> Menu</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        
      </li>
      <li class="nav-item d-none d-sm-inline-block">
       
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
          <a href="{{url('home')}}" class="nav-link" >
             <i class="nav-icon fas fa-home" title="Home"></i> 
          </a>
      </li>

      <li class="nav-item">
          <a href="#" class="nav-link"
             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
             <i class="nav-icon fas fa-sign-out-alt" title="Log Out"></i> 
             <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                @csrf
             </form>
             </p>
          </a>
      </li>

    
    </ul>
  </nav>
  <!-- /.navbar -->

   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('home')}}" class="brand-link  bg-primary">
        <img src='{{ asset("/mte.ico")}}' class="brand-image img-circle elevation-3">
      <span class="brand-text text-lg-center font-weight-bold"> My Transition <br>    Explorer</span>
    </a>


 <!-- Sidebar -->
 <div class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src='{{ asset("/403.svg")}}'  class="img-circle elevation-2" alt="User Image">
        </div>

      <div class="info">    
          <a href="#" class=" d-block"> {{ Auth::user()->name }}</a>
        </div>

      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                         <li class="nav-item">
                        <a href="{{ route('userGuide') }}" class="nav-link">
                            <i class="nav-icon fas fa-info-circle"></i>
                            <p>
                                User Guide
                            </p>
                        </a>
                    </li>        
                    <li class="nav-item">
                        <a href="{{ route('userProfile.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user-circle"></i>
                            <p>
                                User Profile
                            </p>
                        </a>
                    </li>
                    @if(!Auth::user()->isAdmin())
                   
                    <li class="nav-item">
                        <a href="{{ route('events.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-calendar-alt">  </i>
                            <p>
                                Reminders
                            </p>
                        </a>
                    </li>
                    @endif
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                Survey
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('tests')}}" class="nav-link">
                                    <i class="nav-icon fas fa-pen"></i>
                                    <p>Take Survey</p>
                                </a>
                            </li>
                            @if(!Auth::user()->isAdmin())
                            <li class="nav-item">
                                <a href="{{url('results')}}" class="nav-link">
                                <i class="nav-icon fas fa-check-circle"></i>
                                    <p>View Past Results</p>
                                </a>
                            <li class="nav-item">
                                <a href="{{url('ResultTable')}}" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>View Table </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('ResultGraph')}}" class="nav-link">
                                    <i class="nav-icon fas fa-chart-line"></i>
                                    <p>View Graph </p>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </li>

                 @if(Auth::user()->isAdmin())
                    <li class="nav-item">
                        <a href="{{url('topics')}}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Topics
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('questions')}}" class="nav-link">
                            <i class="nav-icon fas fa-question"></i>
                            <p>
                                Questions
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('questions_options')}}" class="nav-link">
                            <i class="nav-icon fas fa-check-square"></i>
                            <p>
                                Question Options
                            </p>
                        </a>
                    </li>
                    
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fa fa-book"></i>
                          <p>
                            Modules
                            <i class="fa fa-angle-left right"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          @forelse($module as $key => $value)
                            <li class="nav-item">
                              <a href="{{ route('module_detail.index',['id' => $value->id]) }}" class="nav-link">
                              <i class="nav-icon fas fa-book-reader"></i>
                                <p>{{$value->name}}</p>
                              </a>
                            </li>
                          @empty
                          @endforelse  <!-- added file -->
                          
                        </ul>
                      </li>


                      @if(!Auth::user()->isAdmin())
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fa fa-users"></i>
                          <p>
                            User Management
                            <i class="fa fa-angle-left right"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{url('roles')}}" class="nav-link">
                              <i class="nav-icon fas fa-database"></i>
                              <p>Roles</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{url('users')}}" class="nav-link">
                              <i class="nav-icon fas fa-user-circle"></i>
                              <p>Users</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{url('user_actions')}}" class="nav-link">
                              <i class="nav-icon fas fa-sticky-note"></i>
                              <p>User Actions</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      @endif
                      @else
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fa fa-book"></i>
                          <p>
                            Modules
                            <i class="fa fa-angle-left right"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          @forelse($module as $key => $value)
                            <li class="nav-item">
                              <a href="{{ route('module_detail.show',['id' => $value->id]) }}" class="nav-link">
                              <i class="nav-icon fas fa-book-reader"></i>
                                <p>{{$value->name}}</p>
                              </a>
                            </li>
                          @empty
                          @endforelse
                        </ul>
                      </li>

                    @endif
                    
                    @if(!Auth::user()->isAdmin())

                    <li class="nav-item">
                        <a href="{{ route('Timeline') }}" class="nav-link">
                            <i class="nav-icon fa fa-heartbeat"></i>
                            <p>
                                Timeline
                            </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="{{ route('notes.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-clipboard-list"></i>
                            <p>
                                Notes
                            </p>
                        </a>
                    </li>
                
@endif

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
     
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

   <!-- Main content -->
   <section class="content">


<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Reminders Calendar</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
             <li class="breadcrumb-item active"> Reminders Calendar </li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <div class="container">
           <div class="container-fluid">
               
                   
                       <input type="button" 
                       onClick="window.print()" 
                       value="Print This Page"/>

               <button type="submit"> <a href="/EmailEvents">Email this page</a></button>


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
                   @endif
               </div>

  <br>

  <div class="container-fluid">
       <div class="row">
         <div class="col-md-3">
           <div class="card">
             <div class="card-header bg-primary">
               <h5 class="text-center"> <i class="fas fa-calendar-alt"></i> Event Options</h5>
             </div>
             <div class="card-body">
                   
               <!-- Button trigger modal -->
                 <div class="text-center">
                        <a href="/add" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#addModal">Add Event</a>
                 </div>

                 <div class="text-center">
                     <a href="/edit" class="btn btn-secondary btn-rounded mb-4">Edit Event</a>
                 </div>
               </div>
           </div>

         </div>
           <!-- /. box -->


         <div class="col-md-9">
           <div class="card card-primary">
             <div class="card-body p-0">
               <!-- THE CALENDAR -->
               <div id="calendar"></div>
               {!! $calendar_details->calendar() !!}
             </div>
             <!-- /.card-body -->
           </div>
           <!-- /. box -->
           
         </div>
         <!-- /.col -->

       </div>
       <!-- /.row -->


<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm" role="document">
       <div class="modal-content">
           <div class="modal-header text-center bg-primary">
               <h4 class="modal-title w-100 font-weight-bold">Add An Event</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body mx-2">
          
           {!! Form::open(array('route' => 'events.store','method'=>'post','files'=>'true')) !!}
                   
                     <div>
                       <div class="form-group">
                           {!! Form::label('event_name','Enter Event Name:') !!}
                           <div>
                           {!! Form::text('event_name', null, ['class' => 'form-control']) !!}
                           </div>
                       </div>
                     </div>

                     <div>
                       <div class="form-group">
                         {!! Form::label('start_date','Start Date and Time:') !!}
                         <div>
                         {!! Form::input('dateTime-local', 'start_date', null, ['class' => 'form-control']) !!}
                         </div>
                       </div>
                     </div>

                     <div>
                       <div class="form-group">
                         {!! Form::label('end_date','End Date and Time:') !!}
                         <div class="">
                         {!! Form::input('dateTime-local', 'end_date', null, ['class' => 'form-control']) !!}
                         </div>
                       </div>
                     </div>

                     <div class="modal-footer d-flex justify-content-center">
                     {!! Form::submit('Add Event',['class'=>'btn btn-block btn-primary']) !!}
                     </div>
                   </div>
                  {!! Form::close() !!}

           </div>   
       </div>
   </div>
</div>     


    </section>

  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; 2018-2019 <a href="#"> My Transition Explorer </a>.</strong>
  All rights reserved.
</footer>
<!-- REQUIRED SCRIPTS -->
<script>






</script>

 
<!-- REQUIRED SCRIPTS -->
<script src="/js/app.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet"  href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</body>
</html>