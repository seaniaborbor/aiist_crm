<?php

namespace App\Models\Marketing;

use CodeIgniter\Model;

class OnlineInquiryModel extends Model
{
    // Define the database table
    protected $table = 'olineinquirytable';

    // Define the primary key
    protected $primaryKey = 'onlineInquiryId';

    // Enable use of auto-incrementing primary key
    protected $useAutoIncrement = true;

    // Define allowed fields for insert/update
    protected $allowedFields = [
        'LeadFullName',
        'leadMainContact',
        'leadContact2',
        'leadWhatappNum',
        'leadAddress',
        'leadStatus',
        'leadCreatedLoggedBy',
    ];

    // Enable timestamps if your table has `created_at` and `updated_at` fields
    protected $useTimestamps = true;
    protected $createdField  = 'aedIfoogAt';
    protected $updatedField  = 'leadUpdatedAt';

}
