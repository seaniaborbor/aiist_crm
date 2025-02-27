<div class="card shadow-lg border-bottom-primary" style="border-radius: 25px; overflow: hidden;">
<div class="card-body bg-white ">
    <center>
        <h6 class="mb-0 text-primary fw-bold">Recent Logins</h6>
        <hr class="border-bottom-primary">
    </center>
    <?php foreach ($user_login_log as $log): ?>
        <div class="row border-bottom py-3 align-items-center">
            <!-- Profile Picture -->
            <div class="col-3 text-center">
            <img src="<?= !empty($log->userPic) ? '/dashboard_assets/img/' . esc($log->userPic) : '/dashboard_assets/img/ediusers.jpg' ?>" 
     class="rounded-circle img-fluid shadow-lg img-thumbnail" 
     alt="Profile Picture" 
     style="width: 60px; height: 60px; object-fit: cover;">

            </div>
            <!-- User Details -->
            <div class="col-6">
                <h6 class="mb-1 text-primary"><?= esc($log->userName); ?></h6>
                <small class="text-muted"><?= esc(date("M j, Y g:i A", strtotime($log->loginInTime)) ?? 'No Course'); ?></small>
            </div>
            <!-- Profile Button -->
            <div class="col-3 text-center">
                <a href="/admin/user_profile/<?=esc($log->userId)?>" class="btn btn-outline-primary rounded-pill btn-sm">
                <i class="fas fa-eye"></i>
                </a>
            </div>
        </div>
    <?php endforeach; ?>

    <center>
    <a href="/admin/users" class="btn mt-3 rounded-pill p-0 btn-sm btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-users"></i>
        </span>
        <span class="text">View All Users</span>
    </a>
    </center>
</div>
</div>