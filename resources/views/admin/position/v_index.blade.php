@extends('admin.layouts.v_template')
@section('title', 'Position')

@push('custom-css')
<!-- DataTables -->
{{-- <link rel="stylesheet" href="{{asset('admin/login/')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.css"> --}}
<!-- Dropdown-item -->
{{-- <link rel="stylesheet" href="{{asset('admin/login/')}}/dist/css/custom/dropdowncustom.css"> --}}

<link href="{{asset('admin/login/')}}/costume/tablecostume.css" rel="stylesheet">
{{-- <link href="{{asset('admin/login/')}}/costume/switchcostume.css" rel="stylesheet"> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<!-- JQuery DataTable Css -->
{{-- <link href="{{ asset('admin/login/') }}/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet"> --}}
<style>
    .material-icons {
        vertical-align: top;
    }
    label {
    color: #f44336;
    }
    a{
    color: #f44336;
    }
    .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
    color: #f44336;
    }
    .btn-circle {
        width: 13px !important;
        height: 28px !important;
    }
    .btn-circle i {
        font-size: 16px !important;
        position: inherit !important;
        right: 8px !important;
        left: unset;
    }

    /* dropdown */
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  border-radius: 5px;
  background-color: #f44336;;
  /* min-width: 40px; */
  width: 50px;
  height: 15px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: rgb(255, 255, 255);
  padding: 0px 0px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
    background-color: rgb(196, 123, 56);
    border-radius: 5px;
}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
}
</style>

@endpush
@section('content')

<div class="container-fluid">
    <div class="block-header">
        <h2>
            CONFIG
            <small>Table Config <a target="_blank">Position</a></small>
        </h2>
    </div>
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                @include('sweetalert::alert')
                <div class="header">
                    <div class="row">
                    <div class="col-sm-5">
                        <h2>
                            Position
                        </h2>
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
                    <div class="col-sm-1 dropdown pull-right">
                        <button type="button" class="dropdown-toggle btn bg-red btn-circle waves-effect waves-circle waves-float"
                        data-toggle="modal" data-target="#addPosition">
                            <i class="material-icons">add</i>
                        </button>
                        <div class="dropdown-content" style="height: unset; border-radius: 5px;">
                            <a href="#" class="text-center"  data-toggle="modal" data-target="#addPosition"><strong>Add</strong></a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <div>
                            <table id="aldiTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th class="text-center">Position</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($position as $item)
                                    <tr>
                                            <td>{{$item->id}}</td>
                                            <td class="text-center">{{$item->position}}</td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                <button type="button" class="dropdown-toggle btn bg-orange btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><strong>Edit</strong></a>
                                                </div>
                                                </div>
                                                <div class="dropdown">
                                                <form action="/positioin/{{$item->id}}"
                                                        onsubmit="return confirm('Are you sure you want to delete?')" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                <button type="button" class="dropdown-toggle btn btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">delete_forever</i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><strong>Delete</strong></a>
                                                </div>
                                                </form>
                                                </div>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
@extends('admin.position.modals.v_add')
@push('custom-js')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> --}}
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
    $('#myFormIdCreate').submit(function() {
        $("#myButtonID", this)
            .html("Please Wait...")
            .attr('disabled', 'disabled');
        return true;
    });
</script>
<script type="text/javascript">
    @if (count($errors) > 0)
        $('#addPosition').modal('show');
    @endif
</script>
<script>
//     $(document).ready( function () {
//     $('#aldiTable').DataTable();
// } );
$(document).ready( function () {
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    $('#aldiTable').DataTable({
        // processing: true,
        // serverSide: true,
        // ajax: {
        //   url: '{{ url('position/show') }}',
        //   type: 'GET',
        //   destroy: true,
        // //   dataType: 'json',
        //         // "dataSrc": "dataPosition"
        //   dataSrc: function(json) {
        //             if ( json.dataPosition === null ) {
        //                 return [];
        //             }
        //             // var amount = JSON.parse(json.dataPosition);
        //             console.log(json);
        //             return json.dataPosition;
        //             }
        //         },
        //         columns: [
        //             {data: "id"},
        //             {data: "position"},
        //             ],
        //             "columnDefs": [
        //                 {
        //                 "data": null
        //                 }
        //             ],
        language: {
            searchPlaceholder: "Search",
            search : '<i class="material-icons">search</i>',
            'paginate': {
                'previous': '<a>Back <i class="material-icons">call_missed</i></a>',
                'next': '<a><i class="material-icons">call_missed_outgoing</i> Next</a>',
                }}
    });
});
  </script>
@endpush
