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

              <h4>Survey</h4>
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
              <h4>Some</h4>

              <h4>page</h4>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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

          <div class="col-md-12">
            <div class="card">
              <div class="card-header bg-info">
                <h5> <i class="fas fa-heartbeat"></i> Milestone Timeline</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            
            
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="container">
              <div class="container-fluid">
  
</head>


<link rel="stylesheet" href="{{asset('css/tmline.css')}}">


<div class="container">

<h1 align="center" >Ages 13-15</h1>
      <div class="timeline">
        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Self-Care</h3>
            <label class="container">Start taking medication by yourself without reminders 
            @foreach($results as $result)
              @if($result->question_id == 6 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
            </label> 
            <label class="container">Learn to be comfortable taking care of yourself
            
            @foreach($results as $result)
              @if($result->question_id == 5 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
            </label>
        </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Health Awareness</h3>
            <label class="container">Learn about your medical conditions and medications 
            
            @foreach($results as $result)
              @if($result->question_id == 2 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
            <label class="container">Understand what complications may come from your medical conditions
            
            @foreach($results as $result)
              @if($result->question_id == 2 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
        </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Communication</h3>
            <label class="container">Understand that you will see an adult doctor in the next few years 
            
            @foreach($results as $result)
              @if($result->question_id == 12 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
             
            </label>
            <label class="container">Start to speak with the doctor by yourself without help from family or friends
           
            @foreach($results as $result)
              @if($result->question_id == 11 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
        </div>

          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>


      </div>
    </div>

<hr>
<h1 align="center" >Ages 15-17</h1>
<div class="container">
<div class="timeline">
        
            
        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Self-Care</h3>
            <label class="container">Be able to take medication by yourself without any help 
           
            @foreach($results as $result)
              @if($result->question_id == 6 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
             
            </label>
            <label class="container">Feel comfortable taking care of yourself
            
            @foreach($results as $result)
              @if($result->question_id == 5 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
         </div>
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

      <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Health Awareness</h3>
            <label class="container">Know your complete medical history and medications 
            
            @foreach($results as $result)
              @if($result->question_id == 2 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
            <label class="container">Know what to do and who to talk to when you feel ill  
           
            @foreach($results as $result)
              @if($result->question_id == 3 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
         </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Communication</h3>
            <label class="container">Be able to talk to your doctors and nurses by yourself
            
            @foreach($results as $result)
              @if($result->question_id == 11 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
            <label class="container">Know how to call the doctor's office if you feel ill  
            
            @foreach($results as $result)
              @if($result->question_id == 9 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
         </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>
      </div>
    </div>


<hr border-top: 1px solid red;>
<h1 align="center" >Ages 17-19</h1>

<div class="container">
<div class="timeline">

<div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Self-Care</h3>
            <label class="container">Know how to get your medications refilled 
            
            @foreach($results as $result)
              @if($result->question_id == 7 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
            <label class="container">Know how to arrange for transportation to your doctor's appointment
            
            @foreach($results as $result)
              @if($result->question_id == 8 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
          </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

      <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Health Awareness</h3>
            <label class="container">Learn what type of insurance you have and how to apply for it  
            
            @foreach($results as $result)
              @if($result->question_id == 4 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
            <label class="container">Know which doctors you need to see and why you are seeing them
            
            @foreach($results as $result)
              @if($result->question_id == 10 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
          </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>

        <div class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
          <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
            <h3 class=" text-light">Communication</h3>
            <label class="container">Feel prepared to transition from your current doctor to an adult doctor
            
            @foreach($results as $result)
              @if($result->question_id == 12 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
            <label class="container">Be able to schedule doctor's appointments by yourself
            
            @foreach($results as $result)
              @if($result->question_id == 10 && $result->correct == 1)
              <input type="checkbox" disabled="disabled" id="checkBox" checked="checked">
              <span class="checkmark"></span>
              @else
              <input type="checkbox" disabled="disabled" id="checkBox" >
              <span class="checkmark"></span>
              @endif 
            @endforeach
              
            </label>
          </div>
          
          <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
            <time></time>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>    
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
