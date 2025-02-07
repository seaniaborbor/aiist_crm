
<?=$this->extend('admin/common/layout')?>

<?=$this->section('content')?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">All Users Log </h1>
</div>



<div class="row">
    <?php foreach ($userCountByDepartment as $department): ?>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card border-primary shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-users fa-3x text-primary mb-3"></i> <!-- FontAwesome icon -->
                    <h5 class="card-title text-uppercase"><?= esc($department['userAccessType']); ?></h5>
                    <p class="card-text"><strong><?= esc($department['count']); ?></strong></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($userCountByStatus as $status): ?>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card border-success shadow-sm">
                <div class="card-body text-center">
                    <i class="<?= $status['userStatus'] === 'Active' ? 'fas fa-check-circle' : 'fas fa-times-circle'; ?> fa-3x text-success mb-3"></i> <!-- Conditional Icon -->
                    <h5 class="card-title text-uppercase"><?= esc($status['userStatus']); ?></h5>
                    <p class="card-text"><strong><?= esc($status['count']); ?></strong></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>




<div class="row">
    <div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Table of Login Users</h6>
                <a href="/admin/add_users" class="btn btn-primary btn-icon-split btn-sm float-right">
                    <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                    </span>
                    <span class="text">Add User</span>
                </a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table id="table2" class="table table-striped table-bordered" >
                    <thead>
                        <tr>
                            <th>User Full Name</th>
                            <th>User Email</th>
                            <th>User Access Type</th>
                            <th>User Status</th>
                            <th>Created At</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($users) && !empty($users)): ?>
                            <?php foreach($users as $user): ?>
                                <tr>
                                    <td><?= esc($user['userName']) ?></td>
                                    <td><?= esc($user['userEmail']) ?></td>
                                    <td><?= esc($user['userAccessType']) ?></td>
                                    <td><?= esc($user['userStatus']) ?></td>
                                    <td><?= esc($user['createdAt']) ?></td>
                                    <td>
                                    <a href="/admin/user_profile/<?= esc($user['userId']) ?>" class="btn m-0 btn-sm btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                            <i class="fas fa-eye"></i>
                                            </span>
                                            <span class="text">View</span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6">
                                    <div class="alert alert-primary" role="alert">
                                        <p class="fw-bold">
                                            No users found in the database.
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>