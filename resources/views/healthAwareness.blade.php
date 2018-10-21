@extends('layouts.master')

@section('content')
  <!-- Main content -->
  <section class="content">


<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Health Awareness Module</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active"> Health Awareness Module </li>
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
            <i class="fas fa-briefcase-medical"></i>
              Health Awareness
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
                <i class="fas fa-notes-medical"></i>
                  Medical History
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul>
                  <li>Ask you parents:</li>
                    <ul> 
                        <li> What is your medical condition?  </li>
                        <li> How old were you when you first had the illness?  </li>
                        <li> How many times have you been admitted to the hospital? </li>
                        <li> Have you had any surgeries? When and what kind?</li>
                        <li>Do you have any implanted prosthetics or devices in your body? 
                            If yes, ask your parent if they have the details about the device?</li>    
                        <li>Any restrictions because of your illness.</li>
                    </ul>
                  <li> Make a note of these in your diary.</li>
                      
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
                <i class="fas fa-prescription-bottle"></i>
                  Medications
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul>
                  <li>Make a list of your medications, dose and frequency,
                       i.e. how many times in a day do you have to take it.</li>
                  <li>Ask your parents or doctor why you are taking each 
                      of these medications.  </li>
                  <li>Know if you are allergic to any medication.</li>
                  <li>Ask your doctor about side effects 
                      and what should you do if you have one?</li>
                   <li> Ask your doctor if there are any potential interactions
                        with other medications and anything that you should avoid?</li>  
                    <li>Keep the list updated.</li> 
                    <li>Ask your doctor about the need for antibiotics before
                         procedures such as dental work.</li>   
                </ul>
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
              <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-file-medical-alt"></i>
                  Insurance
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul>
                  <li>Ask the following:</li>
                    <ul> 
                        <li> What type of insurance do you have? 
                            Are you covered under your parents’ insurance plan or
                             an independent plan?</li>
                        <li> Is there a premium and who pays for it?</li>
                         <li> When do you need to renew or re-apply for your insurance? 
                             Try doing the paperwork yourself at the next renewal. </li>
                        <li> Who has your insurance card? If you don’t, please 
                            ask your parents for it and have it with you at all times.</li>
                    </ul>
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
                <i class="fas fa-syringe"></i>
                What to do when I feel sick?
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul>
                  <li>Know the contact information for your doctor’s office.</li>
                  <li>Learn how to contact transportation in case 
                      you need to visit the doctor or the emergency room.</li>
                <li> Ask your doctor if you have any rescue medications and how to take them. </li>
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

