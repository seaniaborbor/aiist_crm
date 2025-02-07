<?=$this->extend('marketing/common/layout')?>

<?=$this->section('content')?>
<div class="row">
    
<div class="col-md-8 offset-md-2">

<!-- Dropdown Card Example -->
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div
        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Lead Form (Log Online Inquiry)</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">More Actions</div>
                <a class="dropdown-item" href="#">Get Help</a>
                <a class="dropdown-item" href="#">Go to dashboard</a>
            </div>
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
       <?php include 'forms/log_online_inquiry_form.php'; ?>
    </div>
</div>
</div>

</div>

<?=$this->endSection()?>