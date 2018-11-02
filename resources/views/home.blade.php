@extends('layouts.master')

@section('content')
<div class="container">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <br>
        <p>Welcome {{ Auth::user()->name }}!</p>
            <div class="row">
            <div class="col-md-12">
            <div class="card card-primary">
              <h4 class="card-header"> How To Use My Transition Explorer
               
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
                </h4>
              <!-- /.card-header -->
              <div class="card-body">
                Steps to learning MTE
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="card" style="width: 45rem; height:25rem">
  <div class="card-body">
    <h5 class="card-title">Survey Results Graph</h5>
    <p class="card-text"> <div class="chart-container" style="position: relative; height:10vh; width:100vh;">
                    <canvas id="line-chart"></canvas>
              </div></p>
  </div>
</div>
<div class="card" style="width: 45rem; height:30rem">
  <div class="card-body">
    <h5 class="card-title">Survey Results Table</h5>
    <p class="card-text"> <table class="table table-striped table-hover table-bordered">

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
    @foreach($tableSection1 as $row)
        <td>
            {{$row->result}}
        </td>
    @endforeach
</tr>
<tr>
    <th scope="row">Health Awareness Score</th>
    @foreach($tableSection2 as $row)
        <td>
            {{$row->result}}
        </td>
    @endforeach
</tr>
<tr>
    <th scope="row">Communication Score</th>
    @foreach($tableSection3 as $row)
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
             </p>
  </div>
</div>

               
                    </div>
                   </div>
             
            
    </section>
  
           
</div>
@endsection
