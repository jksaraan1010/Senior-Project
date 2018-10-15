@extends('layouts.master')

@section('content')
<div class="content-header">
	<div class="container-fluid">
		<h3 class="page-title">@lang('general.topics.title')</h3>

		<p>
			<a href="{{ route('topics.create') }}" class="btn btn-success">@lang('general.add_new')</a>
		</p>

		<div class="panel panel-default">
			<div class="panel-heading">
				@lang('general.list')
			</div>

			<div class="panel-body">
				<table class="table table-bordered table-striped {{ count($topics) > 0 ? 'datatable' : '' }} dt-select">
					<thead>
						<tr>
							<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
							<th>@lang('general.topics.fields.title')</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					
					<tbody>
						@if (count($topics) > 0)
						@foreach ($topics as $topic)
						<tr data-entry-id="{{ $topic->id }}">
							<td></td>
							<td>{{ $topic->title }}</td>
							<td>
								<a href="{{ route('topics.show',[$topic->id]) }}" class="btn btn-xs btn-primary">@lang('general.view')</a>
								<a href="{{ route('topics.edit',[$topic->id]) }}" class="btn btn-xs btn-info">@lang('general.edit')</a>
								{!! Form::open(array(
									'style' => 'display: inline-block;',
									'method' => 'DELETE',
									'onsubmit' => "return confirm('".trans("general.are_you_sure")."');",
									'route' => ['topics.destroy', $topic->id])) !!}
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
		window.route_mass_crud_entries_destroy = '{{ route('topics.mass_destroy') }}';
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
