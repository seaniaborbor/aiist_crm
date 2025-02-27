
<form action="/marketing/personal_profile/<?=$user['userId']?>" method="post">
    
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
            <label for="userName">User Full Name</label>
            <input type="text" value="<?=$user['userName']?>" name="userName" id="userName" class="form-control form-control-lg">
            <!-- Add validation error message here -->
                <?php if(isset($validation) && $validation->hasError('userName')): ?>
                <p class="text-danger"><?= $validation->getError('userName') ?></p>
            <?php endif; ?>
        </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="userEmail">User Email</label>
                <input type="email" value="<?=$user['userEmail']?>" disabled  id="userEmail" class="form-control form-control-lg">
                <!-- Add validation error message here -->
                    <?php if(isset($validation) && $validation->hasError('userEmail')): ?>
                    <p class="text-danger"><?= $validation->getError('userEmail') ?></p>
                <?php endif; ?>
            </div>
        </div>
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
    <button type="submit" class="btn mt-3  p-0  btn-danger btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-file"></i>
        </span>
        <span class="text">Save Changes </span>
    </button>
    </div>
    </form>