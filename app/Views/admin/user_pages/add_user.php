
<?=$this->extend('admin/common/layout')?>

<?=$this->section('content')?>

<div class="row d-flex justify-content-around">

    <div class="col-md-6 mb-3">
        <div class="card border-bottom-primary mb-3 shadow h-100">
            <div class="card-header ">
                <h4 class="text-primary"><i class="fa fa-user-plus"></i> User the form below to add new user</h4>
            </div>
            <div class="card-body">
                <?php include APPPATH . 'Views/admin/forms/add_user_form.php'; ?>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-bottom-danger shadow">
            <div class="card-header bg-danger text-white">
                <h4 class="text-white">
                    <i class="fa fa-exclamation"></i> Important Notice
                </h4>
                </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action">
                        <h5 class="mb-1 text-primary"><i class="fas fa-user-shield"></i> Admin Users</h5>
                        <p class="mb-0 text-muted">Admin users can perform any administrative task in this software, including managing users, settings, and other high-level operations.</p>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h5 class="mb-1 text-success"><i class="fas fa-address-book"></i> Contact Loggers</h5>
                        <p class="mb-0 text-muted">Contact loggers are responsible for logging form sales or online responses from candidates who might possibly enroll.</p>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h5 class="mb-1 text-warning"><i class="fas fa-key"></i> Password Management</h5>
                        <p class="mb-0 text-muted">Ensure you record your password securely, as forgotten passwords cannot be retrieved. A new password will need to be set in such cases.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>