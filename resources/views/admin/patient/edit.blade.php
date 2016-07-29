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

{!! Form::model($patient, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array('admin.patient.update', $patient->id))) !!}

<div class="form-group">
    {!! Form::label('unitNumber', 'Unit Number*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('unitNumber', old('unitNumber',$patient->unitNumber), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('family', 'Family*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('family', old('family',$patient->family), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('name', 'Name*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('name', old('name',$patient->name), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('fatherName', 'Father Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('fatherName', old('fatherName',$patient->fatherName), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('gender_id', 'Gender*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('gender_id', $gender, old('gender_id',$patient->gender_id), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('maritalstatus_id', 'Marital Status*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('maritalstatus_id', $maritalstatus, old('maritalstatus_id',$patient->maritalstatus_id), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('idNo', 'ID. No*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('idNo', old('idNo',$patient->idNo), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('recordHosp', 'Record Hosp', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::hidden('recordHosp','') !!}
        {!! Form::checkbox('recordHosp', 1, $patient->recordHosp == 1) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('numOfHosp', 'No. Of Hosp', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('numOfHosp', old('numOfHosp',$patient->numOfHosp), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('dateOfBirth', 'Date Of Birth', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('dateOfBirth', old('dateOfBirth',$patient->dateOfBirth), array('class'=>'form-control datepicker')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('placeOfBirth', 'Place of Birth', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('placeOfBirth', old('placeOfBirth',$patient->placeOfBirth), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('placeOfId', 'Place of ID', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('placeOfId', old('placeOfId',$patient->placeOfId), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('religion', 'Religion', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('religion', old('religion',$patient->religion), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('occupation_id', 'Occuption', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('occupation_id', $occupation, old('occupation_id',$patient->occupation_id), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('placeOfWork', 'Place Of Work', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('placeOfWork', old('placeOfWork',$patient->placeOfWork), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('address', 'Address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('address', old('address',$patient->address), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('phoneNumber', 'Phone Number', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('phoneNumber', old('phoneNumber',$patient->phoneNumber), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('reffered', 'Brought By Or Reffered By', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('reffered', old('reffered',$patient->reffered), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('addressOfReffered', 'Address Of Reffered', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('addressOfReffered', old('addressOfReffered',$patient->addressOfReffered), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('phoneOfReffered', 'Phone Number Of Reffered', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('phoneOfReffered', old('phoneOfReffered',$patient->phoneOfReffered), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route('admin.patient.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection