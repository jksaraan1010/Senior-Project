@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@section('content')



{{ Form::model($docinfo, array('route' => array('userProfile.update', $docinfo->id), 'method' => 'PUT')) }}

    {{Form::label('name', 'Name') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}

    {{Form::label('email', 'Email') }}
    {{ Form::email('email', null, array('class' => 'form-control')) }}

    {{Form::label('phone', 'Phone Number') }}
    {{ Form::text('phone', null, array('class' => 'form-control')) }}

    <br>

{{Form::label('specialty', 'Specialty') }}
{{Form::select('specialty', [
'Allergy and Immunology' => 'Allergy and Immunology', 
'Anesthesiology' => 'Anesthesiology',
'Dermatology' => 'Dermatology',
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

], 'Internal Medicine')}}
<br>

    {{Form::label('address', 'Address') }}
    {{ Form::text('address', null, array('class' => 'form-control')) }}

    {{Form::label('address2', 'Address2') }}
    {{ Form::text('address2', null, array('class' => 'form-control')) }}
    
    {{Form::label('city', 'City') }}
    {{ Form::text('city', null, array('class' => 'form-control')) }}

     <br>
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
    <br>

    {{Form::label('zip', 'Zip') }}
    {{ Form::number('zip', null, array('class' => 'form-control')) }}

    {{ Form::submit('Add Doctor Information', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

{{ Form::close() }}



@endsection