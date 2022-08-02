<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiusersModel extends Model
{
    protected $DBGroup = 'api2';
    protected $table = 'api_users';
    protected $primaryKey = 'id_user';
}
