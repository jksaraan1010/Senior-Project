@extends('layouts.master')

@section('content')
@if($test->user_id == Auth::user()->id )
<div class="content-header">
  <div class="container-fluid">
                      <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        @if(Auth::user()->isAdmin())
                        <tr>
                            <th>@lang('general.results.fields.user')</th>
                            <td>{{ $test->user->name}}</td>
                        </tr>
                        @endif
                        <tr class="bg-primary">
                            <th>@lang('general.results.fields.date')</th>
                            <td>{{ $test->created_at}}</td>
                        </tr>
                        <tr>
                            <th>@lang('general.results.fields.result')</th>
                            <td>{{ $test->result }}/{{$total_questions}}</td>
                        </tr>
                        </tr>
                @foreach($topics_results as $topic => $results)
                <tr>
                    @if($results->where('correct', 1)->count() != $results->count())
                    <th>{{ $topic }}</th>
                    <td>
                    Your score is low in {{ $topic }} section! Please go this
                  
                    @if ($topic == $selfCare[0]->title)
                    <a href="/module_detail_show/1#/">Link </a>
                    @elseif ($topic == $healthAwareness[0]->title)
                    <a href="/module_detail_show/3#/">Link </a>
                    @elseif ($topic == $communication[0]->title)
                    <a href="/module_detail_show/2#/">Link </a>
                    @else -
                    @endif
                    @endif
                </td>
                @endforeach

                </tr>
                    </table>
                    
                @foreach($topics_results as $topic => $results)
                <h4 class="text-primary">{{ $topic }} ({{ $results->where('correct', 1)->count() . '/' . $results->count() }})</h4>               
                @foreach($results as $result)    
                <table class="table table-bordered table-striped">
                    <tr class="test-option{{ $result->correct ? '-true' : '-false' }}">
                        <th style="width: 10%">Question #{{ $loop->iteration }}</th>
                        <th>{{ $result->question->question_text  }}</th>
                    </tr>
                        <tr>
                            <td>Options</td>
                            <td>
                                <ul>
                                @foreach($result->question->options as $option)
                                    <li style="@if ($result->option_id == $option->id) font-weight: bold; @endif
                                        @if ($result->option_id == $option->id) text-decoration: underline @endif">{{ $option->option }}
                                        @if ($option->correct == 1) <em></em> @endif
                                        @if ($result->option_id == $option->id) <em>(your answer)</em> @endif
                                    </li>
                                @endforeach
                                </ul>
                            </td>
                        </tr>
                        <tr>
                          
                        </tr>
                    </table>
                    @endforeach 
                    @endforeach 

                </div>
  </div>
</div>
@stop

@section('javascript')
@parent
<script src="{{ url('adminlte/js') }}/timepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script>
    $('.datetime').datetimepicker({
        autoclose: true,
        dateFormat: "{{ config('app.date_format_js') }}",
        timeFormat: "hh:mm:ss"
    });
</script>

@stop
@endif