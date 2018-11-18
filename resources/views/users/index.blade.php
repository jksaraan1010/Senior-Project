@extends('layouts.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
       <h3 class="page-title">@lang('general.users.title')</h3>

    <p>
        <a href="{{ route('users.create') }}" class="btn btn-success">@lang('general.add_new')</a>
    </p>

    <div class="panel panel-default">
    

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($users) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                     
                        <th>@lang('general.users.fields.name')</th>
                        <th>@lang('general.users.fields.email')</th>
                        <th>@lang('general.users.fields.role')</th>
                        <th>Options</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr data-entry-id="{{ $user->id }}">
                              
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role->title}}</td>
                                <td>
                                    <!--<a href="{{ route('users.show',[$user->id]) }}" class="btn btn-xs btn-primary">@lang('general.view')</a> -->
                                    <a href="{{ route('users.edit',[$user->id]) }}" class="btn btn-xs btn-primary">@lang('general.edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("general.are_you_sure")."');",
                                        'route' => ['users.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('general.delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">@lang('general.no_entries_in_table')</td>
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
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('users.mass_destroy') }}';
    </script>
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
