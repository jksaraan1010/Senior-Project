@extends('layouts.master')

@section('content')
@if(Auth::user()->role_id != 1)
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
                    </div>
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
      <a onClick="window.print()" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
      <a href= "/EmailTable" onclick="return true;" target="_blank" class="btn btn-default"><i class="fa fa-envelope"></i> Email</a>
  <br>
<br>

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
                            <?php $total = count($tableDate); ?>
                            <?php $total_tblSection12 = count($tableSection12); $total_tblSection13 = count($tableSection13); $total_tblSection14 = count($tableSection14); $final_total = count($tableForScores); ?>
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
                                @for($i=$total_tblSection13;$i<=($total);$i++)
                                @if($i<=$total_tblSection13)
                                @foreach($tableSection13 as $row)
                                <td>
                                    {{$row->result}}
                                </td>
                                @endforeach
                                @else
                                <td>
                                    {{0}}
                                </td>
                                @endif
                                @endfor
                            </tr>
                            <tr>
                                <th scope="row">Communication Score</th>
                                @for($i=$total_tblSection13;$i<=($total);$i++)
                                @if($i<=$total_tblSection13)
                                @foreach( $tableSection14 as $row)
                                <td>
                                    {{$row->result}}
                                </td>
                                @endforeach
                                @else
                                <td>
                                    {{0}}
                                </td>
                                @endif
                                @endfor
                            </tr>
                            <tr>
                                <th scope="row">Total Score</th>
                                @for($i=$final_total;$i<=($total);$i++)
                                @if($i<=$final_total)
                                @foreach($tableForScores as $row)
                                <td class="text-bold">
                                    {{$row->result}}
                                </td>
                                @endforeach
                                @else
                                <td>
                                    {{0}}
                                </td>
                                @endif
                                @endfor
                            </tr>
                        </tbody>
                    </table>
                </div>
            </body>
            </html>

@endif
            @endsection