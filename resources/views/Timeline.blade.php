@extends('layouts.master')

@section('content')
<!-- Main content -->
 <section class="content"> 
   
   <!-- Content Header (Page header) -->
   <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Timeline</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                <li class="breadcrumb-item active"> Timeline </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="container">

              <div class="container-fluid">
</head>
<div class="container">

<div class="container-fluid">
  <br>
      <a class="print-btn" href="javascript:void(0)" onClick="window.print()"> Print this page</a>
 <a class="email-btn" href="/EmailTimeline" target="_blank" >Email this page </a>
  <br>
<br>
  <!-- row -->
  <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-primary">
                    Ages 13-15
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-stethoscope"></i>

              <div class="timeline-item">
              
                <h3 class="timeline-header">Self-Care</h3>

                <div class="timeline-body">
                  <ul>
                    <li> Start taking medication by yourself without reminders</li>
                    <li> Learn to be comfortable taking care of yourself</li>
                  </ul>
                </div>
        
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-heartbeat"></i>

              <div class="timeline-item">
                
                <h3 class="timeline-header"> Health Awareness</h3>
                <div class="timeline-body">
                  <ul>
                    <li> Learn about your medical conditions and medications</li>
                    <li> Understand what complications may come from your medical conditions</li>
                  </ul>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments"></i>

              <div class="timeline-item">
            
                <h3 class="timeline-header">Communication</h3>

                <div class="timeline-body">
                  <ul>
                    <li> Understand that you will see an adult doctor in the next few years</li>
                    <li> Start to speak with the doctor by yourself without help from family or friends</li>
                  </ul>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-primary">
                    Ages 15-17
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-stethoscope"></i>

              <div class="timeline-item">
              
                <h3 class="timeline-header">Self-Care</h3>

                <div class="timeline-body">
                 <ul>
                    <li> Be able to take medication by yourself without any help</li>
                    <li> Feel comfortable taking care of yourself</li>
                  </ul>
                </div>
        
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa  fa-heartbeat"></i>

              <div class="timeline-item">
                
                <h3 class="timeline-header"> Health Awareness</h3>

                <div class="timeline-body">
                <ul>
                    <li> Know your complete medical history and medications</li>
                    <li> Know what to do and who to talk to when you feel ill</li>
                  </ul>
                </div>
        
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments"></i>

              <div class="timeline-item">
            
                <h3 class="timeline-header">Communication</h3>

                <div class="timeline-body">
                <ul>
                    <li> Be able to talk to your doctors and nurses by yourself</li>
                    <li> Know how to call the doctor's office if you feel ill</li>
                  </ul>
              </div>
            </li>
            <!-- END timeline item -->
             <!-- timeline time label -->
             <li class="time-label">
                  <span class="bg-primary">
                    Ages 17-19
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-stethoscope"></i> 

              <div class="timeline-item">
              
                <h3 class="timeline-header">Self-Care</h3>

                <div class="timeline-body">
                <ul>
                    <li> Know how to get your medications refilled</li>
                    <li> Know how to arrange for transportation to your doctor's appointment</li>
                  </ul>
                </div>
        
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-heartbeat"></i>

              <div class="timeline-item">
                
                <h3 class="timeline-header"> Health Awareness</h3>
                <ul>
                    <li> Learn what type of insurance you have and how to apply for it</li>
                    <li> Know which doctors you need to see and why you are seeing them</li>
                </ul>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments"></i>
              <div class="timeline-item">
            
                <h3 class="timeline-header">Communication</h3>

                <div class="timeline-body">
                <ul>
                    <li> Feel prepared to transition from your current doctor to an adult doctor</li>
                    <li> Be able to schedule doctor's appointments by yourself</li>
                </ul>
                </div>
              </div>
            </li>
            <!-- END timeline item -->

          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      </div>
</div>

@endsection