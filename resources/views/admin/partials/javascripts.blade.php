<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
{{--<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>--}}
{{--<script src="{{ url('quickadmin/js') }}/timepicker.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>--}}




<script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
<script src="{{ url('quickadmin/js') }}/bootstrap.min.js"></script>
<script src="{{ url('lib/jdatepicker/') }}/bootstrap-datepicker.min.js"></script>
<script src="{{ url('lib/jdatepicker/') }}/bootstrap-datepicker.fa.min.js"></script>
<script src="{{ url('vendor/highcharts/') }}/highcharts.js"></script>
<script src="{{ url('vendor/highcharts/') }}/highcharts-more.js"></script>
<script src="{{ url('vendor/highcharts/modules/') }}/solid-gauge.js"></script>
{{--<script src="{{ url('vendor/highcharts/themes/') }}/dark-blue.js"></script>--}}
<script src="{{ url('quickadmin/js') }}/chart.js"></script>
<script src="{{ url('quickadmin/js') }}/main.js"></script>

<script>

    $('.datepicker').datepicker({
        autoclose: true,
        dateFormat: "{{ config('quickadmin.date_format_jquery') }}"
    });

    {{--$('.datetimepicker').datetimepicker({--}}
    {{--autoclose: true,--}}
    {{--dateFormat: "{{ config('quickadmin.date_format_jquery') }}",--}}
    {{--timeFormat: "{{ config('quickadmin.time_format_jquery') }}"--}}
    {{--});--}}


    $(function () {
        $('#dialysisFlow').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: 'Dialysis Flow'
            },
            xAxis: {
                categories: ['1', '20', '40', '60', '80', '100', '120', '130', '160', '180', '200', '220', '240']
            },
            yAxis: {
                title: {
                    text: 'CC'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Dialysis Flow',
                data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }]
        });

        $('#VENPres').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Venus Pressure Flow'
            },
            xAxis: {
                categories: ['1', '20', '40', '60', '80', '100', '120', '130', '160', '180', '200', '220', '240']
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Venus Pressure',
                data: [10, 20, 30, 50, 60, 65, 75, 54, 80, 98, 100, 120]
            }]
        });
        $('#dlsoRemoved').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: 'DLSO Removed'
            },
            xAxis: {
                categories: ['1', '20', '40', '60', '80', '100', '120', '130', '160', '180', '200', '220', '240']
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'DLSO Removed',
                data: [3, 10, 30, 20, 40, 55, 65, 84, 20, 70, 90, 25]
            }]
        });

        $('#dufRemoved').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: 'DUF Removed'
            },
            xAxis: {
                categories: ['1', '20', '40', '60', '80', '100', '120', '130', '160', '180', '200', '220', '240']
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },
            series: [{
                name: 'DUF Removed',
                data: [10, 20, 30, 50, 60, 65, 75, 54, 80, 98, 100, 120]
            }]
        });
    });
</script>
