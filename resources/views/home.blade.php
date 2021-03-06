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
                @if(!Auth::user()->isAdmin())
       <!-- Small boxes (Stat box) -->
       <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
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
            <div class="small-box bg-success">
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
            <div class="card hoverable">
              <div class="card-header bg-primary">
                <h5> <i class="fas fa-chart-line"></i> Assessment Results Graph</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-1" style="overflow: hidden; height:51vh">  
                   <div class="chart-container" style=" height:45vh">
                    <canvas id="line-chart"></canvas>
                </div>
                  </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
    
              <a href="{{url('ResultGraph')}}">View Full Assessment Results Graph</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            
            <!-- TABLE: -->
            <div class="card hoverable">
              <div class="card-header bg-success">
                <h5><i class="fas fa-table"></i> Assessment Results Table</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
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
                            <?php $total = count($tableDate); ?>
                            <?php $total_tblSection12 = count($tableSection12); $total_tblSection13 = count($tableSection13); $total_tblSection14 = count($tableSection14); $final_total = count($tableForScores); ?>
                            <tr>
                                <th scope="row">Self-Care Score</th>
                                @for($i=$total_tblSection12;$i<=($total);$i++)
                                @if($i<=$total_tblSection12)
                                @foreach($tableSection12 as $row)
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
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
    
              <a href="{{url('ResultTable')}}">View All Assessment Results</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <div class="card hoverable">
              <div class="card-header bg-primary">
                <h5> <i class="fas fa-heartbeat"></i> Milestone Timeline</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              <!-- begin timeline-->
              <br>
      
<h4 class="text-primary text-center">Ages 13-15</h4>

             <br>
              <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
      
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-stethoscope"></i>

              <div class="timeline-item">
              
                <h3 class="timeline-header">Self-Care</h3>

                <div class="timeline-body">
                  <ul>
                    <li> Start taking medication by yourself without reminders</li>
                    <li> Learn to be comfortable taking care of yourself</li>
                  </ul>
                </div>
        
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-heartbeat"></i>

              <div class="timeline-item">
                
                <h3 class="timeline-header"> Health Awareness</h3>
                <div class="timeline-body">
                  <ul>
                    <li> Learn about your medical conditions and medications</li>
                    <li> Understand what complications may come from your medical conditions</li>
                  </ul>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments"></i>

              <div class="timeline-item">
            
                <h3 class="timeline-header">Communication</h3>

                <div class="timeline-body">
                  <ul>
                    <li> Understand that you will see an adult doctor in the next few years</li>
                    <li> Start to speak with the doctor by yourself without help from family or friends</li>
                  </ul>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
  </div>
  <div class="card-footer text-center">
    <a href="{{ route('Timeline') }}">View Full Timeline</a>
    </div>
</div>


              <!-- end timeline-->
              
              </div>
              <!-- /.card-body -->
              
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
  @endif
           
</div>
@endsection
