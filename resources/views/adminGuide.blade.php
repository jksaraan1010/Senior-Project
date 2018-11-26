@extends('layouts.master')

@section('content')
@if(Auth::user()->role_id == 1)
  <!-- Main content -->
  <section class="content">


<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Admin Guide</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
             <li class="breadcrumb-item active"> Admin Guide </li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->           
          <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <br>
      <a onClick="window.print()" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
      <a href= "/EmailNotes" onclick="return true;" target="_blank" class="btn btn-default"><i class="fa fa-envelope"></i> Email</a>
  <br>
  <br>

     <div class="card card-default">
          <div class="card-header bg-primary">
            <h5>
            <i class="fas fa-user"></i>
               Admin Guide
            </h5>
          </div>
          <div class="card-body">

            <div class="row">
              
              <p> Dear {{ Auth::user()->name }},</p>
              <p>
                This page will serve as a guide to the different pages in the application.</p> 
            
              
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

            <div class="row">
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header bg-primary">
                <h5>
                <i class="fas fa-tachometer-alt"></i>
                  Dashboard 
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <p>This is the home page of the application. Everytime you login you will land in this page.
                  On the top you will see a Menu. The menu will open a side bar in which you can click on a specific page, 
                  and you will be taken to that page.
                  You will also see a home icon which is available in every page. Clicking this icon will return you back to the dashboard. 
                  Next to the home icon is the logout icon. Once you click this icon, you are logged out of the account. It is best to close
                  your browser once you've logged out of the application. <p>
  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header bg-primary">
                <h5>
                <i class="fas fa-user-circle"></i>
                  User Profile
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <p>The user profile page is the page to go to when you need to update your 
                 username or password. </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
</div>
<br>
          <div class="row">
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header bg-primary">
                <h5>
                <i class="fas fa-info-circle"></i>
                  User Guide
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p> Similar to this page, the user guide 
                 will serve as a guide to the different pages in the application.  </P>
             
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
        
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header bg-primary">
                <h5>
                <i class="fas fa-pen"></i>
                  Assessment- Take Assessment 
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <p>  The transition assessment is a simple and easy to understand assesment which focuses on
                  three main areas in your transition: 
                  <ul>
                   <li> Self-Care.</li>
                   <li> Health Awareness.</li>
                   <li> Communication. </li>
                 </ul>
                </p>
                <p> The assessment consists of 12 questions, and should be taken once every 3-6 months.
                </p>
                <p> As an admin you will get access to the assessment to view it -as the user will see it-
                   while updating it. 
             </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
          </div>
<br>
          <div class="row">
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header bg-primary">
                <h5>
                <i class="fas fa-heartbeat"></i>
                  Timeline
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <p>Milestones help keep us on track! The timeline serves as a milestone guiding 
                 tracker in the following three areas:
                 <ul>
                   <li> Self-Care.</li>
                   <li> Health Awareness.</li>
                   <li> Communication. </li>
                 </ul>
                </p>
                <p> The timeline milestones categorize the transition to adult care in three age 
                  categories: 
                  <ul>
                   <li> Ages 13-15</li>
                   <li> Ages 15-17</li>
                   <li> Ages 17-19 </li>
                 </ul>
              </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header bg-primary">
                <h5>
                <i class="fas fa-book"></i>
                  Topics
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p> This is the page where you, the admin, can add a new topic or section to the 
                assessment, as well as view, edit or delete a previous topic. In order to add questions
                under a specific topic, the topic must be created first. 

              </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header bg-primary">
                <h5>
                <i class="fas fa-question"></i>
                  Questions
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p> This is the page where you, the admin, can add, edit or delete assessment questions.
                  Each question comes with up to 5 multiple choice options. Only one of the options can be 
                  chosen as the 'correct' option. 
                
              </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header bg-primary">
                <h5>
                <i class="fas fa-hand-holding-heart"></i>
                  Modules- Self-Care Module
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <p> The purpose of this page is to add, edit or delete sections of the Self-Care Module
                 Each section will be shown as a different card to the user. 
               </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
          </div>
<br>
          <div class="row">
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header bg-primary">
                <h5>
                <i class="fas fa-comments"></i>
                  Modules- Communication Module
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p> The purpose of this page is to add, edit or delete sections of the Communication Module
                 Each section will be shown as a different card to the user. 
               </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
 
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header bg-primary">
                <h5>
                <i class="fas fa-briefcase-medical"></i>
                  Modules- Health Awareness Module
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p> The purpose of this page is to add, edit or delete sections of the Health Awareness Module
                 Each section will be shown as a different card to the user. 
               </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
</div>
<br>
          <div class="row">
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header bg-primary">
                <h5>
                <i class="fas fa-users"></i>
                  User Management-Users
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <p>This is the page where the admin can see the current users of the application. 
                 Names, email adresses as well as roles can be viewed. The admin can also 
                 edit or delete a user.  By editing a user, the admin can change the user's name, 
                 email address, password (passwords are encrypted and cannot be seen by anyone).
                 The admin can also change the role of the user: administrator, patient or family member. In addition, the admin can add a new user.

            
                </p>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header bg-primary">
                <h5>
                <i class="fas fa-comments"></i>
                  Terms and Conditions
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <p> The admin can add, edit or delete the terms and conditions of the 
                 application at anytime from this page. 
                </p>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
 </div>
 <br>
</div>
@endif
    @endsection

