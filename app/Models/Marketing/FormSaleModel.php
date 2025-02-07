<?php
namespace App\Models\Marketing;

use CodeIgniter\Model;

class FormSaleModel extends Model
{
    protected $table = 'formsaletable'; // Set your table name
    protected $primaryKey = 'formSaleId'; // Set your primary key if different

    // Allowed fields for mass assignment
    protected $allowedFields = [
        'prospectiveFullName',
        'prospectiveContact1',
        'prospectiveContact2',
        'prospectiveWhatAppContact',
        'prospectiveAddress',
        'prspectiveFormPurchase',
        'prospectiveInvoiceNum',
        'prospectiveFormNo',
        'formSaleCreatedLoggedBy',
        'prospectiveStatus'
    ];

  // enable timestamp
    protected $useTimestamps = true;
    protected $createdField  = 'formSaleCreated';
    protected $updatedField  = 'formSaleUpdated';
}
