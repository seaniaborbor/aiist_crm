<?=$this->extend('enrollment/common/layout')?>

<?=$this->section('content')?>
        
<div class="container-fluid border-0 my-3">
        <!-- Progress Bar -->
        <div class="progress mb-4">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" 
         role="progressbar" 
         style="width: 25%;" 
         aria-valuenow="25" 
         aria-valuemin="0" 
         aria-valuemax="100">
    </div>
</div>


        <form action="/enrollment/enroll" method="post" enctype="multipart/form-dadata">
            <!-- Step 1: Personal Information -->
            <div class="step border-0 active" id="step1">
                <div class="card">
                    <div class="card-header">
                        <h4>Applicant/Profile Information</h4>
                    </div>
                    <div class="card-body">
                        <?php include("forms/enrollment_stage_1.php"); ?>
                    </div>
                </div>
            </div>

            <!-- Step 2: Program Selection -->
            <div class="step border-0" id="step2">
                <div class="card">
                    <div class="card-header">
                        <h4>Program Selection</h4>
                    </div>
                    <div class="card-body">
                        <?php include("forms/enrollment_stage_2.php"); ?>
                    </div>
                </div>
            </div>

            <!-- Step 3: Preferences -->
            <div class="step border-0" id="step3">
            <div class="card">
                <div class="card-header">
                    <h4>Preferences</h4>
                </div>
                <div class="card-body">
                    <?php include("forms/enrollment_stage_3.php"); ?>
                </div>
            </div>
            </div>
        </form>

    </div>

    <!-- Custom JS -->
    <script>
        let currentStep = 1;

        function nextStep(step) {
            document.getElementById(`step${currentStep}`).classList.remove('active');
            document.getElementById(`step${step}`).classList.add('active');
            currentStep = step;
            updateProgressBar();
        }

        function prevStep(step) {
            document.getElementById(`step${currentStep}`).classList.remove('active');
            document.getElementById(`step${step}`).classList.add('active');
            currentStep = step;
            updateProgressBar();
        }

        function updateProgressBar() {
            const progress = (currentStep / 3) * 100;
            document.querySelector('.progress-bar').style.width = `${progress}%`;
        }

        

        document.addEventListener('DOMContentLoaded', function() {
            const firstDropdown = document.getElementById('firstDropdown');
            const secondDropdown = document.getElementById('secondDropdown');
            const thirdDropdown = document.getElementById('thirdDropdown');

            const programs = {
                "Certificate & Diploma Programs": {
                    "Diploma Programs": [
                        "Diploma in Office Productivity",
                        "Diploma in Business Management System",
                        "Diploma in Information Management System",
                        "Diploma in Entrepreneurship",
                        "Diploma in Computerize Accounting",
                        "Diploma in Hotel Management",
                        "Diploma in Electricity Installation & Maintenance",
                        "Diploma in Customer Relations Management",
                        "Diploma in Standard English"
                    ],
                    "Certificate Programs": [
                        "Certificate in Computer Literacy 182",
                        "Certificate in Office Applications",
                        "B&C Certificate in Teachers Education",
                        "Certificate in Accelerated English Language art.",
                        "Certificate in cosmetology",
                        "Certificate in Pastry",
                        "Certificate in Fashion Design",
                        "Certificate in Catering",
                        "Certificate in Microsoft Excel Masterclass",
                        "Certificate in Plumbing"
                    ],
                    "Cisco Networking Programs": [
                        "AlIST Certificate in Cisco Certified Technician",
                        "AlIST Professional Certificate in Cisco Network Associate",
                        "AlIST Professional Certificate in Cisco Network Professional"
                    ],
                    "Ethical Hacking Programs": [
                        "AlIST Foundation Certificate in Ethical Hacking",
                        "AlIST Associate Diploma in Certified Ethical Hacking",
                        "AlIST Professional Diploma in Certified Ethical Hacking",
                        "AlIST Expert Diploma in Certified Ethical Hacking"
                    ]
                },
                "Non Degree Programs": {
                    "Aiist Career Path": [
                        "AllST Professional Diploma in Information Technology",
                        "AllST Professional Diploma in Database Technology",
                        "AllST Professional Diploma in Software Engineering",
                        "AllST Professional Diploma in Graphic & Web Design",
                        "AllST Professional Diploma in Graphic & Print Media"
                    ],
                    "Vonora Cosmetology": [
                        "AllST VONORA Certificate in Hair Installation",
                        "AllST VONORA Certificate in Make-Up",
                        "AllST VONORA Certificate in Mink Lash",
                        "AllST VONORA Certificate in Braids",
                        "AllST VONORA Certificate in Pedicure & Manicure",
                        "AllST VONORA Certificate in Advance Acrylic Nails/Design",
                        "AllST VONORA Certificate in Pixie Hair/Dread Locs",
                        "AllST VONORA Certificate in Facials",
                        "AllST VONORA Certificate in Microblading",
                        "AllST VONORA Certificate in Waxing",
                        "AllST VONORA Certificate in Holistic Massage/Body Enhancement/Cellulite Therapy, Body Scrub"
                    ]
                },
                "Degree Programs": {
                    "Degree in Information Technology": [
                        "Associate of Science Degree in Computer Information System",
                        "Associate of Science Degree in Computer Programming",
                        "Associate of Science Degree in Cyber Security & Assurance",
                        "Associate of Science Degree in Computer Science",
                        "Associate of Science Degree in Database Administration",
                        "Associate of Science Degree in Cloud Computing",
                        "Associate of Science Degree in Computer Networking"
                    ],
                    "Degree in Environmental Science": [
                        "Associate of Science Degree in Environmental Science"
                    ],
                    "Degree in Electrical Engineering": [
                        "Associate of Science Degree in Electrical Technology",
                        "Associate of Science Degree in Electronics Technology"
                    ],
                    "Degree in Business Administration": [
                        "Associate of Science Degree in Business Administration",
                        "Associate of Science Degree in Business Management"
                    ],
                    "Degree in Social Works": [
                        "Associate of Arts Degree in Sociology",
                        "Associate of Arts Degree in Social Work"
                    ],
                    "Degree in Islamic Education": [
                        "Associate of Arts Degree in Islamic Education",
                        "Associate of Arts Degree in Arabic Language"
                    ]
                }
            };

            firstDropdown.addEventListener('change', function() {
                const selectedProgram = firstDropdown.value;
                secondDropdown.innerHTML = '<option value="">Select an option</option>';
                thirdDropdown.innerHTML = '<option value="">Select an option</option>';

                if (selectedProgram && programs[selectedProgram]) {
                    Object.keys(programs[selectedProgram]).forEach(program => {
                        const option = document.createElement('option');
                        option.value = program;
                        option.textContent = program;
                        secondDropdown.appendChild(option);
                    });
                }
            });

            secondDropdown.addEventListener('change', function() {
                const selectedProgram = firstDropdown.value;
                const selectedSubProgram = secondDropdown.value;
                thirdDropdown.innerHTML = '<option value="">Select an option</option>';

                if (selectedProgram && selectedSubProgram && programs[selectedProgram][selectedSubProgram]) {
                    programs[selectedProgram][selectedSubProgram].forEach(course => {
                        const option = document.createElement('option');
                        option.value = course;
                        option.textContent = course;
                        thirdDropdown.appendChild(option);
                    });
                }
            });
        });

       
        
</script>


<?php if (isset($enrollment_application_error) && !empty($enrollment_application_error)) : ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $('#errorModal').modal('show');
        });
    </script>

    <!-- Bootstrap 4 Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="errorModalLabel"><i class="fas fa-exclamation-triangle"></i> Enrollment Application Error</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Please fix the following errors:</p>
                <ul class="list-group">
                    <?php foreach ($enrollment_application_error->getErrors() as $error) : ?>
                        <li class="list-group-item list-group-item-danger"><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>




<?=$this->endSection()?>