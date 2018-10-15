@extends('layouts.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
       <h3 class="page-title">@lang('general.user-actions.title')</h3>

    <p>
        
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('general.list')
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($user_actions) > 0 ? 'datatable' : '' }} ">
                <thead>
                    <tr>
                        
                        <th>@lang('general.user-actions.fields.user')</th>
                        <th>@lang('general.user-actions.fields.action')</th>
                        <th>@lang('general.user-actions.fields.action-model')</th>
                        <th>@lang('general.user-actions.fields.action-id')</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($user_actions) > 0)
                        @foreach ($user_actions as $user_action)
                            <tr data-entry-id="{{ $user_action->id }}">
                                
                                <td>{{ $user_action->user->name or '' }}</td>
                                <td>{{ $user_action->action }}</td>
                                <td>{{ $user_action->action_model }}</td>
                                <td>{{ $user_action->action_id }}</td>
                                
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">@lang('general.no_entries_in_table')</td>
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

@stop
