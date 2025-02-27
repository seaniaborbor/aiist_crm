<?php

namespace App\Models\Enrollment;

use CodeIgniter\Model;

class EnrollmentModel extends Model
{
    protected $table = 'enrollmentform'; // Table name
    protected $primaryKey = 'studId'; // Primary Key
    
    protected $allowedFields = [
        'formNum', 'firstName', 'middleName', 'lastName', 'sex', 'dob', 'placeOfBirth', 
        'city', 'countryOfOrigin', 'nationality', 'address', 'phone', 'email', 'highSchool', 
        'yearGraduated', 'highSchoolContact', 'fatherName', 'fatherPhone', 'fatherAddress', 
        'motherName', 'motherPhone', 'motherAddress', 'sponsorName', 'sponsorPhone', 
        'schoolRecords', 'whichOne', 'programType', 'program', 'course', 
        'preferredClassTime', 'timeSlot', 'shirtSize', 'source','stud_enroll_status',
    ];
    
    protected $useTimestamps = true; // Enables created_at and updated_at fields (optional)
}
