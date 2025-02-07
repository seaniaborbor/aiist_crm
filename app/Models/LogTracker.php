<?php

namespace App\Models;
use CodeIgniter\Model;




class LogTracker extends Model
{
    protected $table = 'userloginlog';
    protected $primaryKey = 'logInUserId';

    protected $allowedFields = ['userRealId'];


}