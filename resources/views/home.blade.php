@extends('layouts.master')

@section('content')
<div class="container">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <br>
        <div class="callout callout">
                  <p> Welcome {{ Auth::user()->name }}!</p>
                </div>
         
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h5> <i class="fas fa-book-reader"></i>  How To Use My Transition Explorer</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                
                  <button type="button" class="btn btn-tool" data-widget="remove">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <p>Steps </p>
                  <!-- /.col -->
              </div>
              <!-- ./card-body -->
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
       
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <div class="card" style="width: 60rem;height:30rem;" >
              <div class="card-header bg-success">
                <h5> <i class="fas fa-chart-line"></i> Survey Results Graph</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-12 ">
                <div class="d-md-flex">
                  <div class="chart-container" style="position: relative; height:10vh; width:100vh;">
                    <canvas id="line-chart"></canvas>
                </div>
                <a href="ResultGraph">View Full Survey Results Graph</a>

                  </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
              </div>

              <!-- /.card-body -->
              <div class="card-footer text-center">
    
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            </div>
            <!-- TABLE: LATEST ORDERS -->
            <div class="card" style="width: 60rem;height:26rem;">
              <div class="card-header bg-danger">
                <h5><i class="fas fa-table"></i> Survey Results Table</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                <div class="p-1 flex-1" style="overflow: hidden"> 

                  <table class="table m-0">
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
                    {{$row->attempt}}
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

                </div>

                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
              <a href="ResultTable">View All Survey Results</a>

              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">
            <div class="card">
              <div class="card-header bg-info">
                <h5> <i class="fas fa-heartbeat"></i> Milestone Timeline</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                Place timeline here
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="#">View Full Timeline</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
  </div>
</div>

               
                    </div>
                   </div>
             
            
    </section>
  
           
</div>
@endsection
