@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($addmission, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array('admin.addmission.update', $addmission->id))) !!}

<div class="form-group">
    {!! Form::label('patient_id', 'نام بیمار*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('patient_id', $patient, old('patient_id',$addmission->patient_id), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('addmissionDate', 'تاریخ پذیرش*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('addmissionDate', old('addmissionDate',$addmission->addmissionDate), array('class'=>'form-control datepicker')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('ward', 'بخش*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('ward', old('ward',$addmission->ward), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('doctor', 'پزشک بستری کننده', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('doctor', old('doctor',$addmission->doctor), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('addmissionType', 'نوع پذیرش', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('addmissionType', old('addmissionType',$addmission->addmissionType), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('insuranceType', 'نوع بیمه', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('insuranceType', old('insuranceType',$addmission->insuranceType), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('insuranceNumber', 'شماره بیمه', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('insuranceNumber', old('insuranceNumber',$addmission->insuranceNumber), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('room', 'اتاق', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('room', old('room',$addmission->room), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('bed', 'تخت', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('bed', old('bed',$addmission->bed), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route('admin.addmission.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection