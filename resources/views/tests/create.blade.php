@extends('layouts.master')

@section('content')
<!-- Main content -->
<section class="content">


<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Survey</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
             <li class="breadcrumb-item active"> Survey</li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <div class="content-header">
      <div class="container-fluid">
    <h3 class="page-title">@lang('Survey')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['tests.store']]) !!}
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('general.quiz')
        </div>
        <?php //dd($questions) ?>
        @if(count($questions) > 0)
        <div class="panel-body">
        
        @foreach($questions as $title => $group_questions)
        
        <fieldset>
            <caption>{{ $title }}</caption>
            @foreach($group_questions as $question)
            
            <div class="row" style="padding-left: 40px;">
                <div class="col-xs-12 form-group">
                    <div class="form-group">
                        <strong>Question {{ $loop->iteration }}.<br />{!! nl2br($question->question_text) !!}</strong>
                         <input
                            type="hidden"
                            name="questions[{{ '_' . camel_case($title) . '_' . $loop->iteration }}]"
                            value="{{ $question->id }}">
                    
                            @foreach($question->options as $option)
                                <br>
                                <label class="radio-inline">
                                    <input
                                        type="radio"
                                        name="answers[{{ $question->id }}]"
                                        value="{{ $option->id }}">

                                          {{ $option->option }}
                                </label>
                            @endforeach
                    </div>
                </div>
            </div>
        
        @endforeach
        <fieldset>
        
        @endforeach
        </div>
    @endif
    </div>
    {!! Form::submit(trans('general.submit_quiz'), ['class' => 'btn btn-danger']) !!}
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
