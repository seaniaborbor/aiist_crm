<?php

namespace App\Models\Enrollment;

use CodeIgniter\Model;

class ProfilePicModel extends Model
{
    protected $table      = 'studprofileimages';  // Table name
    protected $primaryKey = 'profileImgId';   // Primary key

    protected $allowedFields = ['profileImg', 'student_id']; // Fields that can be updated
}
