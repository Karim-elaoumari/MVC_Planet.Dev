<div class="modal fade" id="modal-session">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="scripts/admin_scripts.php" method="POST" name="form_add_session">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Session</h5>
                        <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                    </div>
                    <div class="modal-body">
                            <input type="hidden" id="session-id">
                            <div class="mb-3">
                                <label class="form-label">Session Title</label>
                                <input type="text" name="sessionTitle" class="form-control" id="session-title"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Doctor Name</label>
                                <select name="sessionDoctor" class="form-control" id="doctor-session">
                                      
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Session Start</label>
                                <input type="datetime-local" name="start" class="form-control" id="session-start"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Session end</label>
                                <input type="datetime-local" name="end" class="form-control" id="session-end"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Max number of Appointement</label>
                                <input type="number" min="1" max="50" name="sessionNumber" class="form-control" id="session-number"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" id="session-description" name="sessionDescription" rows="3"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a> -->
                        <button type="submit" name="saveSession" class="btn mycolor button1" id="session-save-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 