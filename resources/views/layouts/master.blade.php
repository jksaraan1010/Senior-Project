<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>My Transition Explorer</title>
  <link rel="stylesheet" href="/myapp/final/public/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
  </nav>


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="mte.ico" alt="mte Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">My Transition <br> Explorer</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="boy.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">
            {{ Auth::user()->name }}
            </a>
         </div>
      </div>

<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
       <li class="nav-item">
          <router-link to="/dashboard" class="nav-link">
            <i class="fas fa-tachometer-alt"></i>
             <p>
                Dashboard
             </p>
          </router-link>
       </li>
       <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="fas fa-tachometer-alt"></i>
             <p>
                Timelime
             </p>
          </a>
       </li>
       <li class="nav-item">
          <a href="#" class="nav-link">
             <i class="fas fa-question"></i>
             <p>
                Survey
             </p>
          </a>
       </li>
       <li class="nav-item has-treeview">
          <a href="#" class="nav-link ">
              <i class="fas fa-bell"></i>
             <p>
                Reminders
                <i class="right fa fa-angle-left"></i>
             </p>
          </a>
          <ul class="nav nav-treeview">
             <li class="nav-item">
             <a href="{{ route('events.index') }}" class="nav-link active">
                    <i class="fas fa-calendar-alt"></i>
                  <p>Calender</p>
                </a>
             </li>
             <li class="nav-item">


                
             





                <a href="{{ route('notes.index') }}" class="nav-link">
                    <i class="fas fa-sticky-note"></i>
                   <p>Notes</p>
                </a>
             </li>
          </ul>
       </li>
       <li class="nav-item">
          <router-link to="/profile" class="nav-link">
            <i class="fas fa-user"></i>
            <p>
                Profile
             </p>
          </router-link>
       </li>
       <li class="nav-item">
          <a href="#" class="nav-link"
             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
             <i class="fas fa-power-off"></i> Log out
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
             </form>
             </p>
          </a>
    </ul>
 </nav>
 <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <router-view></router-view>

        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Graph</h5>

                <p class="card-text">
                
                </p>

    
              </div>
            </div>

            
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Timeline</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title"></h6>

                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">placeholder</a>
              </div>
            </div>

            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="--">My Transition Explorer</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src="/myapp/final/public/js/app.js"></script>
</body>
</html>
