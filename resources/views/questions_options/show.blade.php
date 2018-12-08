@extends('layouts.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
          <h3 class="page-title">@lang('general.questions-options.title')</h3>
    
    <div class="panel panel-default">
 
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                      <!-- Display single questions option -->
                    <table class="table table-bordered table-striped">
                        <tr><th>@lang('general.questions-options.fields.question')</th>
                    <td>{{ $questions_option->question->question_text}}</td></tr><tr><th>@lang('general.questions-options.fields.option')</th>
                    <td>{{ $questions_option->option }}</td></tr><tr><th>@lang('general.questions-options.fields.correct')</th>
                    <td>{{ $questions_option->correct == 1 ? 'Yes' : 'No' }}</td></tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('questions_options.index') }}" class="btn btn-primary">@lang('general.back_to_list')</a>
        </div>
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
