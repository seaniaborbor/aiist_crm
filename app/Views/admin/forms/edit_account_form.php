<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Important Notice:</strong> You are only allowed to update your name and password. Please be cautious when updating your password as it cannot be reset by any means unless with the help of the system administrator.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<form action="/admin/personal_profile/<?=$user['userId']?>" method="post">
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