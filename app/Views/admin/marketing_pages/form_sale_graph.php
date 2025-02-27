<div class="row">
    <?php
    // Define color & icon pairs based on the given statuses
    $statusStyles = [
        'Pending' => ['color' => 'warning', 'icon' => 'fas fa-hourglass-half'],
        'Contacted' => ['color' => 'info', 'icon' => 'fas fa-phone'],
        'Enrolled' => ['color' => 'success', 'icon' => 'fas fa-user-check'],
        'No Longer Has Interest' => ['color' => 'danger', 'icon' => 'fas fa-times-circle'],
        'Uncontactable' => ['color' => 'secondary', 'icon' => 'fas fa-question-circle'],
        'No Finance' => ['color' => 'dark', 'icon' => 'fas fa-money-bill-wave'],
    ];

    // Loop through each distinct prospective status
    foreach ($distinct_prospective_status as $status):
        $statusName = $status['prospectiveStatus'];
        $statusCount = $status['status_count'];

        // Assign the correct style based on status
        $style = $statusStyles[$statusName] ?? ['color' => 'primary', 'icon' => 'fas fa-chart-line'];
    ?>
        <div class="col-md-2 mb-4">
            <div class="card border-left-<?= $style['color'] ?> shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-<?= $style['color'] ?> text-uppercase mb-1">
                                <?= esc($statusName); ?> <!-- Display status name -->
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= esc($statusCount); ?> <!-- Display count of that status -->
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="<?= $style['icon'] ?> fa-2x text-<?= $style['color'] ?>"></i> <!-- Status-specific Icon -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
