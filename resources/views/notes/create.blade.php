@extends('layouts.NotestoSelf')

@section('title', 'Create Note')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1> Create Note </h1>
            @component('components.notesForm')
            @endcomponent 


        </div>
    </div>
@endsection

