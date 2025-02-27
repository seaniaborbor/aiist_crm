<form method="post" action="/marketing/log_form_sale" id="logFormSale">
    <?= csrf_field() ?>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="prospectiveFullName">Prospective Student Full Name</label>
                <input type="text" class="form-control" id="prospectiveFullName" name="prospectiveFullName">
                <!-- Error -->
                <?php if (isset($validation) && $validation->hasError('prospectiveFullName')): ?>
                    <div class="text-danger"><?= $validation->getError('prospectiveFullName') ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="prospectiveContact1">Prospective Student Contact 1</label>
                <input type="text" class="form-control" id="prospectiveContact1" name="prospectiveContact1">
                <!-- Error -->
                <?php if (isset($validation) && $validation->hasError('prospectiveContact1')): ?>
                    <div class="text-danger"><?= $validation->getError('prospectiveContact1') ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="prospectiveContact2">Prospective Student Contact 2</label>
                <input type="text" class="form-control" id="prospectiveContact2" name="prospectiveContact2">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="prospectiveWhatAppContact">Prospective Student WhatsApp Contact</label>
                <input type="text" class="form-control" id="prospectiveWhatAppContact" name="prospectiveWhatAppContact">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="prospectiveAddress">Prospective Student Address</label>
                <input type="text" class="form-control" id="prospectiveAddress" name="prospectiveAddress">
                <!-- Error -->
                <?php if (isset($validation) && $validation->hasError('prospectiveAddress')): ?>
                    <div class="text-danger"><?= $validation->getError('prospectiveAddress') ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="prspectiveFormPurchase">Category of Form Purchase</label>
                <select class="form-control" id="prspectiveFormPurchase" name="prspectiveFormPurchase">
                    <option value="">Please choose form type</option>
                    <option value="BBM" <?= set_select('prspectiveFormPurchase', 'BBM'); ?>>BBM</option>
                    <option value="AA" <?= set_select('prspectiveFormPurchase', 'AA'); ?>>AA</option>
                </select>
                <!-- Error -->
                <?php if (isset($validation) && $validation->hasError('prspectiveFormPurchase')): ?>
                    <div class="text-danger"><?= $validation->getError('prspectiveFormPurchase') ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="prospectiveInvoiceNum">Invoice Number</label>
                <input type="number" class="form-control" id="prospectiveInvoiceNum" name="prospectiveInvoiceNum">
                <!-- Error -->
                <?php if (isset($validation) && $validation->hasError('prospectiveInvoiceNum')): ?>
                    <div class="text-danger"><?= $validation->getError('prospectiveInvoiceNum') ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="prospectiveFormNo">Form Number</label>
                <input type="number" class="form-control" id="prospectiveFormNo" name="prospectiveFormNo">
                <!-- Error -->
                <?php if (isset($validation) && $validation->hasError('prospectiveFormNo')): ?>
                    <div class="text-danger"><?= $validation->getError('prospectiveFormNo') ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <button type="submit" class="btn mt-3  p-0  btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-file"></i>
        </span>
        <span class="text">Log Form Sale </span>
    </button>
    
</form>

