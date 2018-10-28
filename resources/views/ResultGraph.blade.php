@extends('layouts.master')
@section('content')
    <button type="submit"> <a href="/Mail">Email this page</a></button>

    <div class="chart-container" style="position: relative; height:40vh; width:auto;">
        <canvas id="line-chart"></canvas>
    </div>
@endsection
