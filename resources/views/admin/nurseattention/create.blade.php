@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::open(array('route' => 'admin.nurseattention.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('patient_id', 'بیمار*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('patient_id', $patient, old('patient_id'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('dateTimeAtt', 'زمان و تاریخ ملاحظه*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('dateTimeAtt', old('dateTimeAtt'), array('class'=>'form-control datetimepicker')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('nurse_id', 'پرستار*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('nurse_id', $nurse, old('nurse_id'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('description', 'شرح*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description', old('description'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection