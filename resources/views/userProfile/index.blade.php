@extends('layouts.master')
<!---
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

-->

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
                <li class="breadcrumb-item active"> User Profile </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="container">
              <div class="container-fluid">
  
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <!-- Main content -->
 <div class="card card-default">
 <div class="card-header bg-primary">
 <h5 ><i class="fas fa-user"></i> User Information</h5>
</div>
<!-- /.card-header -->
<div class="card-body">
    <div class="row">
    <div class="form-group col-md-6">
    <label>User Name </label>
    <input type="text" class="form-control"  placeholder="{{ Auth::user()->name }}" disabled>
  </div>
    <div class="form-group col-md-6">   
      <label for="disabledInput1">User Email</label> 
      <input type="text" class="form-control"  placeholder="{{ Auth::user()->email }}" disabled>
    </div>
</div>
<div class="col-12 text-center">
  <a href="{{ route('updatePassword') }}" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">Update Password</a>
  @if(!Auth::user()->isAdmin())
  @if(count($docinfo) < 5)
  <a href="{{ route('userProfile.create') }}" class="btn btn-secondary" data-toggle="modal" data-target="#createModal" >Add A New Doctor</a>
  @else
  <a  class="btn btn-secondary" data-toggle="modal"  >Add A New Doctor</a>
  @endif
  @endif
</div>
</div>
</div>

<!-- Update Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm" role="document">
       <div class="modal-content">
           <div class="modal-header text-center bg-primary">
               <h5 class="modal-title w-100">Update Password</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body mx-2">
          
          
                {{ Form::open(array('url' => 'changePass', 'method' => 'post')) }}
                     <div>
                       <div class="form-group">
                       {{Form::label('oldpass', 'Current Password') }}
                           <div>
                           {{ Form::password('oldpass', null, array('class' => 'form-control')) }}
                           </div>
                       </div>
                     </div>

                     <div>
                       <div class="form-group">
                       {{Form::label('newpass', 'New Password') }}
                         <div>
                         {{ Form::password('newpass', null, array('class' => 'form-control')) }}
                         </div>
                       </div>
                     </div>

                     <div>
                       <div class="form-group">
                       {{Form::label('newpassconfirm', 'Confirm New Password') }}
                         <div class="">
                         {{ Form::password('newpassconfirm', null, array('class' => 'form-control')) }}
                         </div>
                       </div>
                     </div>

                     <div class="modal-footer d-flex justify-content-center">
                     {!! Form::submit('Update Password',['class'=>'btn btn-block btn-primary']) !!}
                     </div>
                   </div>
                  {!! Form::close() !!}

           </div>   
       </div>
   </div>    
   @if(count($docinfo) > 4)
<h3> No More Doctors Can Be Added</h3>
@endif
<!-- Create Doctor Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header text-center bg-primary">
               <h5 class="modal-title w-100">Add A New Doctor</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body mx-2">
           @if(count($docinfo) > 4)
            <h5>Sorry, only 5 doctors can be added at this time!</h5>
            @endif

               {{ Form::open(array('route' => 'userProfile.store', 'method' => 'post')) }}
                     <div>
                       <div class="form-group">
                       {{Form::label('name', 'Name') }}
                           <div>
                           {{ Form::text('name', null, array('class' => 'form-control')) }}
                           </div>
                       </div>
                     </div>

                     <div>
                       <div class="form-group">
                       {{Form::label('email', 'Email Address') }}
                         <div>
                         {{ Form::email('email', null, array('class' => 'form-control')) }}
                         </div>
                       </div>
                     </div>

                     <div>
                       <div class="form-group">
                       {{Form::label('phone', 'Phone Number') }}
                         <div class="">
                         {{ Form::text('phone', null, array('class' => 'form-control')) }}
                         </div>
                       </div>
                     </div>


                         <div>
                       <div class="form-group">
                       {{Form::label('specialty', 'Specialty') }}
                         <div class="">
                         {{Form::select('specialty', [
                                'Allergy and Immunology' => 'Allergy and Immunology', 
                                'Anesthesiology' => 'Anesthesiology',
                                'Dermatology' => 'Dermatology',
                                'Cardiology' => 'Cardiology',
                                'Diagnostic Radiology' => 'Diagnostic Radiology',
                                'Emergency Medicine' => 'Emergency Medicine',
                                'Family Medicine' => 'Family Medicine',
                                'Internal Medicine' => 'Internal Medicine',
                                'Medical Genetics' => 'Medical Genetics',
                                'Neurology' => 'Neurology',
                                'Nuclear Medicine' => 'Nuclear Medicine',
                                'Obstetrics and Gynecology' => 'Obstetrics and Gynecology',
                                'Opthalmology' => 'Opthalmology',
                                'Pathology' => 'Pathology',
                                'Pediatrics' => 'Pediatrics',
                                'Physcial Medicine and Rehabilitation' => 'Physcial Medicine and Rehabilitation',
                                'Preventative Medicine' => 'Preventative Medicine',
                                'Psychiatry' => 'Psychiatry',
                                'Radiation Oncology' => 'Radiation Oncology',
                                'Surgery' => 'Surgery',
                                'Urology' => 'Urology',
                                'Other' => 'Other',
                                
                                ], 'Cardiology')}}
                         </div>
                       </div>
                     </div>

                         <div>
                       <div class="form-group">
                       {{Form::label('address', 'Office Address') }}
                         <div class="">
                         {{ Form::text('address', null, array('class' => 'form-control')) }}
                         </div>
                       </div>
                     </div>

                        <div>
                       <div class="form-group">
                       {{Form::label('address2', 'Office Address 2') }}
                         <div class="">
                         {{ Form::text('address2', null, array('class' => 'form-control')) }}
                         </div>
                       </div>
                     </div>

                        <div>
                       <div class="form-group">
                       {{Form::label('city', 'City') }}
                         <div class="">
                         {{ Form::text('city', null, array('class' => 'form-control')) }}
                         </div>
                       </div>
                     </div>


                        <div>
                       <div class="form-group">
                       {{Form::label('state', 'State') }}
                         <div class="">
                         {{Form::select('state', [
                                'AL' => 'Alabama', 
                                'AK' => 'Alaska',
                                'AZ' => 'Arizona',
                                'AR' => 'Arkansas',
                                'CA' => 'California',
                                'CO' => 'Colorado',
                                'CT' => 'Conneticut',
                                'DE' => 'Delaware',
                                'DC' => 'District of Columbia',
                                'FL' => 'Florida',
                                'GA' => 'Georgia',
                                'HI' => 'Hawaii',
                                'ID' => 'Idaho',
                                'IN' => 'Illinois',
                                'IL' => 'Indiana',
                                'IA' => 'Iowa',
                                'KS' => 'Kansas',
                                'KY' => 'Kentucky',
                                'LA' => 'Louisiana',
                                'ME' => 'Maine',
                                'MD' => 'Maryland',
                                'MA' => 'Massachusetts',
                                'MI' => 'Michigan',
                                'MN' => 'Minnesota',
                                'MS' => 'Mississipi',
                                'MO' => 'Missouri',
                                'MT' => 'Montana',
                                'NE' => 'Nebraska',
                                'NV' => 'Nevada',
                                'NH' => 'New Hampshire',
                                'NJ' => 'New Jersey',
                                'NM' => 'New Mexico',
                                'NY' => 'New York',
                                'NC' => 'North Carolina',
                                'ND' => 'North Dakota',
                                'OH' => 'Ohio',
                                'OK' => 'Oklahoma',
                                'OR' => 'Oregon',
                                'PA' => 'Pennsylvania',
                                'RI' => 'Rhode Island',
                                'SC' => 'South Carolina',
                                'SD' => 'South Dakota',
                                'TN' => 'Tennessee',
                                'TX' => 'Texas',
                                'UT' => 'Utah',
                                'VT' => 'Vermont',
                                'VA' => 'Virginia',
                                'WA' => 'Washington',
                                'WV' => 'West Virginia',
                                'WI' => 'Wisconsin',
                                'WY' => 'Wyoming',
                                ], 'MI')}}

                         </div>
                       </div>
                     </div>
                        
                     <div>
                       <div class="form-group">
                       {{Form::label('zip', 'Zip Code') }}
                         <div class="">
                         {{ Form::number('zip', null, array('class' => 'form-control')) }}
                         </div>
                       </div>
                     </div>

                     <div class="modal-footer d-flex justify-content-center">
                     {!! Form::submit('Add A New Doctor',['class'=>'btn btn-block btn-primary']) !!}
                     </div>
                   </div>
                  {!! Form::close() !!}

           </div>   
       </div>
   </div>    
   
   

   @if(!Auth::user()->isAdmin())
   <br>
  

 {{-- BEGIN: Display doctor information --}}

   @if(count($docinfo) > 0)
   @foreach($docinfo as $infos)

<div class="card card-default">
          <div class="card-header bg-primary">
            <h5><i class="fas fa-user-md"></i> Doctor {{$infos->name}}  Information</h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
</div>
<!-- /.card-header -->
<div class="card-body">
    <div class="row">
    <div class="form-group col-md-6">
      <label for="inputDoctorName">Name</label>
      <input type="text" class="form-control" id="inputDoctorName" placeholder="{{$infos->name}}" disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email Address</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="{{$infos->email}}" disabled>
    </div>
  </div>
  <div class="row">
  <div class="form-group col-md-6">
      <label for="inputPhone4">Phone Number</label>
      <input type="phone" class="form-control" id="inputPhone4" placeholder="{{$infos->phone}}" disabled>
    </div>
  <div class="form-group col-md-6">
    <label for="inputSpeciality">Speciality</label>
    <input type="text" class="form-control" id="inputSpeciality" placeholder="{{$infos->specialty}}" disabled>
  </div>
</div>
<div class="row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Office Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="{{$infos->address}}"disabled>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Office Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="{{$infos->address2}}" disabled>
  </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" placeholder="{{$infos->city}}" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" class="form-control" id="inputState" placeholder="{{$infos->state}}" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Zip Code</label>
      <input type="text" class="form-control" id="inputZip" placeholder="{{$infos->zip}}" disabled>
    </div>
  </div>
  <div class="row justify-content-around">
    <div class="col-6 text-center">
    <a href="{{ route('userProfile.edit', ['docinfo'=>$infos->id]) }}" class="btn btn-primary">Edit Doctor Information</a>
    </div>
    <div class="col-6 text-center">
    <form action="{{ route('userProfile.destroy', ['docinfo'=>$infos->id]) }}" method='post'>
      {{ csrf_field() }}
      <input type="hidden" name='_method' value='Delete'>
      <input type="submit" onclick="return confirm('Are you sure?')" class='btn btn-danger' value='Delete'>
   </form>
    </div>
  </div>
</div>
</div>

   <br>

   @endforeach
   
   @endif
   {{-- END: Display doctor information --}}

</div>
@endif
</div>
</section>
@endsection