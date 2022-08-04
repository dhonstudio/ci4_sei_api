<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimonialsEnModel extends Model
{
    protected $DBGroup = 'content';
    protected $table = 'testimonials_en';
    protected $primaryKey = 'id_testi';
    protected $allowedFields = ['name'];
    protected $validationRules = [
        'name' => 'required',
    ];
}
