@extends('layouts.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
       <h3 class="page-title">@lang('general.questions-options.title')</h3>

    <p>
        <a href="{{ route('questions_options.create') }}" class="btn btn-success">@lang('general.add_new')</a>
    </p>

    <div class="panel panel-default">
    

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($questions_options) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
        
                        <th>@lang('general.questions-options.fields.question')</th>
                        <th>@lang('general.questions-options.fields.option')</th>
                        <th>@lang('general.questions-options.fields.correct')</th>
                        <th>Question Options</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($questions_options) > 0)
                        @foreach ($questions_options as $questions_option)
                            <tr data-entry-id="{{ $questions_option->id }}">
                            
                                <td>{{ $questions_option->question->question_text }}</td>
                                <td>{{ $questions_option->option }}</td>
                                <td>{{ $questions_option->correct == 1 ? 'Yes' : 'No' }}</td>
                                <td>
                                    <a href="{{ route('questions_options.show',[$questions_option->id]) }}" class="btn btn-xs btn-primary">@lang('general.view')</a>
                                    <a href="{{ route('questions_options.edit',[$questions_option->id]) }}" class="btn btn-xs btn-info">@lang('general.edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("general.are_you_sure")."');",
                                        'route' => ['questions_options.destroy', $questions_option->id])) !!}
                                    {!! Form::submit(trans('general.delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">@lang('general.no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
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
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('questions_options.mass_destroy') }}';
    </script>
@stop
