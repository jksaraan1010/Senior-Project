@extends('layouts.master')

@section('content')
<div class="content-header">
	<div class="container-fluid">
		<h3 class="page-title">{{$module->name}} @lang('general.module_detail.title')</h3>

		<p>
			<a href="{{ route('module_detail.create',['id'=>$module->id]) }}" class="btn btn-success">@lang('general.add_new')</a>
		</p>

		<div class="panel panel-default">
			

			<div class="panel-body">
				<table class="table table-bordered table-striped {{ count($module->module_detail) > 0 ? 'datatable' : '' }} dt-select">
					<thead>
						<tr>
							
							<th>@lang('general.module_detail.fields.title')</th>
							<th>@lang('general.module_detail.fields.description')</th>
							<th>Options</th>
						</tr>
					</thead>
					
					<tbody>
						@if (count($module->module_detail) > 0)
						@foreach ($module->module_detail as $value)
						<tr data-entry-id="{{ $value->id }}">
							
							<td>{{ $value->title }}</td>
							<td>{!! $value->description !!}</td>
							<td>
								<a href="{{ route('module_detail.edit',['id'=> $value->id]) }}" class="btn btn-xs btn-info">@lang('general.edit')</a>
								{!! Form::open(array(
									'style' => 'display: inline-block;',
									'method' => 'DELETE',
									'onsubmit' => "return confirm('".trans("general.are_you_sure")."');",
									'route' => ['module_detail.destroy', $value->id])) !!}
									{!! Form::submit(trans('general.delete'), array('class' => 'btn btn-xs btn-danger')) !!}
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
							@else
							<tr>
								<td colspan="3">@lang('general.no_entries_in_table')</td>
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
		window.route_mass_crud_entries_destroy = '{{ route('module_detail.mass_destroy') }}';
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
