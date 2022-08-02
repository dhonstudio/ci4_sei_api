<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiaddressModel extends Model
{
    protected $DBGroup = 'api2';
    protected $table = 'api_address';
    protected $primaryKey = 'id_address';
    protected $allowedFields = ['ip_address', 'ip_info'];
}
