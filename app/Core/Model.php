<?php

namespace App\Core;

use mysqli;

require_once __DIR__ . '/Database.php';

abstract class Model
{
    protected mysqli $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }
}