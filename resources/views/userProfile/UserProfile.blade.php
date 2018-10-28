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
           <h1 class="m-0 text-dark">User Profile</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
             <li class="breadcrumb-item active"> User Profile</li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <div class="container">
           <div class="container-fluid">
               
                   

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
         <!-- Main content -->

 <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-user"></i> User Information</h3>
</div>

<!-- /.card-header -->
<div class="card-body">
    <div class="row">
    <div class="form-group col-md-12">
    <label for="disabledInput">Email </label>
    <input type="text" class="form-control" id="disabledInput" placeholder="{{ Auth::user()->email }}" disabled>
  </div>
    <div class="form-group col-md-6">   
      <label for="disabledInput1">Name</label>
      <input type="text" class="form-control" id="disabledInput1" placeholder="{{ Auth::user()->name }}" disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="updateUserName">Update Name</label>
      <input type="text" class="form-control" id="updateUserName" placeholder="{{ Auth::user()->name }}">
    </div>
    <div class="form-group col-md-6">   
      <label for="inputPassword">Current Password</label>
      <input type="password" class="form-control" id="inputPassword" placeholder="Enter Current Password">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Update Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Enter Updated Password">
    </div>
    
</div>
  <button type="submit" class="btn btn-block  btn-primary">Update User Information</button>
</div>
</div>
<br> <br>

<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-user-md"></i> Doctor Information</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-widget=""><i class="fa fa-plus"></i></button>
            </div>
</div>




<!-- /.card-header -->
<div class="card-body">
    <div class="row">
    <div class="form-group col-md-6">
      <label for="inputDoctorName">Name</label>
      <input type="text" class="form-control" id="inputDoctorName" placeholder="Doctor Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Doctor Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputSpeciality">Phone Number</label>
    <input type="text" class="form-control" id="inputNumber" placeholder="123-456-7890">
  </div>
  <div class="form-group ">
      <label for="inputSpecialty">Specialty</label>
      <select id="inputState" class="form-control">
        <option value="AM">Allergy and Immunology</option>
        <option value="ANSTH">Anesthesiology</option>
        <option value="DRM">Dermatology</option>
        <option value="DIAGRD">Diagnostic Radiology</option>
        <option value="ERMD">Emergency Medicine</option>
        <option value="FMLY">Family Medicine</option>
        <option value="GEN">General</option>
        <option value="INT">Internal Medicine</option>
        <option value="MEDGEN">Medical Genetics</option>
        <option value="NEUR">Neurology</option>
        <option value="NUCMD">Nuclear Medicine</option>
        <option value="OBSTGYN">Obstetrics and Gynecology</option>
        <option value="OPT">Opthalmology</option>
        <option value="PATH">Pathology</option>
        <option value="PED">Pediatrics</option>
        <option value="REHAB">Physical Medicine and Rehabilitation</option>
        <option value="PREV">Preventative Medicine</option>
        <option value="PSYCH">Psychiatry</option>
        <option value="RADONC">Radiation Oncology</option>
        <option value="SRG">Surgery</option>
        <option value="URG">Urology</option>
        <option value="OTHER">Other</option>
      </select>
    </div>
  <div class="form-group">
    <label for="inputAddress">Office Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Office Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Detroit">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option value="AL">Alabama (AL)</option>
        <option value="AK">Alaska (AK)</option>
        <option value="AZ">Arizona (AZ)</option>
        <option value="AR">Arkansas (AR)</option>
        <option value="CA">California (CA)</option>
        <option value="CO">Colorado (CO)</option>
        <option value="CT">Connecticut (CT)</option>
        <option value="DE">Delaware (DE)</option>
        <option value="DC">District Of Columbia (DC)</option>
        <option value="FL">Florida (FL)</option>
        <option value="GA">Georgia (GA)</option>
        <option value="HI">Hawaii (HI)</option>
        <option value="ID">Idaho (ID)</option>
        <option value="IL">Illinois (IL)</option>
        <option value="IN">Indiana (IN)</option>
        <option value="IA">Iowa (IA)</option>
        <option value="KS">Kansas (KS)</option>
        <option value="KY">Kentucky (KY)</option>
        <option value="LA">Louisiana (LA)</option>
        <option value="ME">Maine (ME)</option>
        <option value="MD">Maryland (MD)</option>
        <option value="MA">Massachusetts (MA)</option>
        <option selected value="MI">Michigan (MI)</option>
        <option value="MN">Minnesota (MN)</option>
        <option value="MS">Mississippi (MS)</option>
        <option value="MO">Missouri (MO)</option>
        <option value="MT">Montana (MT)</option>
        <option value="NE">Nebraska (NE)</option>
        <option value="NV">Nevada (NV)</option>
        <option value="NH">New Hampshire (NH)</option>
        <option value="NJ">New Jersey (NJ)</option>
        <option value="NM">New Mexico (NM)</option>
        <option value="NY">New York (NY)</option>
        <option value="NC">North Carolina (NC)</option>
        <option value="ND">North Dakota (ND)</option>
        <option value="OH">Ohio (OH)</option>
        <option value="OK">Oklahoma (OK)</option>
        <option value="OR">Oregon (OR)</option>
        <option value="PA">Pennsylvania (PA)</option>
        <option value="RI">Rhode Island (RI)</option>
        <option value="SC">South Carolina (SC)</option>
        <option value="SD">South Dakota (SD)</option>
        <option value="TN">Tennessee (TN)</option>
        <option value="TX">Texas (TX)</option>
        <option value="UT">Utah (UT)</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" placeholder="48211">
    </div>
  </div>
  <div class="form-group">
</div>
  <button type="submit" class="btn btn-block  btn-primary">Update Doctor Information</button>
</div>
 

@endsection