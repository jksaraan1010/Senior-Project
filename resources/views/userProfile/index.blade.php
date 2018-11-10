@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@section('content')
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
<div class="content">
        <div class="container-fluid">

                <div class="card card-default">
                       
    <h3 class="profileHeader">  Name: {{Auth::user()->name}} </h3>
    <h3 class="profileHeader"> Email: {{Auth::user()->email}} </h3>
    <a href="{{ route('updatePassword') }}">Change Password</a>
    
</div>
   @if(!Auth::user()->isAdmin())
   <br>
   {{-- BEGIN: Display doctor information --}}
   <h1> Doctor Information</h1>
   @if(count($docinfo) > 0)
   @foreach($docinfo as $infos)
   <div class="card" style="width: 50rem;">
  <ul class="list-group list-group-flush">
   <li class="list-group-item"> <font size="4" color="blue">Name: </font>{{$infos->name}}</li>
   <li class="list-group-item"><font size="4" color="blue">Email: </font>{{$infos->email}}</li>
   <li class="list-group-item"><font size="4" color="blue">Phone Number: </font>{{$infos->phone}}</li>
   <li class="list-group-item"><font size="4" color="blue">Specialty: </font>{{$infos->specialty}}</li>
   <li class="list-group-item"><font size="4" color="blue">Address: </font>{{$infos->address}}</li>
   <li class="list-group-item"><font size="4" color="blue">Address 2: </font>{{$infos->address2}}</li>
   <li class="list-group-item"><font size="4" color="blue">City: </font>{{$infos->city}}</li>
   <li class="list-group-item"><font size="4" color="blue">State: </font>{{$infos->state}}</li>
   <li class="list-group-item"><font size="4" color="blue">Zip: </font>{{$infos->zip}}</li>

   <li class="list-group-item">
   <a href="{{ route('userProfile.edit', ['docinfo'=>$infos->id]) }}" class='btn btn-primary'>Edit</a>
   </li>
   
   <li class="list-group-item">
   <form action="{{ route('userProfile.destroy', ['docinfo'=>$infos->id]) }}" method='post'>
      {{ csrf_field() }}
      <input type="hidden" name='_method' value='Delete'>
      <input type="submit" class='btn btn-danger' value='Delete'>
   </form>
   </li>
   </ul>
   </div>
   <br>
   @endforeach
   @else   
   <h3> no doctor information</h3>
   @endif
   {{-- END: Display doctor information --}}
   @if(count($docinfo) < 5)
   <a href="{{route('userProfile.create')}}" class='btn btn-primary'>Add a Doctor</a>
   @endif
</div>
@endif
</div>
@endsection