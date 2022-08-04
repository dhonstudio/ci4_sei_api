<?php

namespace App\Controllers;

use App\Models\TestimonialsEnModel;
use App\Models\TestimonialsModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Testimonial extends BaseController
{
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }

    public function getAll()
    {
        $this->dhonresponse->model = new TestimonialsModel();
        $this->dhonresponse->collect();
    }

    public function getAllEn()
    {
        $this->dhonresponse->model = new TestimonialsEnModel();
        $this->dhonresponse->collect();
    }
}
