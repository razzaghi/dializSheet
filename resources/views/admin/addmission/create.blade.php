@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>ثبت پذیرش جدید</h1>

        <br/>
        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::open(array('route' => 'admin.addmission.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('patient_id', 'نام بیمار*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('patient_id', $patient, old('patient_id',$id), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('addmissionDate', 'تاریخ پذیرش*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('addmissionDate', old('addmissionDate'), array('class'=>'form-control datepicker')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('ward', 'بخش*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('ward', old('ward'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('doctor', 'پزشک بستری کننده', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('doctor', old('doctor'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('addmissionType', 'نوع پذیرش', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('addmissionType', old('addmissionType'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('insuranceType', 'نوع بیمه', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('insuranceType', old('insuranceType'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('insuranceNumber', 'شماره بیمه', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('insuranceNumber', old('insuranceNumber'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('room', 'اتاق', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('room', old('room'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('bed', 'تخت', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('bed', old('bed'), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection