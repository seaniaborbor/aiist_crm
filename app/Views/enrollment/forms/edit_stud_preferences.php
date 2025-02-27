<!-- Combined Modal -->
<div class="modal fade" id="combinedModal" tabindex="-1" aria-labelledby="combinedModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Large modal -->
        <div class="modal-content">
            <div class="modal-header alert alert-success">
                <h5 class="modal-title" id="combinedModalLabel"><i class="fas fa-edit"></i> Edit Program & Preferences</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Left Column (Form Inputs) -->
                        <div class="col-md-12">
                            <!-- Program Selection -->
                            <div class="mb-3">
                                <label for="firstDropdown" class="form-label">Select Program Type</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                    <select class="form-control" name="programType" id="firstDropdown">
                                        <option value="">Select an option</option>
                                        <option value="Certificate & Diploma Programs">Certificate & Diploma Programs</option>
                                        <option value="Non Degree Programs">Non Degree Programs</option>
                                        <option value="Degree Programs">Degree Programs</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="secondDropdown" class="form-label">Select Program</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-book"></i></span>
                                    <select class="form-control" id="secondDropdown" name="program">
                                        <option value="">Select an option</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="thirdDropdown" class="form-label">Select Course</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
                                    <select class="form-control" id="thirdDropdown" name="course">
                                        <option value="">Select an option</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Preferred Class Time -->
                            <div class="mb-3">
                                <label class="form-label">Your Preferred Class Time</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="monWedFri" name="preferredClassTime" value="Mon, Wed, Fri">
                                        <label class="form-check-label" for="monWedFri">Mon, Wed, Fri</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tueThurSat" name="preferredClassTime" value="Tue, Thur, Sat">
                                        <label class="form-check-label" for="tueThurSat">Tue, Thur, Sat</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Time Slots -->
                            <div class="mb-3">
                                <label class="form-label">Time Slots</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="8am" name="timeSlot" value="8AM-10AM">
                                        <label class="form-check-label" for="8am">8AM-10AM</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="10am" name="timeSlot" value="10AM-12PM">
                                        <label class="form-check-label" for="10am">10AM-12PM</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="12pm" name="timeSlot" value="12PM-2PM">
                                        <label class="form-check-label" for="12pm">12PM-2PM</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="2pm" name="timeSlot" value="2PM-4PM">
                                        <label class="form-check-label" for="2pm">2PM-4PM</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="4pm" name="timeSlot" value="4PM-6PM">
                                        <label class="form-check-label" for="4pm">4PM-6PM</label>
                                    </div>
                                </div>
                            </div>

                            <!-- T-Shirt Size -->
                            <div class="mb-3">
                                <label class="form-label">Your T-Shirt Size</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-tshirt"></i></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="medium" name="shirtSize" value="M">
                                        <label class="form-check-label" for="medium">Medium (M)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="large" name="shirtSize" value="L">
                                        <label class="form-check-label" for="large">Large (L)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="xl" name="shirtSize" value="XL">
                                        <label class="form-check-label" for="xl">Extra Large (XL)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="xxl" name="shirtSize" value="XXL">
                                        <label class="form-check-label" for="xxl">Extra, Extra Large (XXL)</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Source of Information -->
                            <div class="mb-3">
                                <label class="form-label">How did you know about us?</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-info-circle"></i></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="radio" name="source" value="Radio">
                                        <label class="form-check-label" for="radio">Radio</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="internet" name="source" value="Internet">
                                        <label class="form-check-label" for="internet">Internet</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="friends" name="source" value="Friends">
                                        <label class="form-check-label" for="friends">Friends</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="stickers" name="source" value="Stickers">
                                        <label class="form-check-label" for="stickers">Stickers</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="others" name="source" value="Others">
                                        <label class="form-check-label" for="others">Others</label>
                                    </div>
                                </div>
                            </div>
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
        </div>
    </div>
</div>

  <!-- Custom JS -->
  <script>
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