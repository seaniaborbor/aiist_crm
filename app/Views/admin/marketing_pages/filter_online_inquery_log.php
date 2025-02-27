
    <!-- Modal -->
    <div class="modal fade" id="LeadForm" tabindex="-1" aria-labelledby="LeadFormLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header alert alert-success">
                    <h5 class="modal-title" id="LeadFormLabel">Query Lead / Online Inquiry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                        <form>
                            <!-- Start Date Field -->
                            <div class="form-group">
                                <label for="start_date_program"><i class="fas fa-calendar-alt"></i> Start Date</label>
                                <input type="date" class="form-control" id="start_date_program" name="start_date_program">
                            </div>
                            <!-- End Date Field -->
                            <div class="form-group">
                                <label for="end_date_program"><i class="fas fa-calendar-alt"></i> End Date</label>
                                <input type="date" class="form-control" id="end_date_program" name="end_date_program">
                            </div>
                            <!-- Select Field -->
                            <div class="form-group">
                                <label for="program"><i class="fas fa-question"></i> Select Status </label>
                                <select class="form-control" id="program" name="program">
                                    <option value="">-- Select a Program --</option>
                                    <option value="Contacted">Contacted</option>
                                    <option value="Inquirey Closed">Inquiry Closed</option>
                                    <option value="Has Purchased Form">Has Purchased Form</option>
                                    <option value="Enrolled">Enrolled</option>
                                    <option value="No Course of Interest">No Course of Interest</option>
                                    <option value="Unreacheable">Unreacheable</option>
                                    <option value="Inquiry Closed">Inquirey Closed</option>
                                </select>
                            </div>
                </div>
                <div class="modal-footer">
               
                <button  type="submit" class="btn p-0 btn-sm btn-success btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">
                        <i class="fas fa-save"></i>
                    </span>
                    <span class="text">Query Data</span>
                </button>
                <a href="#" class="btn p-0 btn-sm btn-danger btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">
                        <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Cancel</span>
                </a>
            </div>
            </form>            
            </div>
        </div>
    </div>
