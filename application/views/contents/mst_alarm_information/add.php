<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
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
                        <input id="alarm_id" name="alarm_id" type="text" class="form-control">
                        <small class="text-danger error-message"></small>
                        <!-- </div> -->
                        <!-- </div> -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group form-group-default">
                                <label>Alarm Name <span class="text-danger font-weight-bold" style="font-size:14px">*</span></label>
                                <input id="alarm_name" name="alarm_name" type="text" class="form-control">
                                <small class="text-danger error-message"></small>
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