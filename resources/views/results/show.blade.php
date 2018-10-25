@extends('layouts.master')

@section('content')
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
                        <tr>
                            <th>@lang('general.results.fields.date')</th>
                            <td>{{ $test->created_at}}</td>
                        </tr>
                        <tr>
                            <th>@lang('general.results.fields.result')</th>
                            <td>{{ $test->result }}/{{$total_questions}}</td>
                        </tr>
                    </table>
                @foreach($topics_results as $topic => $results)
                <h2>{{ $topic }} ({{ $results->where('correct', 1)->count() . '/' . $results->count() }})</h2>
                @foreach($results as $result)    
                <table class="table table-bordered table-striped">
                        <tr class="test-option{{ $result->correct ? '-true' : '-false' }}">
                            <th style="width: 10%">Question #{{ $loop->iteration }}</th>
                            <th>{{ $result->question->question_text }}</th>
                        </tr>
                        <tr>
                            <td>Options</td>
                            <td>
                                <ul>
                                @foreach($result->question->options as $option)
                                    <li style="@if ($option->correct == 1) font-weight: bold; @endif
                                        @if ($result->option_id == $option->id) text-decoration: underline @endif">{{ $option->option }}
                                        @if ($option->correct == 1) <em>(correct answer)</em> @endif
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
