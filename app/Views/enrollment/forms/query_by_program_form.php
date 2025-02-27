
    <!-- Modal -->
    <div class="modal fade" id="queryByProgram" tabindex="-1" aria-labelledby="queryByProgramLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header alert alert-success">
                    <h5 class="modal-title" id="queryByProgramLabel">Query or filter data by program</h5>
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
                                <label for="program"><i class="fas fa-graduation-cap"></i> Select Program</label>
                                <select class="form-control" id="program" name="program">
                                    <option value="">-- Select a Program --</option>
                                    <option>Certificate & Diploma Programs</option>
                                    <option>Non Degree Programs</option>
                                    <option>Degree Programs</option>
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
