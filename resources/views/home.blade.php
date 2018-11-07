@extends('layouts.master')

@section('content')
<div class="container">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <br>
        <div class="callout callout">
                  <h5 class="text-primary"> Welcome {{ Auth::user()->name }}!</h5>
                </div>
         
       <!-- Small boxes (Stat box) -->
       <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>User </h4>

                <h4>Guide</h4>
              </div>
              <div class="icon">
              <i class="fas fa-info-circle"></i>
              </div>
              <a href="{{ route('userGuide') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h4>Take  </h4>

              <h4>Assessment</h4>
              </div>
              <div class="icon">
              <i class="fas fa-pen"></i>
              </div>
              <a href="{{url('tests')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              <h4>Notes</h4>

              <h4>To Self</h4>
              </div>
              <div class="icon">
                <i class="fa fa-clipboard-list"></i>
              </div>
              <a href="{{ route('notes.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h4>Reminders </h4>

              <h4>Calendar</h4>
              </div>
              <div class="icon">
              <i class="fas fa-calendar-alt"></i>
              </div>
              <a href="{{ route('events.index') }}"class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
 <!-- Main row -->
 <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header bg-success">
                <h5> <i class="fas fa-chart-line"></i> Survey Results Graph</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-1" style="overflow: hidden">  Place Graph here
                  </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
    
              <a href="#">View Full Survey Results Graph</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header bg-danger">
                <h5><i class="fas fa-table"></i> Survey Results Table</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Place table here</th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> </td>
                    </tr>
                   
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
    
              <a href="#">View All Survey Results</a>
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
       
    </section>
  
           
</div>
@endsection
