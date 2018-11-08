@extends('layouts.master')

@section('content')
  <!-- Main content -->
  <section class="content">


<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">User Guide</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
             <li class="breadcrumb-item active"> User Guide </li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <div class="container">
           <div class="container-fluid">
               
           <button type="submit"> <a onClick="window.print()"> Print this page</a></button>
 <button type="submit"> <a href="/Mail">Email this page</a></button>
    <br>
  <br>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

     <div class="card card-default">
          <div class="card-header bg-primary">
            <h5>
            <i class="fas fa-user"></i>
               User Guide
            </h5>
          </div>
          <div class="card-body">

            <div class="row">
              
              <p> Dear {{ Auth::user()->name }},</p>
              <p>Thank you for choosing My Transition Explorer to guide you or 
                your child, in the transition from pediatric care to adult care.
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
                <i class="fas fa-home"></i>
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
                <p>In the center of the page you will see several items such as the survey results graph or the Timeline
                    which will give you a gimpse of your results. To view the full page click on the view all link or go to the 
                  appropriate page from the sidebar. </p>
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
                 password and view account information </p>
                <p>This page also includes a section to add your doctor information. To add new doctor information
                at the bottom of the page. You must enter the name and email of your doctor, but any additional 
                information is optional. After enetering information of 5 doctors, you will not be able to add any
                more unless you delete one of your current doctors. You may also edit the information at any time.
        
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
                <i class="fas fa-calendar-alt"></i>
                  Calendar
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p> A useful tool to keep track of your events 
                is a calendar. The  calendar includes a calendar, which can be viewed in a monthly,
              weekly or daily layout. </P>
              <p>To Add an event to the calendar simply go to the event options box on the left of the calendar
                and click on 'Add Event'. A popup will appear, asking you to Enter the Event's information. Once you're 
              done adding the event information, simply click on the 'Add Event' button on the bottom of the popup. This will 
            close the popup and add the event to your calendar. If you decide you no longer want to add the event to your calendar
            once you opened the popup, you can simply click on the 'X' on the top right side of the popup which will close the popup 
            without adding an event. </p>
            <p> To edit an event simply go to the event options box on the left of the calendar
                and click on 'Edit Event'. This will take you to a new page, where you will see all your events sorted by the oldest start date and time. 
              If you would like to delete an event, click on 'Delete' button next to the event and it will be deleted.
              You will then be directed to the main calendar page. If you do not want to delete the event, and edit it instead, 
              locate the event and click on the 'Edit' button. This will take you to another page where you can update the event information. 
             Once you've updated the event click on the 'Update Event' button, which will update the event and take you back to the main calendar page.
            If you've decided not to update the event simply click on the 'Go Back' button which will take you back to the Calendar Page.  </p>
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
                <p>  The transition Assessment is a simple and easy to understand Assessment which focuses on
                  three main areas in your transition: 
                  <ul>
                   <li> Self-Care.</li>
                   <li> Health Awareness.</li>
                   <li> Communication. </li>
                 </ul>
                </p>
                <p> The Assessment consists of 12 questions, and should be taken once every 3-6 months.
                </p>
                <p> Once the assessment has been taken, and submitted, you will be taken to a detailed guide 
                 of your assessment results. The guide will contain the total assessment score, as well as 
                 as a breakdown of the score in each of the sections of the assessment. 
                 A link to the appropriate module will be available to review for each 
                 concern area.
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
                <i class="fas fa-check-circle"></i>
                  Assessment- View Past Results
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p> You've take the assessment, now you would like to review your current and 
                  past results, what should you do? The view past results page gives you an opportunity to view
                the date taken for a past assessment as well as the total score for that assessment. If you would like to 
              view  more detailed results of the assessment, which include a breakdown of the sections, as well as the 
            questions click on 'view'.</p>
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
                <i class="fas fa-table"></i>
                  Assessment- View Table
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p> If you've take at least one assessment, and want to quickly view the results of current 
                and past results in an easy to read table format, the assessment results table page contains 
                the following areas:
                <ul>
                   <li>Assessment Date Taken.</li>
                   <li> Self-Care Score.</li>
                   <li> Health Awareness Score.</li>
                   <li> Communication Score.</li>
                   <li> Total Score.</li>
                 </ul>

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
                <i class="fas fa-chart-line"></i>
                  Assessment- View Graph 
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p> If you've take at least one assessment, and want to quickly view the results of current 
                and past results in a graph format, the assessment results graph page will graph your results 
                over time in the following areas:
                <ul>
                   <li>Total Score.</li>
                   <li> Self-Care Score.</li>
                   <li> Health Awareness Score.</li>
                   <li> Communication Score.</li>
                    </ul>

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
               <p>The main purpose of this application is to guide you in your transition from pediatric care to 
                 adult care. The Self-Care Module consists of guiding lessons in the following three areas:
                 <ul>
                   <li>Taking Care of Yourself.</li>
                   <li> Taking Medications.</li>
                   <li> Transportation.</li>
                 </ul>
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
              <p>The main purpose of this application is to guide you in your transition from pediatric care to 
                 adult care. The Communication Module consists of guiding lessons in the following three areas:
                 <ul>
                   <li>General Communication.</li>
                   <li> Transition.</li>
                 </ul>
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
              <p>The main purpose of this application is to guide you in your transition from pediatric care to 
                 adult care. The Health Awareness Module consists of guiding lessons in the following three areas:
                 <ul>
                   <li>Medical History.</li>
                   <li> Medications.</li>
                   <li> Insurance. </li>
                   <li> What to do when I feel sick? </li>
                 </ul>
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
              <p>As you take the assessment, categoties that you've passed will be checked off, while
                categoties that need to be worked on will remain unchecked. The timeline will be updated
              based on the latest assessment taken. </p>
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
                <i class="fas fa-clipboard-list"></i>
                  Notes
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <p> Another useful page is the Notes To Self page. To add a new note simply type a note between 
                 3 and 255 characters long and click on the 'Add Note' button. </p> 
               <p> Once you have at least one note a box called 'List of Notes' will appear with all your notes.
                 To edit a note, locate the note and click on the 'Edit' button next to it. This will take you to a 
                 new page. You will see your current note. Click on 'Update Note' once you're done updating your note, or 
                 on 'Go Back' to go back without updating your note. </p>
                <p>If you would like to delete your note completely, click on the 'Delete' button next to the note. This will 
                  remove the note from your list. </p>
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
    @endsection

