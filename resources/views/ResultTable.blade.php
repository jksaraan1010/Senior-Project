@extends('layouts.master')

@section('content')

        <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
 <!-- Main content -->
 <section class="content"> 
   
 
   <!-- Content Header (Page header) -->
   <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Results Table</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                <li class="breadcrumb-item active"> Results Table </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="container">
              <div class="container-fluid">
  
</head>

<body>
<input type="button" onClick="window.print()" value="Print This Page"/>
<button type="submit"> <a href="/EmailTable">Email this page</a></button>

<div class="container">
    <h2>Survey Results Table</h2>

    <table class="table table-striped table-hover table-bordered">

        <tbody>
        <tr>
            <th scope="row">Date Taken</th>
            @foreach($tableDate as $row)
                <td>
                    {{$row->dateTaken}}
                </td>
            @endforeach
        </tr>
       
        <tr>
            <th scope="row">Self Care Score</th>
            @foreach($tableSection12 as $row)
                <td>
                    {{$row->result}}

                </td>
            @endforeach
        </tr>
        <tr>
            <th scope="row">Health Awareness Score</th>
            @foreach(  $tableSection13 as $row)
                <td>
                    {{$row->result}}
                </td>
            @endforeach
        </tr>
        <tr>
            <th scope="row">Communication Score</th>
            @foreach( $tableSection14 as $row)
                <td>
                    {{$row->result}}
                </td>
            @endforeach
        </tr>
        <tr>
            <th scope="row">Total Score</th>

            @foreach($tableForScores as $row)
                <td class="text-bold">
                    {{$row->result}}
                </td>
            @endforeach
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>


@endsection