<?php 
include "form_sale_graph.php";
?>

<div class="table-responsive">
    <table id="table2" class="table table-striped table-bordered" style="width: 100%;">
        <thead>
            <tr>
                <th style="width: 30%; white-space: nowrap;">Prospective Name</th>
                <th style="width: 5%; white-space: nowrap;">Form Purchased</th>
                <th style="width: 5%; white-space: nowrap;">Form #</th>
                <th style="width: 5%; white-space: nowrap;">Invoice Number</th>
                <th style="width: 20%; white-space: nowrap;">Status</th>
                <th style="width: 20%; white-space: nowrap;">Logged By</th>
                <th style="width: 25%; white-space: nowrap;">Logged At</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($user_form_sale_log) && !empty($user_form_sale_log)): ?>
                <?php foreach($user_form_sale_log as $form_sale): ?>
                    <tr>
                        <td class="text-onwrap" style="white-space: nowrap;"><?= esc($form_sale['prospectiveFullName']) ?></td>
                        <td class="text-onwrap" style="white-space: nowrap;"><?= esc($form_sale['prspectiveFormPurchase']) ?></td>
                        <td class="text-onwrap" style="white-space: nowrap;"><?= esc($form_sale['prospectiveFormNo']) ?></td>
                        <td class="text-onwrap" style="white-space: nowrap;"><?= esc($form_sale['prospectiveInvoiceNum']) ?></td>
                        <td class="text-onwrap" style="white-space: nowrap;"><?=$form_sale['prospectiveStatus']?></td>
                        <td class="text-onwrap" style="white-space: nowrap;"><?=$form_sale['userName']?></td>
                        <td class="text-onwrap" style="white-space: nowrap;"><?= substr(esc($form_sale['formSaleCreated']), 0, 10) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">
                        <div class="alert alert-primary" role="alert">
                            <p class="fw-bold">
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
