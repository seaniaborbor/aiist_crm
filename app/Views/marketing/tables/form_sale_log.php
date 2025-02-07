<?php 

function timeElapsed($timestamp) {
    $currentTime = time(); // Current Unix timestamp
    $timeDifference = $currentTime - strtotime($timestamp); // Difference in seconds

    if ($timeDifference < 60) {
        return $timeDifference . ' seconds ago';
    } elseif ($timeDifference < 3600) {
        $minutes = floor($timeDifference / 60);
        return $minutes . ' minute' . ($minutes > 1 ? 's' : '') . ' ago';
    } elseif ($timeDifference < 86400) {
        $hours = floor($timeDifference / 3600);
        return $hours . ' hour' . ($hours > 1 ? 's' : '') . ' ago';
    } elseif ($timeDifference < 2592000) {
        $days = floor($timeDifference / 86400);
        return $days . ' day' . ($days > 1 ? 's' : '') . ' ago';
    } elseif ($timeDifference < 31536000) {
        $months = floor($timeDifference / 2592000);
        return $months . ' month' . ($months > 1 ? 's' : '') . ' ago';
    } else {
        $years = floor($timeDifference / 31536000);
        return $years . ' year' . ($years > 1 ? 's' : '') . ' ago';
    }
}


?>
<div class="table-responsive">
    <table id="table1" class="table table-striped table-bordered table-hover table-sm align-middle">
        <thead class="table-light">
            <tr>
                <th class="w-25">Prospective Name</th>
                <th class="w-15 text-center">Form Purchased</th>
                <th class="w-10 text-center">Form #</th>
                <th class="w-10 text-center">Invoice Number</th>
                <th class="w-10 text-center">WhatsApp Contact</th>
                <th class="w-10">Status</th>
                <th class="w-15 text-center">Logged At</th>
                <th>Last Updated</th>
                <th class="w-5 text-center">More</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            <?php if (isset($user_form_sale_log) && !empty($user_form_sale_log)) : ?>
                <?php foreach ($user_form_sale_log as $form_sale) : ?>
                    <tr>
                        <td><?= esc($form_sale['prospectiveFullName']) ?></td>
                        <td class="text-center"><?= esc($form_sale['prspectiveFormPurchase']) ?></td>
                        <td class="text-center"><?= esc($form_sale['prospectiveFormNo']) ?></td>
                        <td class="text-center"><?= esc($form_sale['prospectiveInvoiceNum']) ?></td>
                        <td class="text-center">
                            <?php if (!empty($form_sale['prospectiveWhatAppContact'])): ?>
                                <a href="https://wa.me/<?= esc($form_sale['prospectiveWhatAppContact']) ?>" 
                                target="_blank" 
                                class="btn btn-success btn-sm">
                                    <i class="fab fa-whatsapp"></i> WhatsApp
                                </a>
                            <?php else: ?>
                                <span class="text-muted">No Contact</span>
                            <?php endif; ?>
                        </td>

                        <td style="color: <?= esc($form_sale['prospectiveStatus']) === 'Pending' ? 'red' : 'green'; ?>;">
    <?= esc($form_sale['prospectiveStatus']) ?>
</td>

                        <td class="text-center"><?= esc(substr($form_sale['formSaleCreated'], 0, 10)) ?></td>
                        <td class="text-center"><?php echo timeElapsed($form_sale['formSaleUpdated']) ?></td>
                        <td class="text-center">
                            <a href="/marketing/log_form_sale/details/<?=esc($form_sale['formSaleId'])?>" class="btn btn-sm btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-eye"></i>
                                </span>
                                <span class="text">Detail</span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="7">
                        <div class="alert alert-primary text-center" role="alert">
                            <p class="fw-bold mb-0">
                                You have not logged any form sales yet.
                            </p>
                        </div>
                    </td>
                </tr>
            <?php endif; ?>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
<!-- End DataTales Example -->
