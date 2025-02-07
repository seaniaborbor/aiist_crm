
<?=$this->extend('marketing/common/layout')?>

<?=$this->section('content')?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Lead & Form Sale User Dashboard </h1>
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
        <div class="card shadow-lg mb-4">
            <div class="card-header bg-white" style="border-bottom: none;">
                <nav class="">
                    <div class="nav nav-tabs " id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                            <i class="fas fa-file-alt"></i> Form Log
                        </button>
                        <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                            <i class="fas fa-question-circle"></i> Inquiry Log
                        </button>
                    </div>
                </nav>
            </div>
            <div class="card-body">

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <?php include 'tables/form_sale_log.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <?php include 'tables/online_inquiry_log.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?=$this->endSection()?>