@extends('layouts.master')

@section('content')
<div class="content-header">
	<div class="container-fluid">
		<h3 class="page-title">@lang('general.roles.title')</h3>
		{!! Form::open(['method' => 'POST', 'route' => ['roles.store']]) !!}

		<div class="panel panel-default">
			<div class="panel-heading">
				@lang('general.create')
			</div>
			
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12 form-group">
						{!! Form::label('title', 'Title*', ['class' => 'control-label']) !!}
						{!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '']) !!}
						<p class="help-block"></p>
						@if($errors->has('title'))
						<p class="help-block">
							{{ $errors->first('title') }}
						</p>
						@endif
					</div>
				</div>
				
			</div>
		</div>

		{!! Form::submit(trans('general.save'), ['class' => 'btn btn-danger']) !!}
		{!! Form::close() !!}
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
