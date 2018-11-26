@extends('layouts.master')

@section('content')
<div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Assessment Topics</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
             <li class="breadcrumb-item active"> Assessment Topics</li>
           </ol>
         </div><!-- /.col -->
	   </div><!-- /.row -->
	  
	   <div class="content-header">

		{!! Form::open(['method' => 'POST', 'route' => ['topics.store']]) !!}

		<div class="panel panel-default">
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

		{!! Form::submit(trans('general.save'), ['class' => 'btn btn-primary']) !!}
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
