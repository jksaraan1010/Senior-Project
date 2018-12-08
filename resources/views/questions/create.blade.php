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
<div class="content-header">
    <div class="container-fluid">
        <!--         Quetion insert form -->
        {!! Form::open(['method' => 'POST', 'route' => ['questions.store']]) !!}
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('topic_id', 'Topic*', ['class' => 'control-label']) !!}
                        {!! Form::select('topic_id', $topics, old('topic_id'), ['class' => 'form-control topic_dropdown','required' => '' ]) !!}
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#add_new_topic_model">Add New topic</a>
                        <p class="help-block"></p>
                        @if($errors->has('topic_id'))
                        <p class="help-block">
                            {{ $errors->first('topic_id') }}
                        </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('question_text', 'Question text*', ['class' => 'control-label']) !!}
                        {!! Form::textarea('question_text', old('question_text'), ['class' => 'form-control ', 'required' => '', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('question_text'))
                        <p class="help-block">
                            {{ $errors->first('question_text') }}
                        </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('option1', 'Option #1', ['class' => 'control-label']) !!}
                        {!! Form::text('option1', old('option1'), ['class' => 'form-control quation_option ', 'data-id' => '1' ,'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('option1'))
                        <p class="help-block">
                            {{ $errors->first('option1') }}
                        </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('option2', 'Option #2', ['class' => 'control-label']) !!}
                        {!! Form::text('option2', old('option2'), ['class' => 'form-control quation_option', 'data-id' => '2', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('option2'))
                        <p class="help-block">
                            {{ $errors->first('option2') }}
                        </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('option3', 'Option #3', ['class' => 'control-label']) !!}
                        {!! Form::text('option3', old('option3'), ['class' => 'form-control quation_option', 'data-id' => '3', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('option3'))
                        <p class="help-block">
                            {{ $errors->first('option3') }}
                        </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('option4', 'Option #4', ['class' => 'control-label']) !!}
                        {!! Form::text('option4', old('option4'), ['class' => 'form-control quation_option', 'data-id' => '4', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('option4'))
                        <p class="help-block">
                            {{ $errors->first('option4') }}
                        </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        {!! Form::label('option5', 'Option #5', ['class' => 'control-label']) !!}
                        {!! Form::text('option5', old('option5'), ['class' => 'form-control quation_option', 'data-id' => '5', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if($errors->has('option5'))
                        <p class="help-block">
                            {{ $errors->first('option5') }}
                        </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <select id="correct" name="correct" class="form-control correct_option_dropdown">                              
                        </select>
                        <p class="help-block"></p>
                        @if($errors->has('correct'))
                        <p class="help-block">
                            {{ $errors->first('correct') }}
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
<!-- Add new Topic Modal -->
<div class="modal fade in" id="add_new_topic_model">
    <div class="modal-dialog">
        <form  method="post" action="{{route('add.new.topic.ajax')}}" id="addNewTopicForm">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                    <!-- <h3 class="modal-title">Default Modal</h3> -->
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-3 text-left">Topic<span class="asterisk">*</span></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="topic_name" required="" placeholder="Enter Topic Name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection
@section('javascript')
<script type="text/javascript">
    $(document).ready(function(){

        // question option automatically generate after you add option
        $(document.body).on('change','.quation_option',function(){
            var html = '';
            $(".quation_option").each(function() {
                if($(this).val() !== ''){
                    var index = $(this).attr('data-id'); // get option id using "data-id" attribute
                    html += '<option value="option'+index+'">Option #'+index+'</option>'; // set option value and option text
                } 
            });
            $(".correct_option_dropdown").html(html);           
        });
     //new topic add form submit
        $("#addNewTopicForm").submit(function(e){
    
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var topic_name = $("input[name='topic_name']").val();
            var url = $(this).attr('action');
            var me = $(this);
    
              $.ajax({
                   type: "POST",
                   url: url,
                   data: {topic_name:topic_name, _token:_token},
                   dataType:'json',
                   success: function( data ) {
                    if(data.status == 'success'){
                        $("#add_new_topic_model").modal('hide'); //hide currently topic model
                        me[0].reset();
                        var option = '<option value="'+data.id+'">'+topic_name+'</option>'; //create new dropdown option
                        $(".topic_dropdown").append(option);
                        $('.topic_dropdown option[value="'+data.id+'"]').prop('selected', true) // added new dropdown option select
    
                    }else{
                        alert('Error'); // in topic if it is not insert successfully then it generates error
                    }
                   }
               });
    
        });
    
    
    });
</script>
@parent
@endsection