<div class="modal fade" id="modalDelete" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-gray-900 font-weight-bold" style="font-size: 18px">Confirmation Delete Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <input type="hidden" class="form-control" name="id_hapus" id="id_hapus">
            </div>
            <div class="modal-body text-gray-800" id="textConfirm"></div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-outline-danger font-weight-bold" type="button" data-dismiss="modal" style="font-size: 12px">Close</button>
                <button class="btn btn-sm btn-outline-primary font-weight-bold" type="button" id="btnSubmitDelete" style="font-size: 12px" onclick="submit_delete()">Delete</button>
                <button class="btn btn-sm btn-outline-primary font-weight-bold" type="button" id="btnSubmitDeleteLoader" style="font-size: 12px" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Deleting Data ...
                </button>
            </div>
        </div>
    </div>
</div>