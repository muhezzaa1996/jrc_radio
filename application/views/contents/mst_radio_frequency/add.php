<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h4 class="modal-title">
                    <span class="fw-mediumbold text-primary font-weight-bold" id="modalTitle"></span>
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" action="#" id="formModalAdd">
                    <div class="row">
                        <!-- <div class="col-md-12"> -->
                        <!-- <div class="form-group"> -->
                        <input id="radio_id" name="radio_id" type="hidden" class="form-control">
                        <small class="text-danger error-message"></small>
                        <!-- </div> -->
                        <!-- </div> -->
                        <div class="col-md-3 pr-0">
                            <div class="form-group form-group-default">
                                <label>Radio Number <span class="text-danger font-weight-bold" style="font-size:14px">*</span></label>
                                <input id="radio_number" name="radio_number" type="number" class="form-control">
                                <small class="text-danger error-message"></small>
                            </div>
                        </div>
                        <div class="col-md-3 pr-0">
                            <div class="form-group form-group-default">
                                <label>Station Number <span class="text-danger font-weight-bold" style="font-size:14px">*</span></label>
                                <input id="station_no" name="station_no" type="text" class="form-control">
                                <small class="text-danger error-message"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Station Display Name <span class="text-danger font-weight-bold" style="font-size:14px">*</span></label>
                                <input id="station_display_name" name="station_display_name" type="text" class="form-control">
                                <small class="text-danger error-message"></small>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label>Type Name <span class="text-danger font-weight-bold" style="font-size:14px">*</span></label>
                                <input id="type_name" name="type_name" type="text" class="form-control">
                                <small class="text-danger error-message"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Serial Number</label>
                                <input id="serial_number" name="serial_number" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label>Frequency/Channel</label>
                                <input id="frequency_channel" name="frequency_channel" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>IP Address (Virtual) <span class="text-danger font-weight-bold" style="font-size:14px">*</span></label>
                                <input id="ip_address" name="ip_address" type="text" class="form-control">
                                <small class="text-danger error-message"></small>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label>Subnet Mask <span class="text-danger font-weight-bold" style="font-size:14px">*</span></label>
                                <input id="subnet_mask" name="subnet_mask" type="text" class="form-control">
                                <small class="text-danger error-message"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Default Gateway <span class="text-danger font-weight-bold" style="font-size:14px">*</span></label>
                                <input id="default_gateway" name="default_gateway" type="text" class="form-control">
                                <small class="text-danger error-message"></small>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label>TCP Port</label>
                                <input id="tcp_port" name="tcp_port" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>DSC Unit Address</label>
                                <input id="dsc_unit_address" name="dsc_unit_address" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer no-bd">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" id="btnSubmit" class="btn btn-primary" onclick="submit()">Save</button>
                <button class="btn btn-outline-primary font-weight-bold" id="btnSubmitLoader" style="font-size: 12px" disabled>
                    <span class="spinner-border" role="status" aria-hidden="true"></span>
                    Saving Data...
                </button>
            </div>
        </div>
    </div>
</div>