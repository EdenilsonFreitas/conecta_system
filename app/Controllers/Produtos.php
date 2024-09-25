<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Produtos extends BaseController
{
    public function index()
    {
        return "Index Produtos";
    }
    public function novo()
    {
        return "Novo Produtos";
    }
}
