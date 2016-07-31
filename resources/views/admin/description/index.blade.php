@extends('admin.layouts.master')

@section('content')

    <h1>
        مدیریت اطلاعات پذیرش بیمار

    </h1>

    <br/>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3>اطلاعات بیمار</h3>
        </div>
        <div class="panel-body">

            <div class="row">
                <div class="form-group col-lg-3">
                    <div class="col-sm-7">
                        <h4>
                            شماره پرونده :
                        </h4>
                    </div>
                    <div class="col-sm-5">
                        <h5> {{ $patient->unitNumber }}</h5>
                    </div>
                </div>
                <div class="form-group col-lg-3">
                    <div class="col-sm-7">
                        <h4>
                            نام و نام خانوادگی :
                        </h4>
                    </div>
                    <div class="col-sm-5">
                        <h5>{{ $patient->name . " " . $patient->family }}</h5>
                    </div>
                </div>
                <div class="form-group col-lg-2">
                    <div class="col-sm-6">
                        <h4>
                            نام پدر :
                        </h4>
                    </div>
                    <div class="col-sm-6">
                        <h5>{{ $patient->fatherName }} </h5>
                    </div>
                </div>

                <div class="form-group col-lg-3">
                    <div class="col-sm-6">
                        <h4>
                            وضعیت ازدواج :
                        </h4>
                    </div>
                    <div class="col-sm-6">
                        <h5>{{ $patient->maritalStatus->title }}</h5>
                    </div>
                </div>

            </div>

            <div class="row">


                <div class="form-group col-lg-3">
                    <div class="col-sm-6">
                        <h4>
                            تاریخ تولد :
                        </h4>
                    </div>
                    <div class="col-sm-6">
                        <h5> {{ $patient->dateOfBirth }}</h5>
                    </div>
                </div>
                <div class="form-group col-lg-2">
                    <div class="col-sm-6">
                        <h4>
                            تلفن :
                        </h4>
                    </div>
                    <div class="col-sm-6">
                        <h5> {{ $patient->phoneNumber }}</h5>
                    </div>
                </div>
                <div class="form-group col-lg-7">
                    <div class="col-sm-2">
                        <h4>
                            آدرس :
                        </h4>
                    </div>
                    <div class="col-sm-10">
                        <h5>{{ $patient->address }}</h5>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <a href="/admin/description/create/{{ $id  }}" class="btn btn-primary">ثبت شرح حال</a>

    @if ($description->count())
        <button class="btn btn-danger" id="delete">
            {{ trans('quickadmin::templates.templates-view_index-delete_checked') }}
        </button>
    @endif

    <br/>
    <br/>

    @if ($description->count())
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">{{ trans('quickadmin::templates.templates-view_index-list') }}</div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-hover table-responsive datatable" id="datatable">
                    <thead>
                    <tr>
                        <th>
                            {!! Form::checkbox('delete_all',1,false,['class' => 'mass']) !!}
                        </th>
                        <th>بیمار</th>
                        <th>نشانه های فعلی بیمار</th>
                        <th>تاریخچه بیماری های فعلی</th>
                        <th>تاریخچه بیماری های قبلی</th>
                        <th>داروهای در حال مصرف و سایر اعتیادات</th>
                        <th>حساسیت به</th>
                        <th>سوابق فامیلی</th>

                        <th>&nbsp;</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($description as $row)
                        <tr>
                            <td>
                                {!! Form::checkbox('del-'.$row->id,1,false,['class' => 'single','data-id'=> $row->id]) !!}
                            </td>
                            <td>{{ isset($row->patient->family) ? $row->patient->family : '' }}</td>
                            <td>{{ $row->presentingSymptoms }}</td>
                            <td>{{ $row->historyPeresentIllness }}</td>
                            <td>{{ $row->pastDiseaseHistory }}</td>
                            <td>{{ $row->currentDrugtherapy }}</td>
                            <td>{{ $row->allergyTo }}</td>
                            <td>{{ $row->familyHistory }}</td>

                            <td>
                                {!! link_to_route('admin.description.edit', trans('quickadmin::templates.templates-view_index-edit'), array($row->id), array('class' => 'btn btn-xs btn-info')) !!}
                                {!! Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => "return confirm('".trans("quickadmin::templates.templates-view_index-are_you_sure")."');",  'route' => array('admin.description.destroy', $row->id))) !!}
                                {!! Form::submit(trans('quickadmin::templates.templates-view_index-delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {!! Form::open(['route' => 'admin.description.massDelete', 'method' => 'post', 'id' => 'massDelete']) !!}
                <input type="hidden" id="send" name="toDelete">
                <input type="hidden" id="patientId" name="patientId" value="{{$id}}">
                {!! Form::close() !!}
            </div>
        </div>
    @else
        {{ trans('quickadmin::templates.templates-view_index-no_entries_found') }}
    @endif

@endsection

@section('javascript')
    <script>
        $(document).ready(function () {
            $('#delete').click(function () {
                if (window.confirm('{{ trans('quickadmin::templates.templates-view_index-are_you_sure') }}')) {
                    var send = $('#send');
                    var mass = $('.mass').is(":checked");
                    if (mass == true) {
                        send.val('mass');
                    } else {
                        var toDelete = [];
                        $('.single').each(function () {
                            if ($(this).is(":checked")) {
                                toDelete.push($(this).data('id'));
                            }
                        });
                        send.val(JSON.stringify(toDelete));
                    }
                    $('#massDelete').submit();
                }
            });
        });
    </script>
@stop