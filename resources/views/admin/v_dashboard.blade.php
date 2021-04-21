@extends('admin.layouts.v_template')
@section('title', 'Dashboard')

@push('custom-css')
<!-- DataTables -->
{{-- <link rel="stylesheet" href="{{asset('admin/login/')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.css"> --}}
<!-- Dropdown-item -->
{{-- <link rel="stylesheet" href="{{asset('admin/login/')}}/dist/css/custom/dropdowncustom.css"> --}}

<link href="{{asset('admin/login/')}}/costume/tablecostume.css" rel="stylesheet">
<link href="{{asset('admin/login/')}}/costume/newtablecostume.css" rel="stylesheet">
<link href="{{asset('admin/login/')}}/plugins/sweetalert/sweetalert.css" rel="stylesheet">
{{-- <link href="{{asset('admin/login/')}}/costume/switchcostume.css" rel="stylesheet"> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<!-- JQuery DataTable Css -->
{{-- <link href="{{ asset('admin/login/') }}/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet"> --}}
@endpush
@section('content')

 <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_pin_circle</i>
                        </div>
                        <div class="content">
                            <div class="text">Position Available</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">
                                <p>{{$position->count()}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Candidate Apply</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">
                                {{$candidate->count()}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">insert_emoticon</i>
                        </div>
                        <div class="content">
                            <div class="text">Male</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">
                                {{$male->count()}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="text">Female</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">
                                {{$female->count()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12">
                                    <h2>Gender</h2>
                                </div>
                            </div>
                            {{-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </div>
                        <div class="body">
                            <div id="container" style="width: 401px; height: 200px; margin: 0 auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

        </div>

@endsection
@push('custom-js')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> --}}
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="{{asset('admin/login/')}}/plugins/sweetalert/sweetalert.min.js"></script>

{{-- <script>
    // Radialize the colors

function handleData(responseData) {

Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

// Build the chart

$('#container').highcharts({
        credits: {
            enabled: false
        },
        exporting: { enabled: true },
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Gender'
        },
        tooltip: {
            pointFormat: '{series.sex}:<b> {point.y} ({point.percentage:.1f}%) </b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.sex}</b>: {point.y} ({point.percentage:.1f}%)',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'grey'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Total',
            data: responseData
        }]
    });

}

$(document).ready(function() {
     $.ajax({
        url: '{{ url('candidate/show') }}',
        type: 'GET',
        async: true,
        dataType: 'json',
        success: function(data) {
            // console.log(data);
            handleData(data);
        }
      });
  });

</script> --}}

<script>
    // Radialize the colors

function handleData3(responseData3) {
    $(function () {
            Highcharts.setOptions({
        lang: {
            thousandsSep: '',
        }
    });

$('#container').highcharts({
        credits: {
            enabled: false
        },
        exporting: { enabled: true },
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Gender'
        },
        tooltip: {
            pointFormat: '{series.sex}:<b> {point.y} ({point.percentage:.1f}%) </b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.sex}</b>: {point.y} ({point.percentage:.1f}%)',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'grey'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Total',
            data: responseData3
        }]
    });
});

}

$(document).ready(function() {
    var Genid = 0;
     $.ajax({
        url: '{{ url('candidate/show/') }}' + Genid,
        type: 'GET',
        async: true,
        dataType: 'json',
        success: function(data) {
            // console.log(data);
            handleData3(data);
        }
      });
  });

</script>



@endpush
