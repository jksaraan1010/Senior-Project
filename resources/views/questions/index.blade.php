@extends('layouts.master')
@section('content')
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">Assessment Questions</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
               <li class="breadcrumb-item active"> Assessment Questions</li>
            </ol>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
      <p>
         <a href="{{ route('questions.create') }}" class="btn btn-success">@lang('general.add_new')</a>
      </p>
      <div class="panel panel-default">
         <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($questions) > 0 ? 'datatable' : '' }} dt-select">
               <thead>
                  <tr>
                     <th>@lang('general.questions.fields.topic')</th>
                     <th>@lang('general.questions.fields.question-text')</th>
                     <th>Question Options</th>
                  </tr>
               </thead>
               <tbody>
                  @if (count($questions) > 0)
                  @foreach ($questions as $question)
                  <tr data-entry-id="{{ $question->id }}">
                     <td>{{ $question->topic->title }}</td>
                     <td>{!! $question->question_text !!}</td>
                     <td>
                        <a href="{{ route('questions.show',[$question->id]) }}" class="btn btn-xs btn-primary">@lang('general.view')</a>
                        <a href="{{ route('questions.edit',[$question->id]) }}" class="btn btn-xs btn-secondary">@lang('general.edit')</a>
                        {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'onsubmit' => "return confirm('".trans("general.are_you_sure")."');",
                        'route' => ['questions.destroy', $question->id])) !!}
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
<script>
   window.route_mass_crud_entries_destroy = '{{ route('questions.mass_destroy') }}';
</script>
@stop