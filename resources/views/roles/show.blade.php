@extends('layouts.master')

@section('content')
<div class="content-header">
	<div class="container-fluid">
		<h3 class="page-title">@lang('general.roles.title')</h3>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				@lang('general.view')
			</div>
			
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<table class="table table-bordered table-striped">
							<tr><th>@lang('general.roles.fields.title')</th>
								<td>{{ $role->title }}</td></tr>
							</table>
						</div>
					</div>

					<p>&nbsp;</p>

					<a href="{{ route('roles.index') }}" class="btn btn-default">@lang('general.back_to_list')</a>
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
