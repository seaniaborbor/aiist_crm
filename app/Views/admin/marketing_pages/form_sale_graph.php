<div class="row">

    <!-- Cards for each status -->
    <?php foreach ($form_sales_by_status as $form_sale): ?>
        <div class="col-md-6">
            <div class="card text-center shadow-sm mb-4">
                <div class="card-body">
                    <div class="icon mb-3">
                        <?php if ($form_sale['prospectiveStatus'] === 'Pending'): ?>
                            <i class="fas fa-hourglass-half fa-3x text-warning"></i>
                        <?php elseif ($form_sale['prospectiveStatus'] === 'Completed'): ?>
                            <i class="fas fa-check-circle fa-3x text-success"></i>
                        <?php else: ?>
                            <i class="fas fa-info-circle fa-3x text-primary"></i>
                        <?php endif; ?>
                    </div>
                    <h5 class="card-title"><?= esc($form_sale['prospectiveStatus']); ?></h5>
                    <p class="card-text">
                        <strong> <?= esc($form_sale['total_sales']); ?></strong>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Include Font Awesome -->
