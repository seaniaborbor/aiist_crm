<?php
function getStatusWithColor($status) {
    $colors = [
        'Not Contacted' => 'red',
        'Contacted' => 'blue',
        'Inquirey Closed' => 'green'
    ];

    // Assign color based on the status
    $color = $colors[$status] ?? 'black'; // Default to black if status is not in the array

    // Return the status with the color applied
    return "<span style='color: {$color};'>" . esc($status) . "</span>";
}


?>


<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover table-sm align-middle" id="table2" width="100%" cellspacing="0">
        <thead class="table-light">
            <tr>
                <th >Lead Full Name</th>
                <th >Main Contact</th>
                <th>Status</th>
                <th >Logged Date</th>
                <th >Last Updated</th>
                <th >WhatsApp</th>
                <th >More</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($user_inquiry_log) && !empty($user_inquiry_log)) : ?>
                <?php foreach ($user_inquiry_log as $inquiry) : ?>
                    <tr>
                        <td  scope="col" ><?= esc($inquiry['LeadFullName']); ?></td>
                        <td  scope="col" ><?= esc($inquiry['leadMainContact']); ?></td>
                        <td  scope="col" ><?= getStatusWithColor($inquiry['leadStatus']); ?></td>
                        <td  scope="col" ><?= substr(esc($inquiry['aedIfoogAt']),0,10); ?></td>
                        <td  scope="col" ><?php echo  timeElapsed($inquiry['leadUpdatedAt']); ?></td>
                        <td class="text-center">
                            <?php if (!empty($inquiry['leadWhatappNum'])): ?>
                                <a href="https://wa.me/<?= esc($inquiry['leadWhatappNum']) ?>" 
                                target="_blank" 
                                class="btn btn-success btn-sm">
                                    <i class="fab fa-whatsapp"></i> WhatsApp
                                </a>
                            <?php else: ?>
                                <span class="text-muted">No Contact</span>
                            <?php endif; ?>
                        </td>
                        <td scope="col" class="text-center">
                            <a href="/marketing/online_inquiry/detail/<?=$inquiry['onlineInquiryId']?>" class="btn btn-sm btn-primary btn-icon-split">
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
                    <td colspan="6">
                        <div class="alert alert-primary text-center" role="alert">
                            No records found.
                        </div>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
