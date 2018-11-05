@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@section('content')

{{ Form::open(array('route' => 'userProfile.store')) }}
    {{Form::label('name', 'Name') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}

    {{Form::label('email', 'Email') }}
    {{ Form::email('email', null, array('class' => 'form-control')) }}

    {{Form::label('phone', 'Phone Number') }}
    {{ Form::text('phone', null, array('class' => 'form-control')) }}

    {{Form::label('specialty', 'Specialty') }}
    {{ Form::text('specialty', null, array('class' => 'form-control')) }}

    {{Form::label('address', 'Address') }}
    {{ Form::text('address', null, array('class' => 'form-control')) }}

    {{Form::label('address2', 'Address2') }}
    {{ Form::text('address2', null, array('class' => 'form-control')) }}
    
    {{Form::label('city', 'City') }}
    {{ Form::text('city', null, array('class' => 'form-control')) }}

    {{Form::label('state', 'State') }}
    {{ Form::text('state', null, array('class' => 'form-control')) }}

    {{Form::label('zip', 'Zip') }}
    {{ Form::number('zip', null, array('class' => 'form-control')) }}

    {{ Form::submit('Add Doctor Information', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

{{ Form::close() }}

 
@endsection