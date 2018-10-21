@extends('layouts.master')

@section('content')
  <!-- Main content -->
  <section class="content">


<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Communication Module</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active"> Communication Module </li>
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
          <div class="card-header">
            <h3 class="card-title">
            <i class="fas fa-comments"></i>
              Communication 
            </h3>
          </div>
          <div class="card-body">

            <div class="row">
              
              <p> Maintain a diary with your 
                  health records and can keep it with you at all times.</p>
            
              
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
              <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-link"></i>
                  Communication Essentials
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul>
                  <li> Know your doctor’s name and the phone number for their office.</li>
                  <li> If you see more than one doctor, understand what concern does each doctor address. </li>
                  <li> For your next visit, ask your parent/guardian to let you call the doctor’s office and set up the appointment.  </li>
                  <li> At the appointment, ask your parent/guardian to let you talk with the doctor.</li>
                  <li> Ask questions about your health, medication and anything else you would like to know.</li>
                  <li> Learn how to reach out to transportation. Try calling 
                    in for transportation yourself at the next doctor’s visit.</li>    
                  <li> Make a note of all the above information in your diary.</li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->


          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-user-md"></i>
                  Transition
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul>
                  <li>Did you know that your current pediatric doctor can see you until you reach the age of 18? 
                    After that, you would be seen by an adult doctor.</li>
                  <li>Do you or your parents know who you would see? </li>
                  <li>If you have any concerns about seeing the adult doctor, discuss it with your current doctor.</li> 
                  <li>If you need help choosing an adult doctor, ask your current doctor for recommendations.</li>   
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
</div>
       
</div>
    @endsection

