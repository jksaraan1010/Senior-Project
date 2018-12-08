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
      <link rel="stylesheet" href="/css/custom.css">
      
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    
      
      <!-- bottom Script is for quiz/adminlte, yeahyea-->
      <link rel="stylesheet" href="{{asset('adminlte/css/app.css')}}">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <style type="text/css">
         .module_detail_card{
         padding: 20px!important;
         }
         .card-title {
         margin-bottom: 1.75rem;
         font-size: 20px;
         font-weight: 900;
         /*   border-bottom: 1px solid black;*/
         }
         .module_detail_title{
         border-bottom: 1px solid #E2E2E2;
         }
         .module_detail_description{
         margin-top: 20px;
         }
      </style>
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
         <img src='{{ asset("/mte.ico")}}' class="brand-image img-circle elevation-2"  alt="mte Image"  style="opacity: .8">
         <span class="brand-text font-weight-bold" style="font-size:80%;">My Transition Explorer</span>
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
                  @if(Auth::user()->isAdmin())
                  <li class="nav-item">
                     <a href="{{ route('adminGuide') }}" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>
                           Admin Guide
                        </p>
                     </a>
                  </li>
                  @endif
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
                           Calendar
                        </p>
                     </a>
                  </li>
                  @endif
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>
                           Assessment
                           <i class="fa fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="{{url('tests')}}" class="nav-link">
                              <i class="nav-icon fas fa-pen"></i>
                              <p>Take Assessment</p>
                           </a>
                        </li>
                        @if(!Auth::user()->isAdmin())
                        <li class="nav-item">
                           <a href="{{url('results')}}" class="nav-link">
                              <i class="nav-icon fas fa-chart-line"></i>
                              <p>View Past Results</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{url('ResultTable')}}" class="nav-link">
                              <i class="nav-icon fas fa-table"></i>
                              <p>Results Table </p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{url('ResultGraph')}}" class="nav-link">
                              <i class="nav-icon fas fa-chart-line"></i>
                              <p>Results Graph </p>
                           </a>
                        </li>
                        <!-- Assessment-->
                        @endif
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
                        @endif
                     </ul>
                  </li>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('Timeline') }}" class="nav-link">
                        <i class="nav-icon fa fa-heartbeat"></i>
                        <p>
                           Timeline
                        </p>
                     </a>
                  </li>
                  @if(Auth::user()->isAdmin())
                  <li class="nav-item">
                     <a href="{{ route('terms.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>Terms and Condition</p>
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
                  <li class="nav-item">
                     <a href="{{url('users')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>Users Management</p>
                     </a>
                  </li>
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
    
    @if($eventsUnderEdit->user_id == Auth::user()->id )
 
      <section class="content">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Calendar</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                        <li class="breadcrumb-item active"> Calendar </li>
                     </ol>
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
         <!-- /.content-header -->
         <div class="container">
            <div class="container-fluid">
               <br>
               
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
                <input type="text" class="form-control" name="event_time" placeholder="Event Time" id="eventTime" value="{{$eventsUnderEdit->event_time}}">
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
               </div>
      </section>
      @endif
      </div>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      <footer class="main-footer text-center">
      <strong>Copyright &copy; 2018-2019 <a href="https://www.transitionexplorer.com/" target="_blank">My Transition Explorer </a>.
         All rights reserved. <a href="{{ route('terms.show') }}" target="_blank"> Terms and Conditions </a>.</strong>
      </footer>
      <!-- REQUIRED SCRIPTS -->
      <script src="/js/app.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
      <link rel="stylesheet"  href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="/daterangepicker/daterangepicker-bs3.css">
      <script type="text/javascript" src="/daterangepicker/daterangepicker.js"></script>
      <script>
         $(function () {
           $('#eventTime').daterangepicker({
             timePicker         : true,
             timePickerIncrement: 15,
             format             : 'MM/DD/YYYY h:mm A'
           })
           
         })
      </script>
   </body>
</html>

 
 
