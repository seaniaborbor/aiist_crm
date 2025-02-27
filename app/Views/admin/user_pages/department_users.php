
<?=$this->extend('admin/common/layout')?>

<?=$this->section('content')?>

<div class="container-fluid">
    <div class="row mb-5">
        
        
<?php foreach ($users as $user): ?>
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-body text-center">
                <!-- User Profile Picture -->
                <img src="/dashboard_assets/img/<?= esc($user['userPic'] ?? 'default.jpg') ?>" 
                     class="rounded-circle img-fluid mb-3" 
                     alt="Profile Picture" 
                     style="width: 100px; height: 100px; object-fit: cover;">

                <!-- User Name -->
                <h5 class="card-title font-weight-bold"><?= esc($user['userName']) ?></h5>

                <!-- User Email -->
                <p class="card-text text-muted">
                    <i class="fas fa-envelope"></i> <?= esc($user['userEmail']) ?>
                </p>

                <!-- User Access Type -->
                <p class="card-text">
                    <i class="fas fa-user-tag"></i> <?= ucfirst(esc($user['userAccessType'])) ?>
                </p>

                <!-- User Status -->
                <p class="card-text">
                    <i class="fas fa-user-check"></i> 
                    <span class="badge badge-<?= ($user['userStatus'] == 'active') ? 'success' : 'danger' ?>">
                        <?= ucfirst(esc($user['userStatus'])) ?>
                    </span>
                </p>

                <!-- Profile Button -->
                <a href="/admin/user_profile/<?= esc($user['userId']) ?>" class="btn btn-primary btn-sm">
                    <i class="fas fa-user"></i> View Profile
                </a>
            </div>
        </div>
    </div>
<?php endforeach; ?>


    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo "print the pager here"; ?>
        </div>
    </div>
   </div>
<?=$this->endSection()?>