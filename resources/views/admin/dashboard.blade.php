@extends('admin.layouts.master')

@section('content')

    <h1>{{ trans('quickadmin::admin.dashboard-title') }}</h1>

    <br/>

    <div class="row">

        <div class="col-lg-4">
            <div id="container-speed" style="width: 100%; height: 200px;"></div>
        </div>
        <div class="col-lg-4">
            <div id="container-rpm" style="width: 100%; height: 200px;"></div>
        </div>
        <div class="col-lg-4">
            <div id="gauge-2" style="width: 100%; height: 200px;"></div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-6">
            <div id="chart1" style="width: 100%; height: 400px; margin: 0 auto" dir="ltr"></div>
        </div>
        <div class="col-lg-6">
            <div id="chart2" style="width: 100%; height: 400px; margin: 0 auto" dir="ltr"></div>
        </div>
    </div>


@endsection