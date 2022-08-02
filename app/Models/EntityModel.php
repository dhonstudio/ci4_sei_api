<?php

namespace App\Models;

use CodeIgniter\Model;

class EntityModel extends Model
{
    protected $DBGroup = 'hit';
    protected $table = 'dhonstudio_entity';
    protected $allowedFields = ['entity'];
    protected $validationRules = [
        'entity' => 'required',
    ];
}
