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
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{url('home')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>


        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#" class="nav-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-home"></i>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </p>
                </a>
            </li>

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="nav-icon fa fa-bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>



            <li class="nav-item">
                <a href="#" class="nav-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
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
        <a href=" " class="brand-link">
            <img src="mte.ico" alt="mte Logo" class="brand-image img-circle "
                 style="opacity: .8">
            <span class="brand-text font-weight-light"> My Transition <br> Explorer</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">

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
                        <a href="{{ route('UserProfile') }}" class="nav-link">
                            <i class="nav-icon fa fa-heartbeat"></i>
                            <p>
                                User Profile
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <router-link to="/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </router-link>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('events.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-calendar-alt">  </i>
                            <p>
                                Reminders
                            </p>
                        </a>
                    </li>

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
                            <li class="nav-item">
                                <a href="{{url('results')}}" class="nav-link">
                                    <i class="nav-icon fas fa-chart-line"></i>
                                    <p>View Past Results</p>
                                </a>
                            <li class="nav-item">
                                <a href="{{url('ResultTable')}}" class="nav-link">
                                    <i class="nav-icon fas fa-chart-line"></i>
                                    <p>View Table </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('ResultGraph')}}" class="nav-link">
                                    <i class="nav-icon fas fa-chart-line"></i>
                                    <p>View Graph </p>
                                </a>
                            </li>
                        </ul>
                    </li>


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
                                <i class="nav-icon fas fa-comments"></i>
                                <p>{{$value->name}}</p>
                              </a>
                            </li>
                          @empty
                          @endforelse  <!-- added file -->
                          
                        </ul>
                      </li>
<!--
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-book"></i>
                            <p>
                                Modules
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('healthAwareness') }}" class="nav-link">
                                    <i class="nav-icon fas fa-briefcase-medical"></i>
                                    <p>Health Awareness</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('selfCare') }}"class="nav-link">
                                    <i class="nav-icon fas fa-hand-holding-heart"></i>
                                    <p>Self Care</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('communication') }}" class="nav-link">
                                    <i class="nav-icon fas fa-comments"></i>
                                    <p>Communication</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                -->

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
<!-- ./wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2018-2019 <a href="#"> My Transition Explorer </a>.</strong>
    All rights reserved.
</footer>

<!-- REQUIRED SCRIPTS -->
<script src="/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- bottom Script is for quiz/adminlte-->
<script src="{{asset('adminlte/js/app.js')}}"></script>
<script src="{{asset('adminlte/ckeditor/ckeditor.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
        <?php if(isset($graphJsonSection1) && isset($graphJsonSection2) && isset($graphJsonSection3)) { ?>
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
    new Chart(lineChartTest, {
        type: 'line',
        data: {
            labels: arrayDateTaken,
            datasets: [{
                data: arrayResultcodeSection1,
                label: "Self Care Score",
                borderColor: "#8205DE",
                fill: true,
                borderColor: 'rgba(153, 163, 164 , 0.75)',
                backgroundColor: 'rgba(153, 163, 164, 0.3)',
                pointBorderColor: 'rgba(153, 163, 164, 0)',
                pointBackgroundColor: 'rgba(153, 163, 164, 0.9)',
                pointBorderWidth: 1
                //backgroundColor:"#C8F6FA"
            },
                {
                    data: arrayResultcodeSection2,
                    label: "Health Awareness Score",
                    borderColor: "#738976",
                    fill: true,
                    borderColor: 'rgba(41, 128, 185, 0.75)',
                    backgroundColor: 'rgba(41, 128, 185, 0.3)',
                    pointBorderColor: 'rgba(41, 128, 185, 0)',
                    pointBackgroundColor: 'rgba(41, 128, 185, 0.9)',
                    pointBorderWidth: 1

                    //backgroundColor:"#E1E5E6"
                },
                {
                    data: arrayResultcodeSection3,
                    label: "Communication Score",
                    borderColor: "#B03449",
                    fill: true,
                    borderColor: 'rgba(255,160,122, 0.75)',
                    backgroundColor: 'rgba(255,160,122, 0.3)',
                    pointBorderColor: 'rgba(255,160,122, 0)',
                    pointBackgroundColor: 'rgba(255,160,122, 0.9)',
                    pointBorderWidth: 1
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Survey Scores Over Time'
            },
            scales: {
                yAxes: [{
                    ticks: {
                        min: 0,
                        stepSize: 1
                    }
                }]
            },
            responsive: true
        },
    });
    <?php } ?>


</script>




</body>
</html>
