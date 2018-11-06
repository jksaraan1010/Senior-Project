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
               
                   
                       <input type="button" 
                       onClick="window.print()" 
                       value="Print This Page"/>
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
                 username or password. </p>
                <p>This page also includes a section to add your doctor information. To add more doctors
                 click on the plus sign, which will add another card for you. To update a doctor's information,
                 simply go to the card of the doctor you would like to update his/ her information
        
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
                  Reminder's Calendar
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p> A useful tool to keep track of your events 
                is a calendar. The reminder's calendar includes a calendar, which can be viewed in a monthly,
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
              You will then be directed to the main reminder's calendar page. If you do not want to delete the event, and edit it instead, 
              locate the event and click on the 'Edit' button. This will take you to another page where you can update the event information. 
             Once you've updated the event click on the 'Update Event' button, which will update the event and take you back to the main Reminder's calendar page.
            If you've decided not to update the event simply click on the 'Go Back' button which will take you back to the Reminder's Calendar Page.  </p>
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
                  Survey- Take Survey 
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
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
                  Survey- View Past Results
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
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
                  Survey- View Table
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
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
                  Survey- View Graph 
                </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
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

