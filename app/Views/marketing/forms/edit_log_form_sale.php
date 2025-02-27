<form method="post" action="/marketing/log_form_sale/details/<?=$formSale['formSaleId']?>">
    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <label for="prospectiveFullName">Full Name</label>
        <input type="text" 
               class="form-control <?= isset($errors['prospectiveFullName']) ? 'is-invalid' : '' ?>" 
               id="prospectiveFullName" 
               name="prospectiveFullName" 
               value="<?= esc($formSale['prospectiveFullName']) ?>" 
               required>
        <?php if (isset($errors['prospectiveFullName'])): ?>
            <div class="invalid-feedback"><?= esc($errors['prospectiveFullName']) ?></div>
        <?php endif; ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
        <label for="prospectiveContact1">Contact 1</label>
        <input type="text" 
               class="form-control <?= isset($errors['prospectiveContact1']) ? 'is-invalid' : '' ?>" 
               id="prospectiveContact1" 
               name="prospectiveContact1" 
               value="<?= esc($formSale['prospectiveContact1']) ?>" 
               required>
        <?php if (isset($errors['prospectiveContact1'])): ?>
            <div class="invalid-feedback"><?= esc($errors['prospectiveContact1']) ?></div>
        <?php endif; ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
        <label for="prospectiveContact2">Contact 2</label>
        <input type="text" 
               class="form-control <?= isset($errors['prospectiveContact2']) ? 'is-invalid' : '' ?>" 
               id="prospectiveContact2" 
               name="prospectiveContact2" 
               value="<?= esc($formSale['prospectiveContact2']) ?>">
        <?php if (isset($errors['prospectiveContact2'])): ?>
            <div class="invalid-feedback"><?= esc($errors['prospectiveContact2']) ?></div>
        <?php endif; ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
        <label for="prospectiveWhatAppContact">WhatsApp Contact</label>
        <input type="text" 
               class="form-control <?= isset($errors['prospectiveWhatAppContact']) ? 'is-invalid' : '' ?>" 
               id="prospectiveWhatAppContact" 
               name="prospectiveWhatAppContact" 
               value="<?= esc($formSale['prospectiveWhatAppContact']) ?>">
        <?php if (isset($errors['prospectiveWhatAppContact'])): ?>
            <div class="invalid-feedback"><?= esc($errors['prospectiveWhatAppContact']) ?></div>
        <?php endif; ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
        <label for="prospectiveAddress">Address</label>
        <input type="text" 
               class="form-control <?= isset($errors['prospectiveAddress']) ? 'is-invalid' : '' ?>" 
               id="prospectiveAddress" 
               name="prospectiveAddress" 
               value="<?= esc($formSale['prospectiveAddress']) ?>" 
               required>
        <?php if (isset($errors['prospectiveAddress'])): ?>
            <div class="invalid-feedback"><?= esc($errors['prospectiveAddress']) ?></div>
        <?php endif; ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
        <label for="prspectiveFormPurchase">Form Purchase</label>
        <select class="form-control <?= isset($errors['prspectiveFormPurchase']) ? 'is-invalid' : '' ?>" 
                id="prspectiveFormPurchase" 
                name="prspectiveFormPurchase" 
                required>
            <option value="BBM" <?= $formSale['prspectiveFormPurchase'] === 'BBM' ? 'selected' : '' ?>>BBM</option>
            <option value="AA" <?= $formSale['prspectiveFormPurchase'] === 'AA' ? 'selected' : '' ?>>AA</option>
        </select>
        <?php if (isset($errors['prspectiveFormPurchase'])): ?>
            <div class="invalid-feedback"><?= esc($errors['prspectiveFormPurchase']) ?></div>
        <?php endif; ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
        <label for="prospectiveInvoiceNum">Invoice Number</label>
        <input type="number" 
               class="form-control <?= isset($errors['prospectiveInvoiceNum']) ? 'is-invalid' : '' ?>" 
               id="prospectiveInvoiceNum" 
               name="prospectiveInvoiceNum" 
               value="<?= esc($formSale['prospectiveInvoiceNum']) ?>" 
               required>
        <?php if (isset($errors['prospectiveInvoiceNum'])): ?>
            <div class="invalid-feedback"><?= esc($errors['prospectiveInvoiceNum']) ?></div>
        <?php endif; ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
        <label for="prospectiveFormNo">Form Number</label>
        <input type="number" 
               class="form-control <?= isset($errors['prospectiveFormNo']) ? 'is-invalid' : '' ?>" 
               id="prospectiveFormNo" 
               name="prospectiveFormNo" 
               value="<?= esc($formSale['prospectiveFormNo']) ?>" 
               required>
        <?php if (isset($errors['prospectiveFormNo'])): ?>
            <div class="invalid-feedback"><?= esc($errors['prospectiveFormNo']) ?></div>
        <?php endif; ?>
        </div>
    </div>
    </div>
    <button type="submit" class="btn mt-3  p-0  btn-danger btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-file"></i>
        </span>
        <span class="text">Update Record  </span>
    </button>
</form>
