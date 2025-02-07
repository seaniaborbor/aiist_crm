<form action="/marketing/log_online_inquiry_form" method="post" id="myForm">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="LeadFullName">Lead Full Name</label>
        <input type="text" class="form-control" id="LeadFullName" name="LeadFullName" value="<?= set_value('LeadFullName') ?>" >
        <small class="text-danger"><?= isset($validation) ? $validation->getError('LeadFullName') : '' ?></small>
    </div>
    <div class="form-group">
        <label for="leadMainContact">Lead Main Contact</label>
        <input type="text" class="form-control" id="leadMainContact" name="leadMainContact" value="<?= set_value('leadMainContact') ?>" >
        <small class="text-danger"><?= isset($validation) ? $validation->getError('leadMainContact') : '' ?></small>
    </div>
    <div class="form-group">
        <label for="leadContact2">Lead Secondary Contact</label>
        <input type="text" class="form-control" id="leadContact2" name="leadContact2" value="<?= set_value('leadContact2') ?>">
        <small class="text-danger"><?= isset($validation) ? $validation->getError('leadContact2') : '' ?></small>
    </div>
    <div class="form-group">
        <label for="leadWhatappNum">Lead WhatsApp Number</label>
        <input type="text" class="form-control" id="leadWhatappNum" name="leadWhatappNum" value="<?= set_value('leadWhatappNum') ?>">
        <small class="text-danger"><?= isset($validation) ? $validation->getError('leadWhatappNum') : '' ?></small>
    </div>
    <div class="form-group">
        <label for="leadAddress">Lead Address</label>
        <textarea class="form-control" id="leadAddress" name="leadAddress" rows="3"><?= set_value('leadAddress') ?></textarea>
        <small class="text-danger"><?= isset($validation) ? $validation->getError('leadAddress') : '' ?></small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

