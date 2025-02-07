

<?=$this->extend('marketing/common/layout')?>


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
        <div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Important Notice:</strong> You are only allowed to update your name and password. Please be cautious when updating your password as it cannot be reset by any means unless with the help of the system administrator.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<form action="/marketing/personal_profile/<?=$user['userId']?>" method="post">
    <div class="form-group">
        <label for="userName">User Full Name</label>
        <input type="text" value="<?=$user['userName']?>" name="userName" id="userName" class="form-control form-control-lg">
        <!-- Add validation error message here -->
            <?php if(isset($validation) && $validation->hasError('userName')): ?>
            <p class="text-danger"><?= $validation->getError('userName') ?></p>
        <?php endif; ?>
    </div>
    
    <div class="form-group">
        <label for="userEmail">User Email</label>
        <input type="email" value="<?=$user['userEmail']?>" disabled  id="userEmail" class="form-control form-control-lg">
        <!-- Add validation error message here -->
            <?php if(isset($validation) && $validation->hasError('userEmail')): ?>
            <p class="text-danger"><?= $validation->getError('userEmail') ?></p>
        <?php endif; ?>
    </div>

        <div class="form-group">
            <label for="userPassword">Your Current Password</label>
            <input type="password" name="userPassword" id="userPassword" class="form-control form-control-lg">
            <!-- Add validation error message here -->
                <?php if(isset($validation) && $validation->hasError('userPassword')): ?>
                <p class="text-danger"><?= $validation->getError('userPassword') ?></p>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="newPassword">New Password </label>
            <input type="password" name="newPassword" id="newPassword" class="form-control form-control-lg">
            <!-- Add validation error message here -->
                <?php if(isset($validation) && $validation->hasError('newPassword')): ?>
                <p class="text-danger"><?= $validation->getError('newPassword') ?></p>
            <?php endif; ?>
        </div>


    <div class="form-group">
        <input type="submit" value="Update Account" class="btn btn-primary">
    </div>
    </form>
        </div>
    </div>
</div>

</div>


<?=$this->endSection()?>