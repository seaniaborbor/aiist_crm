<div class="row">
    <div class="col-md-8">
        <!-- First Dropdown: Program Type -->
        <div class="mb-3">
            <label for="firstDropdown" class="form-label">Select Program Type</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                <select class="form-select form-control" name="programType" id="firstDropdown">
                    <option value="">Select an option</option>
                    <option value="Certificate & Diploma Programs">Certificate & Diploma Programs</option>
                    <option value="Non Degree Programs">Non Degree Programs</option>
                    <option value="Degree Programs">Degree Programs</option>
                </select>
            </div>
        </div>

        <!-- Second Dropdown: Program -->
        <div class="mb-3">
            <label for="secondDropdown" class="form-label">Select Program</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-book"></i></span>
                <select class="form-select form-control" id="secondDropdown" name="program">
                    <option value="">Select an option</option>
                </select>
            </div>
        </div>

        <!-- Third Dropdown: Course -->
        <div class="mb-3">
            <label for="thirdDropdown" class="form-label">Select Course</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
                <select class="form-select form-control" id="thirdDropdown" name="course">
                    <option value="">Select an option</option>
                </select>
            </div>
        </div>

        <!-- Previous Button -->
        <button onclick="nextStep(1)" type="button" class="btn p-0 btn-info btn-icon-split" data-dismiss="modal">
            <span class="icon text-white-50">
                <i class="fas fa-backward"></i>
            </span>
            <span class="text">Previous</span>
        </button>

        <!-- Next Button -->
        <button onclick="nextStep(3)" type="button" class="btn p-0 btn-primary btn-icon-split" data-dismiss="modal">
            <span class="icon text-white-50">
                <i class="fas fa-forward"></i>
            </span>
            <span class="text">Next</span>
        </button>
    </div>

    <div class="col-md-4">
        <div class="card border-0" style="width: 100%; border:none;">
        <img src="https://i.pinimg.com/736x/a1/1b/f8/a11bf82fc59273f632fbc29870d8afbd.jpg" 
     class="card-img-top" alt="Education Concept">

        </div>

    </div>
</div>