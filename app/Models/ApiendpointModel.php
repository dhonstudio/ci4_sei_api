<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiendpointModel extends Model
{
    protected $DBGroup = 'api2';
    protected $table = 'api_endpoint';
    protected $primaryKey = 'id_endpoint';
    protected $allowedFields = ['endpoint'];
}
