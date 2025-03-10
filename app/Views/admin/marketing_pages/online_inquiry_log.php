<?php 
include "online_inquiry_graph.php"; 
?>


<div class="table-responsive">
    <table class="table table-bordered table-striped" id="table0" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th style="width: 25%;">Lead Full Name</th>
                <th style="width: 20%;">Main Contact</th>
                <th style="width: 10%;">Status</th>
                <th style="width: 15%;">Logged Date</th>
                <th style="width: 20%;">Logged By</th>
                <th style="width: 10%;">Status</th>
            </tr>
        </thead>
        
        <tbody>
            <?php if (isset($user_inquiry_log) && !empty($user_inquiry_log)): ?>
                <?php foreach ($user_inquiry_log as $inquiry): ?>
                    <tr>
                        <td class="text-nowrap"><?= esc($inquiry['LeadFullName']); ?></td>
                        <td class="text-nowrap"><?= esc($inquiry['leadMainContact']); ?></td>
                        <td class="text-nowrap"><?= esc($inquiry['leadStatus']); ?></td>
                        <td class="text-nowrap"><?= esc(substr($inquiry['aedIfoogAt'], 0, 10)); ?></td>
                        <td class="text-nowrap"><?= esc($inquiry['userName']); ?></td>
                        <td class="text-center"><?= esc($inquiry['leadStatus']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">No records found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
