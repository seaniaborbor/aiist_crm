<?php
function getStatusWithColor($status) {
    $colors = [
        'Not Contacted' => 'red',
        'Contacted' => 'blue',
        'Inquirey Closed' => 'green'
    ];

    // Assign color based on the status
    $color = $colors[$status] ?? 'black'; // Default to black if status is not in the array

    // Return the status with the color applied
    return "<span style='color: {$color};'>" . esc($status) . "</span>";
}
?>


 
<div class="table-responsive">
<?php if (isset($enrollment_log) && !empty($enrollment_log)) : ?>
    <table class="table table-sm" id="table2">
        <thead>
            <tr>
                <th>Form #</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Sex</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Profile</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enrollment_log as $log) : ?>
                <tr>
                    <td><?= esc($log['formNum']) ?></td>
                    <td><?= esc($log['firstName']) ?></td>
                    <td><?= esc($log['lastName']) ?></td>
                    <td><?= esc($log['sex']) ?></td>
                    <td><?= esc($log['address']) ?></td>
                    <td><?= esc($log['phone']) ?></td>
                    <td><?= esc($log['course']) ?></td>
                    <td>

                        <a href="/enrollment/stud_profile/<?=$log['studId']?>" class="btn p-0 btn-sm btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-user"></i>
                                </span>
                                <span class="text">Detail</span>
                            </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>No enrollment records available.</p>
<?php endif; ?>

    </div>
    








<!-- Modal to query by status  -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="#">
        <div class="modal-content">
            <div class="modal-header alert alert-success">
                <h5 class="modal-title " id="myModalLabel">Filter By Student Status</h5>
                <button type="button" class="close btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <label for="start_date">From </label>
                        <input type="date" name="start_date" id="start_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="end_date">To</label>
                        <input type="date" name="end_date" id="end_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="end_date">Select...</label>
                        <select name="all" id="" class="form-control">
                            <option value="all">All</option>
                            <option value="all">Students Enrolled In Diploma Courses</option>
                            <option value="all">Students Enrolled In Degree Courses</option>
                            <option value="all">Students Enrolled In Certificate Courses</option>
                        </select>
                    </div>
                
            </div>
            <div class="modal-footer">
               
                <button  type="submit" class="btn p-0 btn-sm btn-info btn-icon-split" data-dismiss="modal">
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









