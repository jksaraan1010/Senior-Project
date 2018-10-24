@extends('layouts.master')

@section('content')
  <!-- Main content -->
  <section class="content">


<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Self-Care Module</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
             <li class="breadcrumb-item active"> Self-Care Module </li>
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
            <i class="fas fa-hand-holding-heart"></i>
              Self-Care
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
          <div class="col-md-4">
            <div class="card h-100">
              <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-heart"></i>
                  Taking Care of Yourself
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul>
                  <li>Ask you parents and your doctor 
                      if you have restriction for any food or activity.</li>
                  <li>Remember your allergies!</li>
                  <li>Learn to put together a simple meal for yourself.</li>
                  <li>Try doing the daily chores by yourself.</li>    
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
          <div class="col-md-4">
            <div class="card h-100">
              <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-prescription"></i>
                  Taking Medications
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul>
                  <li>Make a list of your medications, 
                      dose and frequency (how many times in a day).</li>
                  <li>Take your medications yourself! Try to 
                      remember and avoid using reminders for medications. </li>
                  <li>Ask your parent what pharmacy you use and make
                       a note in your diary.</li>
                  <li>Try to refill your own medication 
                      at the pharmacy next time.</li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
          <div class="col-md-4">
            <div class="card h-100">
              <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-taxi"></i>
                  Transportation
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul>
                  <li>Learn how to contact the transportation.</li>
                  <li>At the next doctor’s visit, try calling in for 
                      transportation yourself.</li>
                </ul>
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

