@extends('layouts.masterAdmin')
@section('content')
    <div class="container">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <br>
                <p>Welcome {{ Auth::user()->name }}!</p>
                @endsection