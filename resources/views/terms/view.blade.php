@extends('layouts.master')

@section('content')
@if(Auth::user()->role_id == 1)
 <!-- Main content -->
 <section class="content">


<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Terms and Conditions</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
             <li class="breadcrumb-item active"> Terms and Conditions </li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
<div class="content-header">
	<div class="container-fluid">
		

		<p>
			@if(count($terms) > 0)
			@else
			<a href="{{ route('terms.create') }}" class="btn btn-success">@lang('general.add_new')</a>
			@endif
			
		</p>

		<div class="panel panel-default">
		

			<div class="panel-body">
				<table class="table table-bordered table-striped {{ count($terms) > 0 ? 'datatable' : '' }} dt-select">
					<thead>
						<tr>
							
					
							<th>@lang('general.terms.fields.description')</th>
							<th>Options</th>
						</tr>
						
					</thead>
					
					<tbody>
						@if (count($terms) > 0)
						@foreach ($terms as $value)
						<tr data-entry-id="{{ $value->id }}">
						
							<td>{!! $value->description !!}</td>
							<td>
								<a href="{{ route('terms.edit',['id'=> $value->id]) }}" class="btn btn-xs btn-primary">@lang('general.edit')</a>
								{!! Form::open(array(
									'style' => 'display: inline-block;',
									'method' => 'DELETE',
									'onsubmit' => "return confirm('".trans("general.are_you_sure")."');",
									'route' => ['terms.destroy', $value->id])) !!}
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
@endif