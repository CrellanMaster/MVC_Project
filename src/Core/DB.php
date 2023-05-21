<?php

namespace Crellan\PdoCrud\Core;

require_once(dirname(__DIR__) . "\Config\config.php");

use PDO;

class DB
{
    protected $db;

    public function connect()
    {
        try {
            $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

}


