<div class="table-responsive">
<table class="table table-striped" id="table2" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Login In User Name</th>
            <th>Email</th>
            <th>Login Time</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($user_login_log as $log): ?>
        <tr>
            <td><?= $log['userName']; ?></td>
            <td><?= $log['userEmail']; ?></td>
            <td><?= $log['loginInTime']; ?></td>
            <td>
                <a href="/admin/user_profile/<?=$log['userId']?>" class="btn btn-primary btn-sm btn-block my-0">
                    <i class="fas fa-user"></i> View Profile
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>