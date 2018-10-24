@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
               
                   
                       <input type="button" 
                       onClick="window.print()" 
                       value="Print This Page"/>
                       <br>

          

  <br>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
<link rel="stylesheet" href="{{asset('css/tmline.css')}}">
 <div class="container">
      <div class="timeline">
        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Self-Care</h3>
            <label class="container">Start taking medication by yourself without reminders 
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
            <label class="container">Learn to be comfortable taking care of yourself
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label> 
        </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time>13-15</time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Health Awareness</h3>
            <label class="container">Learn about your medical conditions and medications 
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
            <label class="container">Understand what complications may come from your medical conditions
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
        </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Communication</h3>
            <label class="container">Understand that you will see an adult doctor in the next few years 
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
            <label class="container">Start to speak with the doctor by yourself without help from family or friends
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
        </div>

          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Self-Care</h3>
            <label class="container">Be able to take medication by yourself without any help 
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
            <label class="container">Feel comfortable taking care of yourself
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
         </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time>15-17</time>
          </div>
        </div>

      <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Health Awareness</h3>
            <label class="container">Know your complete medical history and medications 
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
            <label class="container">Know what to do and who to talk to when you feel ill  
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
         </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Communication</h3>
            <label class="container">Be able to talk to your doctors and nurses by yourself
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
            <label class="container">Know how to call the doctor's office if you feel ill  
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
         </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Self-Care</h3>
            <label class="container">Know how to get your medications refilled 
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
            <label class="container">Know how to arrange for transportation to your doctor's appointment
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
          </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time>17-19</time>
          </div>
        </div>

      <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Health Awareness</h3>
            <label class="container">Learn what type of insurance you have and how to apply for it  
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
            <label class="container">Know which doctors you need to see and why you are seeing them
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
          </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Communication</h3>
            <label class="container">Feel prepared to transition from your current doctor to an adult doctor
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
            <label class="container">Be able to schedule doctor's appointments by yourself
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
          </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>
      </div>
    </div>

<h1></h1>


<div class="container">
      <div class="timeline">
        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Self-Care</h3>
            <label class="container">Start taking medication by yourself without reminders 
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label> 
            <label class="container">Learn to be comfortable taking care of yourself
              <input type="checkbox" disabled="disabled" id="checkBox">
              <span class="checkmark"></span>
            </label>
        </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time>13-15</time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Health Awareness</h3>
            <label class="container">Learn about your medical conditions and medications 
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
            <label class="container">Understand what complications may come from your medical conditions
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
        </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Communication</h3>
            <label class="container">Understand that you will see an adult doctor in the next few years 
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
            <label class="container">Start to speak with the doctor by yourself without help from family or friends
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
        </div>

          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Self-Care</h3>
            <label class="container">Be able to take medication by yourself without any help 
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
            <label class="container">Feel comfortable taking care of yourself
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
         </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time>15-17</time>
          </div>
        </div>

      <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Health Awareness</h3>
            <label class="container">Know your complete medical history and medications 
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
            <label class="container">Know what to do and who to talk to when you feel ill  
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
         </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Communication</h3>
            <label class="container">Be able to talk to your doctors and nurses by yourself
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
            <label class="container">Know how to call the doctor's office if you feel ill  
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
         </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Self-Care</h3>
            <label class="container">Know how to get your medications refilled 
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
            <label class="container">Know how to arrange for transportation to your doctor's appointment
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
          </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time>17-19</time>
          </div>
        </div>

      <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Health Awareness</h3>
            <label class="container">Learn what type of insurance you have and how to apply for it  
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
            <label class="container">Know which doctors you need to see and why you are seeing them
              <input type="checkbox"  disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
          </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Communication</h3>
            <label class="container">Feel prepared to transition from your current doctor to an adult doctor
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
            <label class="container">Be able to schedule doctor's appointments by yourself
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
            </label>
          </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

      </div>
    </div>
@endsection