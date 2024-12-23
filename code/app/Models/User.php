<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fullname', 'email', 'password'];
    protected $useTimestamps = true; // Enable automatic timestamps
}
