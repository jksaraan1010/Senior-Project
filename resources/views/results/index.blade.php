@extends('layouts.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
       <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                    @if(Auth::user()->isAdmin())
                        <th>@lang('general.results.fields.user')</th>
                    @endif
                        <th>@lang('general.results.fields.date')</th>
                        <th>Result</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($results) > 0)
                        @foreach ($results as $result)
                    
                            <tr>
                            @if(Auth::user()->isAdmin())
                            <td>{{ $result->user->name}} ({{$result->user->email}})</td>
                            @endif
                                <td>{{ $result->created_at->format('d M Y H:i:A') }}</td>
                                <td>{{ $result->result }}/{{$total_questions}}</td>
                                <td>
                                    <a href="{{ route('results.show',[$result->id]) }}" class="btn btn-xs btn-primary">@lang('general.view')</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('general.no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
  </div>
</div>
@stop

@section('script')
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
