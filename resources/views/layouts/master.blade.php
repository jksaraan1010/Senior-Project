<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');
?>
<?php 
   $module = \App\Module::All(); //get all records review tables 
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>My Transition Explorer</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="/css/app.css">
      <link rel="stylesheet" href="/css/custom.css">
      <!-- bottom Script is for quiz/adminlte, yeahyea-->
      <link rel="stylesheet" href="{{asset('adminlte/css/app.css')}}">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!-- print css -->
     
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
            <img src='{{ asset("/mte.ico")}}' class="brand-image img-circle elevation-2"  alt="mte Image" style="width:40px;height:40px;"  style="opacity: 5.8">
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
                     <a  href="{{ route('userProfile.index') }}" class=" d-block"> {{ Auth::user()->name }}</a>
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
                           <p>User Management</p>
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
            <section class="content">
               @yield('content')
            </section>
         </div>
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
      </div>
      <footer class="main-footer text-center">
         <strong>Copyright &copy; 2018-2019 <a href="https://www.transitionexplorer.com/" target="_blank">My Transition Explorer </a>.
         All rights reserved. <a href="{{ route('terms.show') }}" target="_blank"> Terms and Conditions </a>.</strong>
      </footer>
    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     
 
      <!-- bottom Script is for quiz/adminlte-->
      <script src="{{asset('adminlte/js/app.js')}}"></script>
      <script src="{{asset('adminlte/ckeditor/ckeditor.js')}}"></script>
            <!-- bottom Script is for chartjs, and actually making thr graph with data in controller-->

      <script>
         <?php if(isset($graphJsonTotal)&& isset($graphJsonSection1) && isset($graphJsonSection2) && isset($graphJsonSection3)) { ?>
         var jsonResultCodeTotal = <?php echo $graphJsonTotal;?>;
         var resultCode = [];
         $.each(jsonResultCodeTotal, function(key, val) {
         $.each(val, function(k, v) {
         resultCode += v + ",";
         });
         });
         resultCode = resultCode.replace(/,\s*$/, "");
         var arrayResultcodeTotal = JSON.parse("[" + resultCode + "]");
         
         var jsonResultCodeSection1 = <?php echo $graphJsonSection1;?>;
         var resultCode = [];
         $.each(jsonResultCodeSection1, function(key, val) {
         $.each(val, function(k, v) {
         resultCode += v + ",";
         });
         });
         resultCode = resultCode.replace(/,\s*$/, "");
         var arrayResultcodeSection1 = JSON.parse("[" + resultCode + "]");
         var jsonResultCodeSection2 = <?php echo $graphJsonSection2;?>;
         var resultCode = [];
         $.each(jsonResultCodeSection2, function(key, val) {
         $.each(val, function(k, v) {
         resultCode += v + ",";
         });
         });
         resultCode = resultCode.replace(/,\s*$/, "");
         var arrayResultcodeSection2 = JSON.parse("[" + resultCode + "]");
         var jsonResultCodeSection3 = <?php echo $graphJsonSection3;?>;
         var resultCode = [];
         $.each(jsonResultCodeSection3, function(key, val) {
         $.each(val, function(k, v) {
         resultCode += v + ",";
         });
         });
         resultCode = resultCode.replace(/,\s*$/, "");
         var arrayResultcodeSection3 = JSON.parse("[" + resultCode + "]");
         
         var jsonDateTaken = <?php echo $graphDateJson; ?>;
         var dateTaken = [];
         $.each(jsonDateTaken, function(key, val) {
         $.each(val, function(k, v) {
         dateTaken += '"' + v + '"' + ",";
         });
         });
         dateTaken = dateTaken.replace(/,\s*$/, "");
         var arrayDateTaken = JSON.parse("[" + dateTaken + "]");
         var lineChartTest = document.getElementById("line-chart").getContext("2d");
         var chart_variable = new Chart(lineChartTest, {
         type: 'line',
         data: {
         labels: arrayDateTaken,
         datasets: [{
         data:arrayResultcodeTotal,
         label: "Total Score",
             borderColor: "#061CD1",
             fill: true,
             borderColor: 'rgba(6, 28, 209   , 0.75)',
             backgroundColor: 'rgba(6, 28, 209  , 0.3)',
             pointBorderColor: 'rgba(6, 28, 209  , 0)',
             pointBackgroundColor: 'rgba(6, 28, 209  , 0.9)',
             pointBorderWidth: 1
         },
         {
         data: arrayResultcodeSection1,
         label: "Self Care Score",
             borderColor: "#212F3D",
             fill: true,
             borderColor: 'rgba(33, 47, 61, 0.75)',
             backgroundColor: 'rgba(33, 47, 61 , 0.3)',
             pointBorderColor: 'rgba(33, 47, 61, 0)',
             pointBackgroundColor: 'rgba(33, 47, 61 , 0.9)',
             pointBorderWidth: 1
         //backgroundColor:"#C8F6FA"
         },
         
         {
         data: arrayResultcodeSection2,
         label: "Health Awareness Score",
             borderColor: "#D10615",
             fill: true,
             borderColor: 'rgba(209, 6, 21  , 0.75)',
             backgroundColor: 'rgba(209, 6, 21  , 0.3)',
             pointBorderColor: 'rgba(209, 6, 21  , 0)',
             pointBackgroundColor: 'rgba(209, 6, 21  , 0.9)',
             pointBorderWidth: 1
         
         
         //backgroundColor:"#E1E5E6"
         },
         {
         data: arrayResultcodeSection3,
         label: "Communication Score",
             borderColor: "#117A65",
             fill: true,
             borderColor: 'rgba(17, 122, 101  , 0.75)',
             backgroundColor: 'rgba(17, 122, 101  , 0.3)',
             pointBorderColor: 'rgba(17, 122, 101  , 0)',
             pointBackgroundColor: 'rgba(17, 122, 101  , 0.9)',
             pointBorderWidth: 1
         }
         ]
         },
         options: {
//backgroundColor:'rgb(10,10,10)',
         title: {
         display: true,
         text: 'Assessment Scores'
         },
         scales: {
         yAxes: [{
         ticks: {
         min: 0,
         max:12,
         stepSize: 1
         }
         }]
         },
         responsive: true,
         maintainAspectRatio: false
                  },
         });
         <?php } ?>
function downloadImage() {
   /* set new title */
// not needed as of now!
// chart_variable.options.title.text = 'New Chart Title';
   chart_variable.update({
      duration: 0
   });

   /* save as image */
   var link = document.createElement('a');
   link.href = chart_variable.toBase64Image();
   link.download = 'score.jpg';
   link.click();

   /* rollback to old title */
   chart_variable.options.title.text = 'Assessment Scores Over Time';
   chart_variable.update({
      duration: 0
   });
}
      </script>
      @yield('javascript')
   </body>
</html>
@stack('js')