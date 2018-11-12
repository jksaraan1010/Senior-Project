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
                <li class="breadcrumb-item active"> User Profile </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="container">
              <div class="container-fluid">

<div class="card card-default">
          <div class="card-header bg-primary">
            <h5><i class="fas fa-user-md"></i> Edit Doctor Information</h5>
</div>


@if($docinfo->user_id == Auth::user()->id )

{{ Form::model($docinfo, array('route' => array('userProfile.update', $docinfo->id), 'method' => 'PUT')) }}
<!-- /.card-header -->
<div class="card-body">
    <div class="row">
    <div class="form-group col-md-6">

    {{Form::label('name', 'Name') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-6">


    {{Form::label('email', 'Email Address') }}
    {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>
</div>
    <div class="row">
    <div class="form-group col-md-6">
    {{Form::label('phone', 'Phone Number') }}
    {{ Form::text('phone', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-4">
        {{Form::label('specialty', 'Specialty') }}
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
    <div class="row">
    <div class="form-group col-md-6">

    {{Form::label('address', 'Office Address') }}
    {{ Form::text('address', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-6">
    {{Form::label('address2', 'Office Address 2') }}
    {{ Form::text('address2', null, array('class' => 'form-control')) }}
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-4">
    {{Form::label('city', 'City') }}
    {{ Form::text('city', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-2">
    
    {{Form::label('state', 'State') }}
                    
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
    <div class="form-group col-md-6">

    {{Form::label('zip', 'Zip Code') }}
    {{ Form::number('zip', null, array('class' => 'form-control')) }}
</div>
</div>
<div class="row justify-content-around">
    <div class="col-12 text-center">
    {{ Form::submit('Update Doctor Information', array('class' => 'btn btn-primary')) }}
    </div>
    {{ Form::close() }}
  </div>
</div>
</div>
        </div>

@else
<h5>Sorry, you cannot edit this doctor's information!<h5>
<a href="{{route('userProfile.index')}}" class='btn btn-primary'>Back to User Profile</a>
        </div>
        </section>
@endif

@endsection