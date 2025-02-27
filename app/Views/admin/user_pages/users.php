
<?=$this->extend('admin/common/layout')?>

<?=$this->section('content')?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> <span class="badge badge-danger ">Admin /</span> All Users Log </h1>
</div>


<div class="row">
    <?php foreach ($userCountByDepartment as $department): ?>
        <?php 
            // Define colors and icons based on userAccessType
            $styles = [
                'contactlogger' => ['color' => 'info', 'icon' => 'fa-address-book'],
                'admin' => ['color' => 'danger', 'icon' => 'fa-user-shield'],
                'enrollment' => ['color' => 'success', 'icon' => 'fa-user-graduate']
            ];

            // Default to primary if type is not in the list
            $type = strtolower($department['userAccessType']);
            $color = $styles[$type]['color'] ?? 'primary';
            $icon = $styles[$type]['icon'] ?? 'fa-users';
        ?>
        <div class="col-md-4 mb-4">
            <div class="card border-left-<?= $color ?> shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-<?= $color ?> text-uppercase mb-1">
                                <?= esc($department['userAccessType']); ?>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= esc($department['count']); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas <?= $icon ?> fa-2x text-<?= $color ?>"></i> <!-- Dynamic Icon -->
                        </div>
                    </div>
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
                            <th></th>
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
                                    <td>
                                        <div class="rounded-circle" 
                                        style="width:40px; height:40px;
                                        background-image: url(/dashboard_assets/img/<?=$user['userPic']?>);
                                        background-size:cover;
                                        background-position:top;">
                                    </div>
                                    <td><?= esc($user['userName']) ?></td>
                                    </td>
                                    <td><?= esc($user['userEmail']) ?></td>
                                    <td><?= esc($user['userAccessType']) ?></td>
                                    <td><?= esc($user['userStatus']) ?></td>
                                    <td><?= esc($user['createdAt']) ?></td>
                                    <td>
                                    <a href="/admin/user_profile/<?= esc($user['userId']) ?>" class="btn m-0 btn-sm btn-success btn-icon-split">
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