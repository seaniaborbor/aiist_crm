<?=$this->extend('enrollment/common/layout')?>

<?=$this->section('content')?>

<div class="row d-flex justify-content-between">

<div class="col-md-6 ">
    <div class="card border-bottom-primary  mt-5">
        
        <div class="card-header alert alert-primary p-0">
            <center>
                <div class="rounded-circle img-thumbnail shadow-lg"
                style="background-image:url(/dashboard_assets/img/<?=$user['userPic']?>);
                background-size:cover; background-position: top;
                height:200px; width:200px; margin-top: -40px;"></div>
            </center>
        </div>
        <div class="card-body text-center">
            <h5 class="card-title text-primary mb-4"><?=$user['userName']?>'s Profile</h5>
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

<div class="col-md-6 mt-5">
    <div class="card border-bottom-danger">
        <div class="card-header alert alert-danger">
            <h6>Edit Your Account</h6>
        </div>
        <div class="card-body">
            <?php include 'forms/edit_account_form.php'; ?>
        </div>
    </div>
</div>

</div>

<?=$this->endSection()?>