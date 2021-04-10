@extends('admin.layouts.v_template')
@section('title', 'Position')

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
                                        <th class="text-center">Available</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($position as $item)
                                    <tr>
                                            <td>{{$item->id}}</td>
                                            <td class="text-center">{{$item->position}}</td>
                                            {{-- <td class="text-center">{{$item->available}}</td> --}}
                                            <td class="text-center">
                                                @if ($item->available == 1)
                                                <i class="material-icons" style="color: blue">event_available</i>
                                                @else
                                                <i class="material-icons" style="color: red">event_busy</i>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                <button type="button" onclick="editPosition(this)"
                                                     data-toggle="modal"
                                                     data-target="#editPosition"
                                                     data-id="{{$item->id}}"
                                                     data-position="{{$item->position}}"
                                                     data-available="{{$item->available}}"
                                                     class="dropdown-toggle btn bg-orange btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><strong>Edit</strong></a>
                                                </div>
                                                </div>
                                                <div class="dropdown">
                                                {{-- <form action="/positioin/{{$item->id}}"
                                                        onsubmit="return confirm('Are you sure you want to delete?')" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf --}}
                                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                                <button type="submit" data-id="{{$item->id}}" class="sa-remove dropdown-toggle btn btn-circle waves-effect waves-circle waves-float">
                                                    <i class="material-icons">delete_forever</i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#"><strong>Delete</strong></a>
                                                </div>
                                                {{-- </form> --}}
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
@extends('admin.position.modals.v_edit')
@push('custom-js')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> --}}
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="{{asset('admin/login/')}}/plugins/sweetalert/sweetalert.min.js"></script>

<script>
    $('#myFormIdCreate').submit(function() {
        $("#myButtonID", this)
            .html("Please Wait...")
            .attr('disabled', 'disabled');
        return true;
    });
</script>
<script>
    $('#myFormIdEdit').submit(function() {
        $("#myButtonIDEdit", this)
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
<script type="application/javascript">
    function editPosition(e) {
        var positionId = $(e).data("id");
        var position = $(e).data("position");
        var available = $(e).data("available");
        if (e != 0) {
        document.getElementById("id").value = positionId;
        document.getElementById("position_name").value = position;
        if (available == 1) {
            document.getElementById("customSwitch").checked = true;
        } else {
            document.getElementById("customSwitch").checked = false;
        }
    // alert(required);
    }else{
    alert("no");
    // console.log("")
    }
    }

    $('input[type="checkbox"]').on('customSwitch', function (e, data) {
        var $element = $(data.el),
            value = data.value;
        $element.attr('value', value);
    });
    $('input[type="checkbox"]').on('customSwitch', function (e, data) {
        var $element = $(data.el),
            value = data.value;
        $element.attr('value', value);
    });
</script>
<script>

    $('.sa-remove').click(function () {
            var token = $("meta[name='csrf-token']").attr("content");
            var postId = $(this).data('id');
            swal({
                title: "are u sure?",
                text: "Delete Position",
                type: "error",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger waves-effect waves-light',
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function(){
                $.ajax({
                url:'/position/'+postId,
                type:'DELETE',
                data:{id:postId
                     ,_token: token,},
                success:function(result){
                // console.log(result.dataId);
                location.reload();
                }
                });
                // window.location.href = "position/destroy/" + postId;
                });
            });
</script>
<script>
$(document).ready( function () {
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    $('#aldiTable').DataTable({
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
