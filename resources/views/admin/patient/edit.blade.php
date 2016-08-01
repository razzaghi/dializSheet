@extends('admin.layouts.master')

@section('content')

    <div class="col-sm-11">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
            </div>
        @endif
    </div>

    <div class="col-lg-12">

        <div class="row">
            <ul class="nav nav-tabs">
                <li class="active bold"><a data-toggle="tab" href="#home">اطلاعات بیمار</a></li>
                <li class="bold"><a data-toggle="tab" href="#menu1">اطلاعات بالینی</a></li>
                <li class="bold"><a data-toggle="tab" href="#menu2">وضعیت عمومی بیمار</a></li>
                <li class="bold"><a data-toggle="tab" href="#menu3">عمل های بیمار</a></li>
                <li class="bold"><a data-toggle="tab" href="#menu4">درمانی</a></li>
                <li class="bold"><a data-toggle="tab" href="#menu5">ترخیص</a></li>
                <li class="bold"><a data-toggle="tab" href="#menu6">مجوز ها</a></li>
                <li class="bold"><a data-toggle="tab" href="#menu7">حالات روحی</a></li>
                <li class="bold"><a data-toggle="tab" href="#menu8">علت ESRD</a></li>
                <li class="bold"><a data-toggle="tab" href="#menu9">نوع دسترسی عروقی</a></li>
                <li class="bold"><a data-toggle="tab" href="#menu10">دارو های مصرفی بیمار</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="col-lg-9">

                        {!! Form::model($patient, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array('admin.patient.update', $patient->id))) !!}


                        <span class="pull-left margin-left-60">
                            {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-success')) !!}
                            {!! link_to_route('admin.patient.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
                        </span>

                        <br/>
                        <br/>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                {!! Form::label('unitNumber', 'شماره پرونده *', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('unitNumber', old('unitNumber',$patient->unitNumber), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                {!! Form::label('family', 'نام خانوادگی*', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('family', old('family',$patient->family), array('class'=>'form-control')) !!}

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                {!! Form::label('name', 'نام*', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('name', old('name',$patient->name), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                {!! Form::label('fatherName', 'نام پدر', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('fatherName', old('fatherName',$patient->fatherName), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                {!! Form::label('gender_id', 'جنسیت*', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::select('gender_id', $gender, old('gender_id',$patient->gender_id), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                {!! Form::label('maritalstatus_id', 'وضعیت ازدواج', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::select('maritalstatus_id', $maritalstatus, old('maritalstatus_id',$patient->maritalstatus_id), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                {!! Form::label('idNo', 'شماره شناسنامه *', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('idNo', old('idNo',$patient->idNo), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                {!! Form::label('recordHosp', 'سابقه بستری', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::hidden('recordHosp','') !!}
                                    {!! Form::checkbox('recordHosp', 1, $patient->recordHosp == 1) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                {!! Form::label('numOfHosp', 'دفعات بستری', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('numOfHosp', old('numOfHosp',$patient->numOfHosp), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                {!! Form::label('dateOfBirth', 'تاریخ تولد', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('dateOfBirth', old('dateOfBirth',$patient->dateOfBirth), array('class'=>'form-control datepicker')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                {!! Form::label('placeOfBirth', 'مکان تولد', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('placeOfBirth', old('placeOfBirth',$patient->placeOfBirth), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                {!! Form::label('placeOfId', 'کد مکان', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('placeOfId', old('placeOfId',$patient->placeOfId), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                {!! Form::label('religion', 'مذهب', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('religion', old('religion',$patient->religion), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                {!! Form::label('occupation_id', 'شغل', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::select('occupation_id', $occupation, old('occupation_id',$patient->occupation_id), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                {!! Form::label('placeOfWork', 'محل شغل', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('placeOfWork', old('placeOfWork',$patient->placeOfWork), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                {!! Form::label('address', 'آدرس بیمار', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('address', old('address',$patient->address), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                {!! Form::label('phoneNumber', 'تلفن بیمار', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('phoneNumber', old('phoneNumber',$patient->phoneNumber), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                {!! Form::label('reffered', 'معرف - همراه', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('reffered', old('reffered',$patient->reffered), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                {!! Form::label('addressOfReffered', 'آدرس همراه', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('addressOfReffered', old('addressOfReffered',$patient->addressOfReffered), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                {!! Form::label('phoneOfReffered', 'تلفن همراه', array('class'=>'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::text('phoneOfReffered', old('phoneOfReffered',$patient->phoneOfReffered), array('class'=>'form-control')) !!}

                                </div>
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>اطلاعات بالینی</h3>
                    <p></p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>وضعیت عمومی بیمار</h3>
                    <p></p>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3>عمل های بیمار</h3>
                    <p></p>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <h3>درمانی</h3>
                    <p></p>
                </div>
                <div id="menu5" class="tab-pane fade">
                    <h3>ترخیص</h3>
                    <p></p>
                </div>
                <div id="menu6" class="tab-pane fade">
                    <h3>مجوز ها</h3>
                    <p></p>
                </div>
                <div id="menu7" class="tab-pane fade">
                    <h3>حالات روحی</h3>
                    <p></p>
                </div>
                <div id="menu8" class="tab-pane fade">
                    <h3>علت ESRD</h3>
                    <p></p>
                </div>
                <div id="menu9" class="tab-pane fade">
                    <h3>نوع دسترسی عروقی</h3>
                    <p></p>
                </div>
                <div id="menu10" class="tab-pane fade">
                    <h3>دارو های مصرفی بیمار</h3>
                    <p></p>
                </div>
            </div>

        </div>
    </div>

    <div class="pull-left patient-toolbar col-lg-3">
        <h3>
            مدیریت اطلاعات پزشکی بیمار
        </h3>

        <br/>
        <table class="table table-default">
            <tbody>
            <tr>
                <td>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md">اطلاعات پذیرش <i
                                class="fa fa-user"></i></a>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md"> اطلاعات ترخیص <i
                                class="fa fa-user"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/admin/description/{{ $patient->id  }}" class="btn btn-primary btn-md">شرح حال</a>
                    <a href="/patient/lastDializ/{{ $patient->id  }}" class="btn btn-primary btn-md">آخرین
                        دیالیز</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/admin/doctororder/{{ $patient->id  }}" class="btn btn-primary btn-md">دستورات پزشک</a>
                    <a href="/admin/nurseattention/{{ $patient->id  }}" class="btn btn-primary btn-md"> ملاحضات
                        پرستاری </a>

                </td>
            </tr>
            <tr>
                <td>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md"> سوابق جراحی </a>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md"> آزمایش
                        ماهانه </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md"> سوابق
                        درمانی </a>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md"> آزمایش سه
                        ماهه </a>
                </td>
            </tr>
            <tr>
                <td>

                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md">آزمایش یک
                        ساله</a>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md"> آزمایش شش
                        ماهه </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md">ارزیابی کفالت
                        دیالیز</a>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md">وضعیت عمومی</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md"> اطلاعات
                        بالینی </a>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md"> دستورات
                        دارویی </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md"> توجهات
                        پرستاری </a>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md">معاینات بدنی</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md">دستورات پزشک</a>
                    <a href="/admin/addmission/{{ $patient->id  }}" class="btn btn-primary btn-md">داروهای مصرفی</a>
                </td>
            </tr>

            </tbody>
        </table>

    </div>


@endsection