<?=$this->extend('marketing/common/layout')?>

<?=$this->section('content')?>
<div class="row">
    
<div class="col-md-6 ">

<div class="card shadow-sm border-bottom-info mb-4">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Online/Lead Detail</h6>
    </div>
    <div class="card-body">

    <div class="list-group list-group-flush">
    <div class="list-group-item d-flex align-items-center">
        <i class="fas fa-user text-primary mr-3"></i>
        <span>Lead Full Name: <strong><?= esc($lead['LeadFullName']); ?></strong></span>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <i class="fas fa-phone-alt text-success mr-3"></i>
        <span>Lead Main Contact: <strong><?= esc($lead['leadMainContact']); ?></strong></span>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <i class="fas fa-phone text-warning mr-3"></i>
        <span>Lead Secondary Contact: <strong><?= esc($lead['leadContact2']); ?></strong></span>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <i class="fab fa-whatsapp text-success mr-3"></i>
        <span>Lead WhatsApp Number: <strong><?= esc($lead['leadWhatappNum']); ?></strong></span>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <i class="fas fa-map-marker-alt text-danger mr-3"></i>
        <span>Lead Address: <strong><?= esc($lead['leadAddress']); ?></strong></span>
    </div>
    <div class="list-group-item d-flex align-items-center">
        <i class="fas fa-user-shield text-info mr-3"></i>
        <span>Lead Created Logged By: <strong><?= esc($lead['leadCreatedLoggedBy']); ?></strong></span>
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
        <a href="/marketing/online_inquiry/delete/<?=$lead['onlineInquiryId']?>" class="btn btn-sm btn-danger btn-icon-split">
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
                <a class="dropdown-item" href="/marketing/online_inquiry/change_status/<?=$lead['onlineInquiryId']?>/Contacted">Contacted</a>
                <a class="dropdown-item" href="/marketing/online_inquiry/change_status/<?=$lead['onlineInquiryId']?>/Inquirey Closed">Inquiry Closed</a>
            </div>
        </div>
        
        <!-- back button -->
        <a href="/marketing/log_online_inquiry_form" class="btn btn-sm btn-secondary btn-icon-split">
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
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Lead</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php include 'forms/edit_log_online_inquiry_form.php'; ?>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>