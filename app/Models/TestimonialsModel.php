<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimonialsModel extends Model
{
    protected $DBGroup = 'content';
    protected $table = 'testimonials';
    protected $primaryKey = 'id_testi';
    protected $allowedFields = ['name'];
    protected $validationRules = [
        'name' => 'required',
    ];
}
