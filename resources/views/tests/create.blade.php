@extends('layouts.master')
@section('content')
<!-- Main content -->
<section class="content">
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">Assessment</h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
               <li class="breadcrumb-item active"> Assessment</li>
            </ol>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content-header">
   <div class="container-fluid">
      {!! Form::open(['method' => 'POST', 'route' => ['tests.store'], 'class' => 'test_form']) !!} 
      <div class="box-header with-border">
         <strong class="box-title"> @lang('general.quiz') </strong>
      </div>
      <br>
      <div class="panel panel-default">
         <?php ?>
         @if(count($questions) > 0)
         <div class="panel-body">
            @foreach($questions as $title => $group_questions)
            <fieldset>
            <h5 class="text-primary">{{ $title }}</h5>
            @foreach($group_questions as $question)
            <div class="row" style="padding-left: 20px;">
               <div class="col-xs-12 form-group">
                  <div class="form-group">
                     <strong>Question # {{ $loop->iteration }}: {!! nl2br($question->question_text) !!}</strong>
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
                        value="{{ $option->id }}"required>
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
      {!! Form::submit(trans('general.submit_quiz'), ['class' => 'btn btn-block btn-primary test_submit_btn']) !!}
      {!! Form::close() !!}
   </div>
</div>
@stop
@section('javascript')
@parent
<script src="{{ url('adminlte/js') }}/timepicker.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
       var names = []
       $('input:radio').each(function () {
           var rname = $(this).attr('name');
           if ($.inArray(rname, names) == -1) names.push(rname);
       });
      
   
       $(document.body).on('click','.test_submit_btn',function(e){
           e.preventDefault();
           var flag = true;
           $.each(names, function (i, name) {
               if ($('input[name="' + name + '"]:checked').length == 0) {
               
                   flag = false;
               }
           });
           if(flag){
         
               $(".test_form").submit();
           }else{
               alert('Please, complete all questions before submitting the assessment.');
           }
       });
   
       
   })
</script>
@stop