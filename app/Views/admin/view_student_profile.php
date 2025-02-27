<?=$this->extend('admin/common/layout')?>

<?=$this->section('content')?>

<div class="row mb-3">
    <div class="col-md-5">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-body">
            <img src="<?= $pic_is_present ? '/dashboard_assets/img/'.$profile_pic : $profile_pic; ?>" class="img-fluid w-100 rounded">
            </div>
        </div>
    </div>

    <div class="col-md-7">
        
<div class="accordion" id="studentAccordion">

<!-- Personal Information -->
<div class="card border-bottom-warning">
    <div class="card-header  mb-1" id="headingOne">
        <h5 class="mb-0">
            <button  class="btn  collapsed btn-warning btn-icon-split" type="button" data-toggle="collapse" data-target="#collapseOne1">
                <span class="icon text-white-50">
                    <i class="fas fa-user"></i>
                </span>
                <span class="text text-white">Student's Basic Info</span>
            </button>
        </h5>
    </div>
    <div id="collapseOne1" class="collapse show" data-parent="#studentAccordion">

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
        </div>
    </div>
</div>

<!-- Family & Contact Information -->
<div class="card border-bottom-primary">
    <div class="card-header  mb-1" id="headingTwo">
        <h5 class="mb-0">
            <button  class="btn  collapsed btn-primary btn-icon-split" type="button" data-toggle="collapse" data-target="#collapseTwo2">
                <span class="icon text-white-50">
                    <i class="fas fa-users"></i>
                </span>
                <span class="text text-white">School/Family Info</span>
            </button>
        </h5>
    </div>
    <div id="collapseTwo2" class="collapse" data-parent="#studentAccordion">
        <div class="card-body">
            <p><i class="fas fa-school"></i> <strong>High School:</strong> <?= esc($student['highSchool']) ?> (Graduated: <?= esc($student['yearGraduated']) ?>)</p>
            <p><i class="fas fa-phone"></i> <strong>High School Contact:</strong> <?= esc($student['highSchoolContact']) ?></p>
            <p><i class="fas fa-male"></i> <strong>Father's Name:</strong> <?= esc($student['fatherName']) ?> (📞 <?= esc($student['fatherPhone']) ?>)</p>
            <p><i class="fas fa-map-marker-alt"></i> <strong>Father's Address:</strong> <?= esc($student['fatherAddress']) ?></p>
            <p><i class="fas fa-female"></i> <strong>Mother's Name:</strong> <?= esc($student['motherName']) ?> (📞 <?= esc($student['motherPhone']) ?>)</p>
            <p><i class="fas fa-map-marker-alt"></i> <strong>Mother's Address:</strong> <?= esc($student['motherAddress']) ?></p>
            <p><i class="fas fa-user-friends"></i> <strong>Sponsor Name:</strong> <?= esc($student['sponsorName']) ?> (📞 <?= esc($student['sponsorPhone']) ?>)</p>
            <p><i class="fas fa-question-circle"></i> <strong>School Records Access:</strong> <?= esc($student['schoolRecords']) ?> (<?= esc($student['whichOne']) ?>)</p>
        </div>
    </div>
</div>

<!-- Enrollment Details -->
<div class="card border-bottom-success">
    <div class="card-header  " id="headingThree">
        <h5 class="mb-0">
            <button  class="btn  collapsed btn-info btn-icon-split" data-toggle="collapse" data-target="#collapseThree">
                <span class="icon text-white-50">
                    <i class="fas fa-book"></i>
                </span>
                <span class="text text-white">Courses/Preferences</span>
            </button>
        </h5>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#studentAccordion">
        <div class="card-body">
            <p><i class="fas text-success fa-book"></i> <strong>Program Type:</strong> <?= esc($student['programType']) ?></p>
            <p><i class="fas text-success fa-chalkboard-teacher"></i> <strong>Program:</strong> <?= esc($student['program']) ?></p>
            <p><i class="fas text-success fa-book-reader"></i> <strong>Course:</strong> <?= esc($student['course']) ?></p>
            <p><i class="fas text-success fa-clock"></i> <strong>Preferred Class Time:</strong> <?= esc($student['preferredClassTime']) ?> (<?= esc($student['timeSlot']) ?>)</p>
            <p><i class="fas text-success fa-tshirt"></i> <strong>T-Shirt Size:</strong> <?= esc($student['shirtSize']) ?></p>
            <p><i class="fas text-success fa-info-circle"></i> <strong>Source:</strong> <?= esc($student['source']) ?></p>
           
        </div>
    </div>
</div>

</div>
    </div>
</div>



<?=$this->endSection()?>
