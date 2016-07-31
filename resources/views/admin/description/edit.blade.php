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

{!! Form::model($description, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array('admin.description.update', $description->id))) !!}

<div class="form-group">
    {!! Form::label('patient_id', 'بیمار*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('patient_id', $patient, old('patient_id',$description->patient_id), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('presentingSymptoms', 'نشانه های فعلی بیمار', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('presentingSymptoms', old('presentingSymptoms',$description->presentingSymptoms), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('historyPeresentIllness', 'تاریخچه بیماری های فعلی ', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('historyPeresentIllness', old('historyPeresentIllness',$description->historyPeresentIllness), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('pastDiseaseHistory', 'تاریخچه بیماری های قبلی', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('pastDiseaseHistory', old('pastDiseaseHistory',$description->pastDiseaseHistory), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('currentDrugtherapy', 'داروهای در حال مصرف و سایر اعتیادات', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('currentDrugtherapy', old('currentDrugtherapy',$description->currentDrugtherapy), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('allergyTo', 'حساسیت به', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('allergyTo', old('allergyTo',$description->allergyTo), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('familyHistory', 'سوابق فامیلی', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('familyHistory', old('familyHistory',$description->familyHistory), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route('admin.description.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection