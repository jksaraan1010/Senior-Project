@extends('layouts.master')

@section('content')
@if(Auth::user()->role_id == 1)

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
    
<div class="content-header">
  <div class="container-fluid">
      <div>
    {!! Form::model($terms, ['method' => 'PUT', 'route' => ['terms.update', $terms->id]]) !!}

    <div class="panel panel-default">
       

        <div class="panel-body">
            
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'id'=>'editor', 'required' => '', 'placeholder' => 'Enter Description']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>

 
    
            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
            {!! Form::submit(trans('general.update'), ['class' => 'btn btn-danger']) !!}
            
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


@push('js')
<script type="text/javascript">
  $(document).ready(function(){
     CKEDITOR.replace( 'editor' );
  });
</script>
@endpush 
@endif