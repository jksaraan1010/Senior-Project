@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@section('content')



{{-- BEGIN: Display doctor information --}}
<h1> Doctor Information</h1>
    @if(count($docinfo) > 0)
    @foreach($docinfo as $infos)
            <h3> Name: {{$infos->name}}</h3>
            <h3>Email: {{$infos->email}}</h3>
            <h3>Phone Number: {{$infos->phone}}</h3>
            <h3>Specialty: {{$infos->specialty}}</h3>
            <h3>Address: {{$infos->address}}</h3>
            <h3>Address 2: {{$infos->address2}}</h3>
            <h3>City: {{$infos->city}}</h3>
            <h3>State: {{$infos->state}}</h3>
            <h3>Zip: {{$infos->zip}}</h3>

            <a href="{{ route('userProfile.edit', ['docinfo'=>$infos->id]) }}" class='btn btn-primary'>Edit</a>
            <form action="{{ route('userProfile.destroy', ['docinfo'=>$infos->id]) }}" method='post'>
                                    {{ csrf_field() }}
                         <input type="hidden" name='_method' value='Delete'>
                         <input type="submit" class='btn btn-danger' value='Delete'>
            </form>
            <br>

    @endforeach
    @else   
        <h3> no doctor information</h3>
    @endif
{{-- END: Display doctor information --}}

    @if(count($docinfo) < 5)
    <a href="{{route('userProfile.create')}}" class='btn btn-primary'>Add a Doctor</a>
    @endif


@endsection