<?=$this->extend('enrollment/common/layout')?>

<?=$this->section('content')?>

<div class="row mb-3">
    <div class="col-md-5">
        <div class="card  shadow-lg border">
            <div class="card-body">
            <img src="<?= $pic_is_present ? '/dashboard_assets/img/'.$profile_pic : $profile_pic; ?>" class="img-fluid w-100 rounded">
                 
                <button  type="button" class="btn mt-3 p-0 btn-info btn-icon-split" data-toggle="modal" data-target="#profileModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-user"></i>
                    </span>
                    <span class="text">Edit Pic </span>
                </button>
                <button  type="button" class="btn mt-3 p-0 btn-primary btn-icon-split" data-toggle="modal" data-target="#animatedModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Change Status </span>
                </button>
                <button  type="button" class="btn mt-3 p-0 btn-danger btn-icon-split" >
                    <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Delete </span>
                </button>
                
            </div>
        </div>
    </div>

    <div class="col-md-7">
        
<div class="accordion" id="studentAccordion">

<!-- Personal Information -->
<div class="card">
    <div class="card-header  mb-1" id="headingOne">
        <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne">
                <i class="fas fa-user"></i> Personal Information
            </button>
        </h5>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#studentAccordion">

        <div class="card-body">
        <p><i class="fas fa-id-badge"></i> <strong>Form Number:</strong> <?= esc($student['formNum']) ?></p>
        <p><i class="fas fa-user"></i> <strong>Name:</strong> <?= esc($student['firstName']) ?> <?= esc($student['middleName']) ?> <?= esc($student['lastName']) ?></p>
        <p>
    <?php
    // Map status to appropriate icon
    $statusIcon = [
        'dropped'    => 'fas fa-times-circle',       // Dropped status
        'freshman'   => 'fas fa-user-graduate',      // Freshman status
        'sophomore'  => 'fas fa-user-graduate',      // Sophomore status
        'junior'     => 'fas fa-user-graduate',      // Junior status
        'senior'     => 'fas fa-user-graduate',      // Senior status
        'graduated'  => 'fas fa-graduation-cap',     // Graduated status
    ];

    // Get the student's status
    $status = esc($student['stud_enroll_status']);

    // Set a default icon if status is not found
    $icon = $statusIcon[$status] ?? 'fas fa-question-circle'; // Default icon for unknown status
    ?>
    <i class="<?= $icon ?>"></i> <strong>Status:</strong> <?= ucfirst($status) ?>
</p>
            <p><i class="fas fa-venus-mars"></i> <strong>Sex:</strong> <?= esc($student['sex']) ?></p>
            <p><i class="fas fa-birthday-cake"></i> <strong>Date of Birth:</strong> <?= esc($student['dob']) ?></p>
            <p><i class="fas fa-map-marker-alt"></i> <strong>Place of Birth:</strong> <?= esc($student['placeOfBirth']) ?>, <?= esc($student['city']) ?></p>
            <p><i class="fas fa-flag"></i> <strong>Nationality:</strong> <?= esc($student['nationality']) ?> (<?= esc($student['countryOfOrigin']) ?>)</p>
            <p><i class="fas fa-home"></i> <strong>Address:</strong> <?= esc($student['address']) ?></p>
            <p><i class="fas fa-phone"></i> <strong>Phone:</strong> <?= esc($student['phone']) ?></p>
            <p><i class="fas fa-envelope"></i> <strong>Email:</strong> <?= esc($student['email']) ?></p>
            
            
            <button  type="button" class="btn mt-3 p-0 btn-lg  btn-info btn-icon-split" data-toggle="modal" data-target="#editStudentModal" >
                    <span class="icon text-white-50">
                        <i class="fas fa-pen"></i>
                    </span>
                    <span class="text">Edit Personal Information </span>
            </button>
        </div>
    </div>
</div>

<!-- Family & Contact Information -->
<div class="card">
    <div class="card-header  mb-1" id="headingTwo">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo">
                <i class="fas fa-users"></i> Family & Contact Information
            </button>
        </h5>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#studentAccordion">
        <div class="card-body">
            <p><i class="fas fa-school"></i> <strong>High School:</strong> <?= esc($student['highSchool']) ?> (Graduated: <?= esc($student['yearGraduated']) ?>)</p>
            <p><i class="fas fa-phone"></i> <strong>High School Contact:</strong> <?= esc($student['highSchoolContact']) ?></p>
            <p><i class="fas fa-male"></i> <strong>Father's Name:</strong> <?= esc($student['fatherName']) ?> (📞 <?= esc($student['fatherPhone']) ?>)</p>
            <p><i class="fas fa-map-marker-alt"></i> <strong>Father's Address:</strong> <?= esc($student['fatherAddress']) ?></p>
            <p><i class="fas fa-female"></i> <strong>Mother's Name:</strong> <?= esc($student['motherName']) ?> (📞 <?= esc($student['motherPhone']) ?>)</p>
            <p><i class="fas fa-map-marker-alt"></i> <strong>Mother's Address:</strong> <?= esc($student['motherAddress']) ?></p>
            <p><i class="fas fa-user-friends"></i> <strong>Sponsor Name:</strong> <?= esc($student['sponsorName']) ?> (📞 <?= esc($student['sponsorPhone']) ?>)</p>
            <p><i class="fas fa-question-circle"></i> <strong>School Records Access:</strong> <?= esc($student['schoolRecords']) ?> (<?= esc($student['whichOne']) ?>)</p>
            

            <button  type="button" class="btn mt-3 p-0 btn-lg btn-info btn-icon-split" data-toggle="modal" data-target="#editFamilyModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-pen"></i>
                    </span>
                    <span class="text">Edit Family & Contact Info  </span>
            </button>

        </div>
    </div>
</div>

<!-- Enrollment Details -->
<div class="card">
    <div class="card-header " id="headingThree">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree">
                <i class="fas fa-graduation-cap"></i> Enrollment Details
            </button>
        </h5>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#studentAccordion">
        <div class="card-body">
            <p><i class="fas fa-book"></i> <strong>Program Type:</strong> <?= esc($student['programType']) ?></p>
            <p><i class="fas fa-chalkboard-teacher"></i> <strong>Program:</strong> <?= esc($student['program']) ?></p>
            <p><i class="fas fa-book-reader"></i> <strong>Course:</strong> <?= esc($student['course']) ?></p>
            <p><i class="fas fa-clock"></i> <strong>Preferred Class Time:</strong> <?= esc($student['preferredClassTime']) ?> (<?= esc($student['timeSlot']) ?>)</p>
            <p><i class="fas fa-tshirt"></i> <strong>T-Shirt Size:</strong> <?= esc($student['shirtSize']) ?></p>
            <p><i class="fas fa-info-circle"></i> <strong>Source:</strong> <?= esc($student['source']) ?></p>
            <!-- Button to Open Modal -->

            <button  type="button" class="btn mt-3 p-0 btn-lg btn-info btn-icon-split" data-toggle="modal" data-target="#combinedModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-pen"></i>
                    </span>
                    <span class="text">Edit Preferences </span>
            </button>

        </div>
    </div>
</div>

</div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="animatedModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header alert alert-success">
                <h5 class="modal-title" id="modalTitle">Change The Enrollment Status </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/enrollment/change_enroll_ment_status/<?=$student_id?>">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="statuses"><i class="fas fa-user-graduate"></i> Choose the status of the student</label>
                        <select name="stud_enroll_status" id="stud_enroll_status" class="form-control">
                            <option value="">Choose</option>
                            <option value="dropped">Dropped</option>
                            <option value="freshman">Freshman</option>
                            <option value="sophomore">Sophomore</option>
                            <option value="junior">Junior</option>
                            <option value="senior">Senior</option>
                            <option value="graduated">Graduated</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  type="submit" class="btn mt-3 p-0 btn-success btn-icon-split" >
                        <span class="icon text-white-50">
                            <i class="fas fa-file"></i>
                        </span>
                        <span class="text">Save</span>
                    </button>
                    <button  type="button" class="btn mt-3 p-0 btn-danger btn-icon-split" data-dismiss="modal">
                        <span class="icon text-white-50">
                            <i class="fas fa-times"></i>
                        </span>
                        <span class="text">Cancel</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- include the partial form that allows user to edit student profile --> 
 <?php include("forms/edit_stud_preferences.php"); ?>
 <!-- include the partial form that allows user to edit student school and family background -->
 <?php include("forms/edit_stud_highsch_family_detail.php"); ?>
 <!-- include basic info of student -->
 <?php include("forms/edit_student_basic_info.php"); ?>
 <!-- update or upload student profile picture --> 
 <?php include("forms/upload_or_edit_stud_profile_pic.php"); ?>

<?=$this->endSection()?>
