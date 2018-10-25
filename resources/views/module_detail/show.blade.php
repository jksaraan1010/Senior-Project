@extends('layouts.master')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
        <h3 class="page-title">{{$module->name}}</h3>
        <div class="card module_detail_card">
          <div class="card-block">
            <div class="module_detail_title">
              <h2 class="card-title">{{$module->name}}</h2>
            </div>
            <div class="module_detail_description">
              <p class="card-text">Maintain a diary with your 
                health records and can keep it with you at all times.</p>
            </div>
          </div>
        </div>
    </div>
    </div>

    <div class="row">
    @forelse($module->module_detail as $key => $value)
      <div class="col-md-4">
        <div class="card module_detail_card">
          <div class="card-block">
            <div class="module_detail_title">
              <h2 class="card-title">{{$value->title}}</h2>
            </div>
            <div class="module_detail_description">
              <p class="card-text">
                {!!$value->description!!}
              </p>
            </div>
          </div>
        </div>
    </div>
    @empty
    @endforelse
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
