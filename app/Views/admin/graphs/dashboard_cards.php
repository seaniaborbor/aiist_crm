<?php 
// Define colors and icons for each counter key
$counterStyles = [
    "Total Admin" => ["icon" => "fa-user-shield", "color" => "primary"],  // Blue
    "Total Lead" => ["icon" => "fa-user-plus", "color" => "success"],     // Green
    "Total Form Sold" => ["icon" => "fa-file-invoice-dollar", "color" => "warning"], // Yellow
    "Total Enrollment" => ["icon" => "fa-graduation-cap", "color" => "info"] // Cyan/Blue
];
?>


    <?php foreach ($counters as $key => $value): ?>
        <?php 
            $color = $counterStyles[$key]['color'] ?? 'secondary'; // Default color
            $icon = $counterStyles[$key]['icon'] ?? 'fa-info-circle'; // Default icon
        ?>
        <div class="col-md-3 mb-4">
            <div class="card border-left-<?= esc($color) ?> shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-<?= esc($color) ?> text-uppercase mb-1">
                                <?= esc($key) ?> <!-- Array key name -->
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= esc($value) ?> <!-- Count value -->
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas <?= esc($icon) ?> fa-2x text-<?= esc($color) ?>"></i> <!-- Dynamic Icon -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
