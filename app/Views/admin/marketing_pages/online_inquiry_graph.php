<div class="row">
    <!-- Cards for online inquiries -->
    <?php foreach ($online_inquiries_by_status as $inquiry): ?>
        <div class="col-md-4">
            <div class="card text-center shadow-sm mb-4">
                <div class="card-body">
                    <div class="icon mb-3">
                        <?php if ($inquiry['leadStatus'] === 'Not Contacted'): ?>
                            <i class="fas fa-user-plus fa-3x text-primary"></i>
                        <?php elseif ($inquiry['leadStatus'] === 'Inquirey Closed'): ?>
                            <i class="fas fa-spinner fa-3x text-warning"></i>
                        <?php elseif ($inquiry['leadStatus'] === 'Contacted'): ?>
                            <i class="fas fa-check-circle fa-3x text-success"></i>
                        <?php else: ?>
                            <i class="fas fa-question-circle fa-3x text-secondary"></i>
                        <?php endif; ?>
                    </div>
                    <h5 class="card-title"><?= esc($inquiry['leadStatus']); ?></h5>
                    <p class="card-text">
                        <strong> <?= esc($inquiry['total_inquiries']); ?></strong>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


