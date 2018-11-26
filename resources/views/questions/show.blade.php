@extends('layouts.master')

@section('content')
<div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Assessment Questions</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
             <li class="breadcrumb-item active"> Assessment Questions</li>
           </ol>
         </div><!-- /.col -->
	   </div><!-- /.row -->
	   <br>
		<div class="panel panel-default">
			
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<table class="table table-bordered table-striped">
							<tr><th>@lang('general.questions.fields.topic')</th>
								
								<td>{{ $question->topic->title}}</td></tr><tr><th>@lang('general.questions.fields.question-text')</th>
								<td>{!! $question->question_text !!}</td>
								
							</table>
						</div>
					</div>

					<p>&nbsp;</p>

					<a href="{{ route('questions.index') }}" class="btn btn-primary">@lang('general.back_to_list')</a>
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
