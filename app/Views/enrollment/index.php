
<?=$this->extend('enrollment/common/layout')?>

<?=$this->section('content')?>




<div class="row">
    <div class="col-md-12">
        <div class="card border-bottom-primary">
            <div class="card-header   py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Enrollment</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-primary"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                        <div class="dropdown-header text-sucess">Query Daata</div>
                        <a class="dropdown-item"  data-toggle="modal" data-target="#myModal" href="#">Filter By Status</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#queryByCoursesForm" href="#">Filter By Courses </a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#queryByProgram" href="#">Filter By Program</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php include("tables/enrollment_log.php"); ?>
            </div>
        </div>
    </div>
</div>


<!-- load query forms -- > 
<?php include("forms/query_by_courses_form.php"); ?>
<?php include("forms/query_by_program_form.php"); ?>
<?php include("forms/query_by_status_form.php"); ?>



<?=$this->endSection()?>