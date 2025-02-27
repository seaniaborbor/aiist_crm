<?=$this->extend('marketing/common/layout')?>

<?=$this->section('content')?>
<div class="row">
    
<div class="col-md-6 ">

<div class="card shadow-sm border-bottom-info mb-4">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">A Form Sale Details</h6>
    </div>
    <div class="card-body">

    <div class="list-group list-group-flush">
    <div class="list-group-item d-flex align-items-center">
        <i class="fas fa-user text-primary mr-3"></i>
        <span>Full Name: <strong><?= esc($formSale['prospectiveFullName']); ?></strong></span>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <i class="fas fa-phone-alt text-success mr-3"></i>
        <span>Prospective Main Contact: <strong><?= esc($formSale['prospectiveContact1']); ?></strong></span>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <i class="fas fa-phone text-warning mr-3"></i>
        <span>Prospective Secondary Contact: <strong><?= esc($formSale['prospectiveContact2']); ?></strong></span>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <i class="fab fa-whatsapp text-success mr-3"></i>
        <span>Prospective WhatsApp Number: <strong><?= esc($formSale['prospectiveWhatAppContact']); ?></strong></span>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <i class="fas fa-file-alt text-info mr-3"></i>
        <span>Form Number: <strong><?= esc($formSale['prospectiveFormNo']); ?></strong></span>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <i class="fas fa-receipt text-danger mr-3"></i>
        <span>Invoice Number: <strong><?= esc($formSale['prospectiveInvoiceNum']); ?></strong></span>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <i class="fas fa-map-marker-alt text-danger mr-3"></i>
        <span>Prospective Address: <strong><?= esc($formSale['prospectiveAddress']); ?></strong></span>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <i class="fas fa-user-shield text-info mr-3"></i>
        <span>Prospective Created Logged By: <strong>
        <?= esc(session()->get('userName')); ?>
        </strong></span>
    </div>
</div>

    </div>
    <div class="card-footer">
         <!-- edit button -->
         <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal">
            <span class="icon text-white-50">
                <i class="fas fa-edit"></i>
            </span>
            <span class="text">Edit</span>
        </a>
        <!-- delete button -->
        <a href="/marketing/log_form_sale/delete/<?=$formSale['formSaleId']?>" class="btn btn-sm btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-trash"></i>
            </span>
            <span class="text">Delete</span>
        </a>
        <!-- dropdown btn with icon that changes the status -->
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cog"></i>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/marketing/log_form_sale/change_status/<?= $formSale['formSaleId'] ?>/Pending">Pending</a>
                <a class="dropdown-item" href="/marketing/log_form_sale/change_status/<?= $formSale['formSaleId'] ?>/Contacted">Contacted</a>
                <a class="dropdown-item" href="/marketing/log_form_sale/change_status/<?= $formSale['formSaleId'] ?>/Enrolled">Enrolled</a>
                <a class="dropdown-item" href="/marketing/log_form_sale/change_status/<?= $formSale['formSaleId'] ?>/No%20Longer%20Has%20Interest">No Longer Has Interest</a>
                <a class="dropdown-item" href="/marketing/log_form_sale/change_status/<?= $formSale['formSaleId'] ?>/Uncontactable">Uncontactable</a>
                <a class="dropdown-item" href="/marketing/log_form_sale/change_status/<?= $formSale['formSaleId'] ?>/No%20Finance">No Finance</a>
            </div>
        </div>

        
        <!-- back button -->
        <a href="/marketing" class="btn btn-sm btn-secondary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Back</span>
        </a>
       </div>
</div>

</div>
</div>

<!-- edit modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content border-bottom-danger">
            <div class="modal-header alert alert-danger boder-bottom-danger">
                <h5 class="modal-title" id="editModalLabel">Edit Lead</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php include "forms/edit_log_form_sale.php"; ?>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>
