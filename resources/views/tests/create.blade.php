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
   <div class="container">
           <div class="container-fluid">
 
    {!! Form::open(['method' => 'POST', 'route' => ['tests.store']]) !!}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h6 class="box-title">
                @lang('general.quiz')
             </h6>
         </div>
         <?php //dd($questions) ?>
    @if(count($questions) > 0)
        <div class="panel-body">
        
        @foreach($questions as $title => $group_questions)
        
        <fieldset>
        <h4><span class="label label-primary">{{ $title }}</span></h4>
        @foreach($group_questions as $question)
        

         <table class=" table table-striped table-hover table-question">
                <thead class="bg-primary">
                    <th class="text-left" width="20%">Question {{ $loop->iteration }}</th>
                        <th class="text-left">
                           {!! nl2br($question->question_text) !!} 
                        </th>                            
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left"></td>
                         <td class="text-left">
                         @foreach($question->options as $option)
                             <div class="icheck">
                                 <label>
                                    <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option->id }}">
                                    {{ $option->option }}
                                 </label>
                             </div>
                             @endforeach
                          </td>
                    </tr>
                </tbody>  
                @endforeach 
         </table>
         @endforeach
        <br>
         @endif

    {!! Form::submit(trans('general.submit_quiz'), ['class' => 'btn btn-block btn-primary']) !!}
    {!! Form::close() !!}
    <br>
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
