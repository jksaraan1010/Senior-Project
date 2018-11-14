@extends('layouts.master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
      <h3 class="page-title">@lang('general.questions.title')</h3>
    
    {!! Form::model($question, ['method' => 'PUT', 'route' => ['questions.update', $question->id]]) !!}

    <div class="panel panel-default">
       

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('topic_id', 'Topic*', ['class' => 'control-label']) !!}
                    {!! Form::select('topic_id', $topics, old('topic_id'), ['class' => 'form-control']) !!}
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
                    {!! Form::textarea('question_text', old('question_text'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('question_text'))
                        <p class="help-block">
                            {{ $errors->first('question_text') }}
                        </p>
                    @endif
                </div>
            </div>
            
@forelse($question->options as $key => $value)
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="option1" class="control-label">Option #{{$key + 1}}</label>
                    <input placeholder="" name="option{{$key + 1}}" type="text" id="option{{$key + 1}}" class="form-control" value="{{$value->option}}">
                    <p class="help-block"></p>
                    @if($errors->has('question_text'))
                        <p class="help-block">
                            {{ $errors->first('question_text') }}
                        </p>
                    @endif
                </div>
            </div>
            @empty
            @endif
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('correct', 'Correct', ['class' => 'control-label']) !!}
                    <select id="correct" name="correct" class="form-control">
                    @forelse($question->options as $key => $value)
                        <option value="option{{$key + 1}}" @if($value->correct == 1) selected @endif>Option #{{$key + 1}}</option>
                    @empty
                    @endif
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
