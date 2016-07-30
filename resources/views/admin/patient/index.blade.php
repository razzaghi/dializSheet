@extends('admin.layouts.master')

@section('content')

    <h1>
        مدیریت اطلاعات بیماران
    </h1>

    <br/>
    <div class="row">
        <div class="col-lg-1">{!! link_to_route('admin.patient.create', trans('quickadmin::templates.templates-view_index-add_new') , null, array('class' => 'btn btn-success')) !!}</div>
        <div class="col-lg-1">
            <button class="btn btn-danger" id="delete">
                {{ trans('quickadmin::templates.templates-view_index-delete_checked') }}
            </button>
        </div>
    </div>


    <br/>

    @if ($patient->count())
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
                        <th>شماره پرونده</th>
                        <th>فامیلی</th>
                        <th>نام</th>
                        <th>نام پدر</th>
                        <th>وضعیت ازدواج</th>
                        <th>شغل</th>
                        <th>تلفن</th>
                        <th>تلفن همراه</th>

                        <th>&nbsp;</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($patient as $row)
                        <tr>
                            <td>
                                {!! Form::checkbox('del-'.$row->id,1,false,['class' => 'single','data-id'=> $row->id]) !!}
                            </td>
                            <td>{{ $row->unitNumber }}</td>
                            <td>{{ $row->family }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->fatherName }}</td>
                            <td>{{ isset($row->maritalstatus->title) ? $row->maritalstatus->title : '' }}</td>
                            <td>{{ isset($row->occupation->title) ? $row->occupation->title : '' }}</td>
                            <td>{{ $row->phoneNumber }}</td>
                            <td>{{ $row->phoneOfReffered }}</td>

                            <td>
                                {!! link_to_route('admin.patient.edit', trans('quickadmin::templates.templates-view_index-info'), array($row->id), array('class' => 'btn btn-xs btn-info')) !!}
                                {!! Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => "return confirm('".trans("quickadmin::templates.templates-view_index-are_you_sure")."');",  'route' => array('admin.patient.destroy', $row->id))) !!}
                                {!! Form::submit(trans('quickadmin::templates.templates-view_index-delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {!! Form::open(['route' => 'admin.patient.massDelete', 'method' => 'post', 'id' => 'massDelete']) !!}
                <input type="hidden" id="send" name="toDelete">
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