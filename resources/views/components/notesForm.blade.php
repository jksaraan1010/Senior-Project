{!! Form::open(['route' => 'notes.store', 'method' => '\Illuminate\Database\Schema\POST']) !!}


{{ Form::label('name', 'Note', ['class' => 'control-label'])}}
{{ Form::text('name',null, ['class' => 'form-control','placeholder' => 'Enter new note' ])}}

<div class="row mt-3"> 
  <div class="col-sm-6">
      <button class="btn btn-success" type="submit"> Add Note </button>
  <div>
</div>
{!! Form::close() !!}