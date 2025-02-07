<form action="/admin/user_profile/<?=$user['userId']?>" method="post">
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
        <input type="email" value="<?=$user['userEmail']?>" name="userEmail" id="userEmail" class="form-control form-control-lg">
        <!-- Add validation error message here -->
            <?php if(isset($validation) && $validation->hasError('userEmail')): ?>
            <p class="text-danger"><?= $validation->getError('userEmail') ?></p>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="userAccesstype">User Access Type</label>
        <select name="userAccesstype" id="userAccesstype" class="form-control form-control-lg">
            <option value="">Choose account type </option>
            <option value="admin">Admin User</option>
            <option value="contactlogger">Contact Logger</option>
        </select>
        <!-- Add validation error message here -->
            <?php if(isset($validation) && $validation->hasError('userAccesstype')): ?>
            <p class="text-danger"><?= $validation->getError('userAccesstype') ?></p>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="userStatus">Account  Status</label>
        <select name="userStatus" id="userStatus" class="form-control form-control-lg">
            <option value="">Choose the Account Status </option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
        <!-- Add validation error message here -->
            <?php if(isset($validation) && $validation->hasError('userStatus')): ?>
            <p class="text-danger"><?= $validation->getError('userStatus') ?></p>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <input type="submit" value="Add User" class="btn btn-primary">
    </div>
    </form>