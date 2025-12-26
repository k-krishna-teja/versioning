<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DbTest extends BaseController
{
    public function index()
{
    $db = db_connect();
    $tables = $db->listTables();
    return '<pre>' . print_r($tables, true) . '</pre>';
}

}
