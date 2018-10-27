<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Transition Explorer</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('Landing-Page-Template-Bootstrap-master/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('Landing-Page-Template-Bootstrap-master/css/mdb.min.css') }}" rel="stylesheet">

    <style type="text/css">
        html,
        body,
        header,
        .intro-2 {
          height: 100%;
        }

        @media (min-width: 560px) and (max-width: 740px) {
            html,
            body,
            header,
            .intro-2 {
              height: 500px;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .intro-2 {
              height: 500px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #3e4551!important;
            }
            .navbar {
              box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12) !important;
            }
        }
    </style>
</head>

<body class="medical-lp">

    <!--Navigation & Intro-->
    <header>

        <!--Intro Section-->
        <section class="view intro-2" style="background-image: url('https://mdbootstrap.com/img/Others/doctor.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="mask rgba-blue-strong">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="row flex-center pt-5 mt-1">
                        <div class="col-md-12 col-lg-6 text-center text-md-left margins">
                        <div class="container white-text text center">
                        <h2 class="text-center text-white text-uppercase font-weight-bold mt-1 mb-2 pt-3">My Transition Explorer</h2>
                        <div class="content d-flex justify-content-center align-items-center mb-3">
                             <img src="{{url('logo.jpeg')}}" alt="Image" width="200" height="200"/>

                       </div>
                       
                                <h5 class="text-center w-responsive mx-auto mb-3">An Application that assists young patients with transitioning
                                   from pediatric care to adult care, through reminders of different steps and milestones related to the transition! </h5>
                                
                             <div class="content d-flex justify-content-center align-items-center">

                                <a href="{{ url('register') }}" class=" btn btn-blue btn-rounded blue-text font-weight-bold ml-lg-0">Create An Account</a>
                                <a href="{{ url('login') }}" class="btn btn-outline-white btn-rounded font-weight-bold" >Log In</a>
                             </div>   

                            </div>
                      
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!--/Navigation & Intro-->

    <!--Main content-->
    <main>

        <div class="container">

            <!--Section: Features v.1-->
            <section id="features" class="section feature-box mt-4 mb-5 pb-5">

                <!--Section heading-->
                <h3 class="text-center mb-5 mt-5 pt-5 font-weight-bold dark-grey-text">Why Use My Transition Explorer</h3>
                <!--Section sescription-->
                <p class="text-center grey-text w-responsive mx-auto mb-5">
                With the advent of medical advances over the past 60 years,
                patients with chronic medical diseases that began in childhood, 
                such as congenital heart disease have had significant improvements 
                in their quality of life and longevity.  As this unique patient population 
                grows older, many of them are transitioned from their pediatricians, 
                who are have taken care of them since they were infants or children, 
                to adult physicians, who are tasked with caring for potentially complicated 
                new patients, as many of them had multiple surgeries, medications, and 
                complications of their underlying disease. The "transition" period from
                ages 13 to 25 is a difficult period for patients as they move from one
                physician to another and researchers have shown that adolescents and 
                young adults with chronic medical conditions can have increased
                hospitalizations and loss of follow up as they transition to an 
                adult provider. This application will help young patients with transitioning
                from pediatric care to adult care.  </p>

                <!--First row-->
                <div class="row features-big my-4 text-center">
                    <!--First column-->
                    <div class="col-md-4 mb-4" >
                        <div class="card hoverable h-100">
                            <i class="fa fa-edit blue-text mt-3 fa-3x my-4"></i>
                            <h5 class="font-weight-bold mb-4">Transition Survey</h5>
                            <p class="grey-text font-small mx-3">A simple easy to understand survey which focuses on three major areas in your transition: Self-Care, 
                                Health Awareness, and Communication. Take this survey every 3-6 months for best results.</p fa-3x mb-4>
                        </div>
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-md-4 mb-4">
                        <div class="card hoverable h-100">
                            <i class="fa fa-heartbeat blue-text mt-3 fa-3x my-4"></i>
                            <h5 class="font-weight-bold mb-4">Milestones Timeline</h5>
                            <p class="grey-text font-small mx-3">Milestones help keep us on track! See your personalized timeline change
                                everytime you take the survey!
                            </p>
                        </div>
                    </div>
                    <!--/Second column-->

                    <!--Third column-->
                    <div class="col-md-4 mb-4">
                        <div class="card hoverable h-100">
                            <i class="fa fa-line-chart blue-text mt-3 fa-3x my-4"></i>
                            <h5 class="font-weight-bold mb-4">Graphical Transition</h5>
                            <p class="grey-text font-small mx-3">See your improvements overtime as you take  
                                 the transition survey in graphical format.</p>
                        </div>
                    </div>
                    <!--/Third column-->
                </div>
                <!--/First row-->

                <!--First row-->
                <div class="row features-big my-4 text-center">
                    <!--First column-->
                    <div class="col-md-4 mb-4" >
                        <div class="card hoverable h-100">
                            <i class="fa fa-book blue-text mt-3 fa-3x my-4"></i>
                            <h5 class="font-weight-bold mb-4">Educational Modules</h5>
                            <p class="grey-text font-small mx-3">Learn about how to take care of yourself, communicate and how to be aware of your health problems.</p fa-3x mb-4>
                        </div>
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-md-4 mb-4">
                        <div class="card hoverable h-100">
                            <i class="fa fa-sticky-note blue-text mt-3 fa-3x my-4"></i>
                            <h5 class="font-weight-bold mb-4">Notes</h5>
                            <p class="grey-text font-small mx-3"> Do you need to add a quick note or question to ask your doctor the next time you see him/ her?
                                The notes to self section allows you to create, edit and delete as many notes as you want!
                            </p>
                        </div>
                    </div>
                    <!--/Second column-->

                    <!--Third column-->
                    <div class="col-md-4 mb-4">
                        <div class="card hoverable h-100">
                            <i class="fa fa-calendar blue-text mt-3 fa-3x my-4"></i>
                            <h5 class="font-weight-bold mb-4">Reminders Calendar</h5>
                            <p class="grey-text font-small mx-3">A calendar where you can add your appointments, 
                                or add reminders to yourself!
                            </p>
                        </div>
                    </div>
                    <!--/Third column-->
                </div>
                <!--/First row-->


            </section>
            <!--/Section: Features v.1-->
        </div>

        

        </div>

    </main>
    <!--/Main content-->

    <!--Footer-->
    <footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

        <div style="background-color: #0288d1;">
            <div class="container">
                    
            </div>
        </div>    
        <!-- Copyright-->
        
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2018-2019 Copyright: <a href=""> My Transition Explorer </a>
            </div>
        </div>
        <!--/.Copyright -->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="./public/Landing-Page-Template-Bootstrap-master/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="./public/Landing-Page-Template-Bootstrap-master/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="./public/Landing-Page-Template-Bootstrap-master/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="./public/Landing-Page-Template-Bootstrap-master/js/mdb.min.js"></script>

    <script>
      
        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });
    </script>
    

</body>

</html>
