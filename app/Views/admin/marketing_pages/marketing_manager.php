
<?=$this->extend('admin/common/layout')?>

<?=$this->section('content')?>


 <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800"><span class="badge badge-danger">Admin</span>/Front Desk Logs </h3>
    </div>
  
<div class="row">
   <div class="col-md-12">
        <div class="card border-0  mb-4">
            <div class="card-header " style="border-bottom: none;">
                <nav class="">
                    <div class="nav border-0 nav-tabs d-flex justify-content-end" id="nav-tab" role="tablist">
                    <button class=" btn  btn-primary m-2 btn-icon-split nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                            <span class="icon text-white-50">
                                <i class="fas fa-eye"></i>
                            </span>
                            <span class="text">Form Sales Log</span>
                        </button>

                        <button class=" btn  btn-success m-2 btn-icon-split nav-link " id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                            <span class="icon text-white-50">
                            <i class="fas fa-question-circle"></i> 
                            </span>
                            <span class="text">Inquiry Log</span>
                        </button>
                    </div>
                </nav>
            </div>
            <div class="card-body p-0">

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card border-bottom-primary">
                            <div class="card-header border-bottom-primary alert alert-primary py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Form Sale Log </h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-primary"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                        <div class="dropdown-header text-primary">Query Daata</div>
                                        <a class="dropdown-item"  data-toggle="modal" data-target="#formSale" href="#">Filter Form Sale</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#LeadForm" href="#">Online Inquiry</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php include 'form_sale_log.php'; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="card border-bottom-success">
                            <div class="card-header border-bottom-success alert alert-success py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-success">Online Inquiry / Lead Log</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-success"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                        <div class="dropdown-header text-success">Query Daata</div>
                                        <a class="dropdown-item"  data-toggle="modal" data-target="#formSale" href="#">Filter Form Sale</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#LeadForm" href="#">Online Inquiry</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php include 'online_inquiry_log.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("filter_form_sale_log.php"); ?>
<?php include("filter_online_inquery_log.php"); ?>

<?=$this->endSection()?>