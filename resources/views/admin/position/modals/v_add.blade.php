<div class="modal fade in" id="addPosition" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form id="myFormIdCreate" class="form-horizontal" role="form" action="/position" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Add Position</h4>
            </div>
            <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2" style="color: black">Name :</label>
                        </div>
                        <div class="col-lg-8 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="position" id="email_address_2" class="form-control @error('position') is-invalid @enderror" placeholder="Enter Position" value="{{old('position')}}">
                                </div>
                                @error('position')
                                <div class="invalid-feedback" style="font-size: 12px;color: red; ">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="myButtonID" type="submit" class="btn btn-link waves-effect" style="color: #fff;background-color: rgb(240, 33, 33); border-radius: 5px;">ADD</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
