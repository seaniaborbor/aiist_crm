<?php
namespace App\Models\Admin;

use CodeIgniter\Model;


class UsersModel extends Model
{
    protected $table      = 'users'; // Table name
    protected $primaryKey = 'userId';    // Primary key

    // Fields that can be inserted/updated
    protected $allowedFields = [
        'userName',
        'userEmail',
        'userPassword',
        'userAccesstype',
        'userStatus',
        'userCreatedLoggedBy',
        'userPic'
    ];

     // Enable automatic timestamps
     protected $useTimestamps = true; // Enable timestamp functionality
     protected $createdField  = 'createdAt'; // Field for creation timestamp
     protected $updatedField  = 'updatedAt'; // Field for update timestamp
}