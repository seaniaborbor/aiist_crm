<form action="/marketing/online_inquiry/edit/<?=$lead['onlineInquiryId']?>" method="post">
    <div class="form-group">
        <label for="LeadFullName">Lead Full Name</label>
        <input type="text" class="form-control" id="LeadFullName" name="LeadFullName" 
               value="<?= isset($lead['LeadFullName']) ? esc($lead['LeadFullName']) : '' ?>" required>
        <!-- error message -->
        <?php if (isset($validation) && $validation->hasError('LeadFullName')) : ?>
            <div class="text-danger"><?= $validation->getError('LeadFullName') ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="leadMainContact">Lead Main Contact</label>
        <input type="text" class="form-control" id="leadMainContact" name="leadMainContact" 
               value="<?= isset($lead['leadMainContact']) ? esc($lead['leadMainContact']) : '' ?>" required>
        <!-- error message -->
        <?php if (isset($validation) && $validation->hasError('leadMainContact')) : ?>
            <div class="text-danger"><?= $validation->getError('leadMainContact') ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="leadContact2">Lead Secondary Contact</label>
        <input type="text" class="form-control" id="leadContact2" name="leadContact2" 
               value="<?= isset($lead['leadContact2']) ? esc($lead['leadContact2']) : '' ?>">
        <!-- error message -->
        <?php if (isset($validation) && $validation->hasError('leadContact2')) : ?>
            <div class="text-danger"><?= $validation->getError('leadContact2') ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="leadWhatappNum">Lead WhatsApp Number</label>
        <input type="text" class="form-control" id="leadWhatappNum" name="leadWhatappNum" 
               value="<?= isset($lead['leadWhatappNum']) ? esc($lead['leadWhatappNum']) : '' ?>">
        <!-- error message -->
        <?php if (isset($validation) && $validation->hasError('leadWhatappNum')) : ?>
            <div class="text-danger"><?= $validation->getError('leadWhatappNum') ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="leadAddress">Lead Address</label>
        <textarea class="form-control" id="leadAddress" name="leadAddress" rows="3"><?= isset($lead['leadAddress']) ? esc($lead['leadAddress']) : '' ?></textarea>
        <!-- error message -->
        <?php if (isset($validation) && $validation->hasError('leadAddress')) : ?>
            <div class="text-danger"><?= $validation->getError('leadAddress') ?></div>
        <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
