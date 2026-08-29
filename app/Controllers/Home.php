<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // Database Connection Test
        $db = \Config\Database::connect();
        
        if ($db->connect()) {
            return "<h1>Database Connected Successfully!</h1>";
        } else {
            return "<h1>Database Connection Failed!</h1>";
        }
    }
}