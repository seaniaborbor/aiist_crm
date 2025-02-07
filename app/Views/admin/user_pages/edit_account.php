<?=$this->extend('admin/common/layout')?>

<?=$this->section('content')?>
<div class="row d-flex justify-content-between">

<div class="col-md-4 p-2 mb-4 mt-5">
    <div class="card shadow-lg">
        <!-- card image -->
        <div class="card-header bg-success text-white text-center">
            <button class="btn btn-success rounded-circle shadow-lg" style="margin-top: -50px;">
                <i class="fa fa-user fa-3x"></i>
            </button>
            <h5 class="card-title"><?=$user['userName']?>'s Profile</h5>
        </div>
        <div class="card-body text-center">
            <p class="card-text d-flex justify-content-between border-bottom mt-0">
                <span><i class="fa text-dark fa-user"></i> User Name:</span>
                <span><?=$user['userName']?></span>
            </p>
            <p class="card-text d-flex justify-content-between border-bottom mt-0">
                <span><i class="fa text-dark fa-envelope-open-text"></i> User Email:</span>
                <span><?=$user['userEmail']?></span>
            </p>
            <p class="card-text d-flex justify-content-between border-bottom mt-0">
                <span><i class="fa text-dark fa-assistive-listening-systems"></i> User Access Type:</span>
                <span><?=$user['userAccessType']?></span>
            </p>
            <p class="card-text d-flex justify-content-between border-bottom mt-0">
                <span><i class="fa text-dark fa-lock-open"></i> User Status:</span>
                <span><?=$user['userStatus']?></span>
            </p>
            <p class="card-text d-flex justify-content-between border-bottom mt-0">
                <span><i class="fa text-dark fa-clock"></i> User Created At:</span>
                <span><?=$user['createdAt']?></span>
            </p>
         
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card">
        <div class="card-header bg-danger text-white">
            <h6>Edit Your Account</h6>
        </div>
        <div class="card-body">
            <?php include APPPATH . 'Views/admin/forms/edit_account_form.php'; ?>
        </div>
    </div>
</div>

</div>

<?=$this->endSection()?>
