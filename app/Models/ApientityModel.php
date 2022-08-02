<?php

namespace App\Models;

use CodeIgniter\Model;

class ApientityModel extends Model
{
    protected $DBGroup = 'api2';
    protected $table = 'api_entity';
    protected $allowedFields = ['entity'];
}
