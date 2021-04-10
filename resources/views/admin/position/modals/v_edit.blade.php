<div class="modal fade in" id="editPosition" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form id="myFormIdEdit" role="form" action="/position/update" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Add Position</h4>
            </div>
            <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-5 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="position_edit" style="color: black">Name :</label>
                        </div>
                        <div class="col-lg-7 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="position" id="position_name" class="form-control @error('position') is-invalid @enderror" placeholder="Enter Position" value="{{old('position')}}">
                                    <input type="hidden" name="id" id="id">
                                </div>
                                @error('position')
                                <div class="invalid-feedback" style="font-size: 12px;color: red; ">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-lg-5 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="available" style="color: black">Available :</label>
                        </div>
                        <div class="col-lg-7 col-md-10 col-sm-8 col-xs-7" style="top: 10px">
                            <div class="switch">
                                <label>
                                    <input name="available" type="checkbox" id="customSwitch">
                                    <span class="lever switch-col-red">
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="myButtonIDEdit" type="submit" class="btn btn-link waves-effect" style="color: #fff;background-color: rgb(240, 33, 33); border-radius: 5px;">ADD</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
