<?=$this->extend('marketing/common/layout')?>

<?=$this->section('content')?>
<div class="row">
    
<div class="col-md-8 offset-md-2">

<!-- Dropdown Card Example -->
<div class="card  border-bottom-success shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header alert alert-success py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold ">Lead Form (Log Online Inquiry)</h4>
    </div>
    <!-- Card Body -->
    <div class="card-body">
       <?php include 'forms/log_online_inquiry_form.php'; ?>
    </div>
</div>
</div>

</div>

<?=$this->endSection()?>