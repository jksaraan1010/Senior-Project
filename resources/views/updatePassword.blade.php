@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::open(array('url' => 'changePass', 'method' => 'post')) }}
<br>
    {{Form::label('oldpass', 'Current Password') }}
    {{ Form::password('oldpass', null, array('class' => 'form-control')) }}
    <br>
    {{Form::label('newpass', 'New Password') }}
    {{ Form::password('newpass', null, array('class' => 'form-control')) }}
    <br>
    {{Form::label('newpassconfirm', 'Confirm New Password') }}
    {{ Form::password('newpassconfirm', null, array('class' => 'form-control')) }}

    {{ Form::submit('Change Password', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

{{ Form::close() }}
@endsection