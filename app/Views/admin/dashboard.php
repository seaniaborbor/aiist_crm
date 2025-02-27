
<?=$this->extend('admin/common/layout')?>

<?=$this->section('content')?>


 <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><span class="border-bottom-info">Administrator</span> Dashboard</h1>
    </div>

    <div class="row">
    <?php include 'graphs/dashboard_cards.php'; ?>
    </div>


    
<div class="row">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header  py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-info">Enrollment Log</h6>
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

    <div class="col-md-4">
        <?php include("tables/LoginLog.php")?>
    </div>
</div>



<!-- load query forms -- > 
<?php include("forms/query_by_courses_form.php"); ?>
<?php include("forms/query_by_program_form.php"); ?>
<?php include("forms/query_by_status_form.php"); ?>

<?=$this->endSection()?>