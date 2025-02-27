
<?=$this->extend('admin/common/layout')?>

<?=$this->section('content')?>


 <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><span class="badge badge-danger">Admin/</span> Enrollment Log</h1>
    </div>


    <div class="row">
    <?php 
    // Define category icons
    $icons = [
        'freshman' => '<i class="fas fa-user-graduate text-primary fa-2x"></i>',
        'sophomore' => '<i class="fas fa-user text-secondary fa-2x"></i>',
        'junior' => '<i class="fas fa-user-tie text-warning fa-2x"></i>',
        'senior' => '<i class="fas fa-user-check text-info fa-2x"></i>',
        'graduated' => '<i class="fas fa-award text-success fa-2x"></i>',
    ];

    if (!empty($enrollment_status_counts)) :
        foreach ($enrollment_status_counts as $status) :
            if (!empty($status['count'])) :
                $category = strtolower($status['stud_enroll_status']);
    ?>
                <div class="col-md-2 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <?= ucfirst($category); ?> 
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?= $status['count']; ?> 
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <?= $icons[$category] ?? '<i class="fas fa-question-circle text-muted fa-2x"></i>'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php 
            endif;
        endforeach;
    endif;
    ?>
</div>


 
<div class="row">
    <div class="col-md-12">
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
</div>


<!-- load query forms -- > 
<?php include("forms/query_by_courses_form.php"); ?>
<?php include("forms/query_by_program_form.php"); ?>
<?php include("forms/query_by_status_form.php"); ?>

<?=$this->endSection()?>