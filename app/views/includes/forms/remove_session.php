<div class="modal fade" id="remove-session">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="scripts/admin_scripts.php" method="post" class="p-3">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="uil uil-exclamation-triangle fs-1 text-danger me-3"></i>
                        <p class="fw-bold pt-3">Are you sure you want to Cancel this Session ?</p>
                    </div>
                    <input type="text" id="sessionId" name="sessionId">
                    <div class="d-flex justify-content-around w-75 m-auto">
                        <!-- <button type="submit" class="btn btn-white" data-bs-dismiss="modal">Cancel</button> -->
                        <button type="submit" name="cancelSession" class="btn text-white bg-danger">remove</button>
                    </div>
                </form>
            </div>
        </div>
    </div>