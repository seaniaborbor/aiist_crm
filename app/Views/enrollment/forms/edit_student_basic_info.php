
<!-- Edit Student Modal -->
<div class="modal fade" id="editStudentModal" tabindex="-1" aria-labelledby="editStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Added modal-lg for large modal -->
        <div class="modal-content">
            <div class="modal-header alert alert-success">
                <h5 class="modal-title" id="editStudentModalLabel"><i class="fas fa-edit"></i> Edit Student Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('student/update') ?>" method="post">
                <div class="modal-body">
                    <!-- Form Number -->
                    <div class="form-group">
                        <label><i class="fas fa-id-badge"></i> Form Number</label>
                        <input type="text" class="form-control" name="formNum" value="<?= esc($student['formNum']) ?>" readonly>
                    </div>

                    <!-- Name -->
                    <div class="form-group">
                        <label><i class="fas fa-user"></i> Name</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="firstName" value="<?= esc($student['firstName']) ?>" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="middleName" value="<?= esc($student['middleName']) ?>">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="lastName" value="<?= esc($student['lastName']) ?>" required>
                            </div>
                        </div>
                    </div>

                    <!-- Sex -->
                    <div class="form-group">
                        <label><i class="fas fa-venus-mars"></i> Sex</label>
                        <select class="form-control" name="sex">
                            <option value="Male" <?= ($student['sex'] == 'Male') ? 'selected' : '' ?>>Male</option>
                            <option value="Female" <?= ($student['sex'] == 'Female') ? 'selected' : '' ?>>Female</option>
                        </select>
                    </div>

                    <!-- Date of Birth -->
                    <div class="form-group">
                        <label><i class="fas fa-birthday-cake"></i> Date of Birth</label>
                        <input type="date" class="form-control" name="dob" value="<?= esc($student['dob']) ?>" required>
                    </div>

                    <!-- Place of Birth and City -->
                    <div class="form-group">
                        <label><i class="fas fa-map-marker-alt"></i> Place of Birth</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="placeOfBirth" value="<?= esc($student['placeOfBirth']) ?>" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="city" value="<?= esc($student['city']) ?>" required>
                            </div>
                        </div>
                    </div>

                    <!-- Nationality and Country of Origin -->
                    <div class="form-group">
                        <label><i class="fas fa-flag"></i> Nationality</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nationality" value="<?= esc($student['nationality']) ?>" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="countryOfOrigin" value="<?= esc($student['countryOfOrigin']) ?>" required>
                            </div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="form-group">
                        <label><i class="fas fa-home"></i> Address</label>
                        <input type="text" class="form-control" name="address" value="<?= esc($student['address']) ?>" required>
                    </div>

                    <!-- Phone and Email -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label><i class="fas fa-phone"></i> Phone</label>
                                <input type="tel" class="form-control" name="phone" value="<?= esc($student['phone']) ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label><i class="fas fa-envelope"></i> Email</label>
                                <input type="email" class="form-control" name="email" value="<?= esc($student['email']) ?>" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer bg-light">
                    
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


