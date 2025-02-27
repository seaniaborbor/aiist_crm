<!-- Edit High School & Family Details Modal (Large) -->
<div class="modal fade" id="editFamilyModal" tabindex="-1" aria-labelledby="editFamilyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Large modal -->
        <div class="modal-content">
            <div class="modal-header alert alert-success">
                <h5 class="modal-title" id="editFamilyModalLabel"><i class="fas fa-edit"></i> Edit High School & Family Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('student/updateFamilyDetails') ?>" method="post">
                <div class="modal-body">
                    <div class="container">
                        <!-- High School Details -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label><i class="fas fa-school"></i> High School</label>
                                <input type="text" class="form-control" name="highSchool" value="<?= esc($student['highSchool']) ?>" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label><i class="fas fa-calendar-alt"></i> Year Graduated</label>
                                <input type="number" class="form-control" name="yearGraduated" value="<?= esc($student['yearGraduated']) ?>" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label><i class="fas fa-phone"></i> High School Contact</label>
                                <input type="tel" class="form-control" name="highSchoolContact" value="<?= esc($student['highSchoolContact']) ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12"><hr></div>

                        <!-- Father's Details -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label><i class="fas fa-male"></i> Father's Name</label>
                                <input type="text" class="form-control" name="fatherName" value="<?= esc($student['fatherName']) ?>" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label><i class="fas fa-phone"></i> Father's Phone</label>
                                <input type="tel" class="form-control" name="fatherPhone" value="<?= esc($student['fatherPhone']) ?>" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label><i class="fas fa-map-marker-alt"></i> Father's Address</label>
                                <input type="text" class="form-control" name="fatherAddress" value="<?= esc($student['fatherAddress']) ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12"><hr></div>

                        <!-- Mother's Details -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label><i class="fas fa-female"></i> Mother's Name</label>
                                <input type="text" class="form-control" name="motherName" value="<?= esc($student['motherName']) ?>" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label><i class="fas fa-phone"></i> Mother's Phone</label>
                                <input type="tel" class="form-control" name="motherPhone" value="<?= esc($student['motherPhone']) ?>" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label><i class="fas fa-map-marker-alt"></i> Mother's Address</label>
                                <input type="text" class="form-control" name="motherAddress" value="<?= esc($student['motherAddress']) ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12"><hr></div>

                        <!-- Sponsor Details -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label><i class="fas fa-user-friends"></i> Sponsor Name</label>
                                <input type="text" class="form-control" name="sponsorName" value="<?= esc($student['sponsorName']) ?>" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label><i class="fas fa-phone"></i> Sponsor Phone</label>
                                <input type="tel" class="form-control" name="sponsorPhone" value="<?= esc($student['sponsorPhone']) ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12"><hr></div>

                        <!-- School Records Access -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label><i class="fas fa-question-circle"></i> School Records Access</label>
                                <select class="form-control" name="schoolRecords">
                                    <option value="Yes" <?= ($student['schoolRecords'] == 'Yes') ? 'selected' : '' ?>>Yes</option>
                                    <option value="No" <?= ($student['schoolRecords'] == 'No') ? 'selected' : '' ?>>No</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label><i class="fas fa-file-alt"></i> Which Records?</label>
                                <input type="text" class="form-control" name="whichOne" value="<?= esc($student['whichOne']) ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                <button  type="submit" class="btn mt-3 p-0 btn-lg  btn-success btn-icon-split"  >
                    <span class="icon text-white-50">
                        <i class="fas fa-file"></i>
                    </span>
                    <span class="text">Save</span>
                    </button>

                    <button  type="button" class="btn mt-3 p-0 btn-lg  btn-danger btn-icon-split" data-dismiss="modal" >
                    <span class="icon text-white-50">
                        <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Cancell</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

