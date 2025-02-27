    <!-- Modal -->
    <div class="modal fade" id="queryByCoursesForm" tabindex="-1" aria-labelledby="queryByCoursesFormLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header alert alert-success">
                    <h5 class="modal-title" id="queryByCoursesFormLabel">Query or filter data by courses</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <form>
                        <!-- Start Date Field -->
                        <div class="form-group">
                            <label for="start_date"><i class="fas fa-calendar-alt"></i> Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date">
                        </div>
                        <!-- End Date Field -->
                        <div class="form-group">
                            <label for="end_date"><i class="fas fa-calendar-alt"></i> End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                        <!-- Select Field -->
                        <div class="form-group">
                            <label for="course"><i class="fas fa-graduation-cap"></i> Select Course</label>
                            <select class="form-control" id="course" name="course">
                                <option value="">-- Select a Course --</option>
                                <!-- Options will be dynamically populated here -->
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


    <script>
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

        // Function to populate the dropdown
        function populateDropdown() {
            const select = document.getElementById("course");

            // Loop through the programs object
            for (const category in programs) {
                // Create an optgroup for each category
                const optgroup = document.createElement("optgroup");
                optgroup.label = category;

                // Loop through subcategories
                for (const subcategory in programs[category]) {
                    // Add a disabled option to show the subcategory as a label
                    const subcategoryOption = document.createElement("option");
                    subcategoryOption.textContent = subcategory;
                    subcategoryOption.disabled = true;
                    optgroup.appendChild(subcategoryOption);

                    // Add each program under the subcategory
                    programs[category][subcategory].forEach(program => {
                        const option = document.createElement("option");
                        option.textContent = program;
                        optgroup.appendChild(option);
                    });
                }

                // Append the optgroup to the select element
                select.appendChild(optgroup);
            }
        }

        // Call the function to populate the dropdown when the page loads
        document.addEventListener("DOMContentLoaded", populateDropdown);
    </script>