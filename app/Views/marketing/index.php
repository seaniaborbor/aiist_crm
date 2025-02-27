
<?=$this->extend('marketing/common/layout')?>

<?=$this->section('content')?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> <span class="border-bottom-danger">Front Desk User's</span> Dashboard </h1>
</div>
<div class="row">
    <!-- Total Online Inquiry -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Online Inquiry</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= count($user_inquiry_log) ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-question-circle fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Form Sale -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Form Sale</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($user_form_sale_log) ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Log -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Total Log</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?= count($user_form_sale_log)+count($user_inquiry_log) ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="row">
   <div class="col-md-12">
        <div class="card bg-light border-0 mb-4">
            <div class="card-header" style="border-bottom: none;">
                <nav class="">
                    <div class="nav d-flex justify-content-end nav-tabs border-0" id="nav-tab" role="tablist">
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
            <div class="card-body px-0">

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card shadow-lg border-bottom-primary">
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
                                <?php include 'tables/form_sale_log.php'; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card border-bottom-success shadow-lg">
                                <div class="card-header alert alert-success border-bottom-success py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-success">Online/Lead Log</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-info"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                                            <div class="dropdown-header text-success">Query Data:</div>
                                            <a class="dropdown-item"  data-toggle="modal" data-target="#formSale" href="#">Filter Form Sale</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#LeadForm" href="#">Online Inquiry</a>
                                        </div>
                                    </div>
                                </div>
                            <div class="card-body">
                                <?php include 'tables/online_inquiry_log.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include("forms/filter_form_sale_log.php"); ?>
    <?php include("forms/filter_online_inquery_log.php"); ?>



<?=$this->endSection()?>