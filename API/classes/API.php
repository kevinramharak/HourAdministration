<?php

require_once "Database.php";

class API extends Database
{
    protected $PDO;
    protected $passwordHash;
    function __construct()
    {
        $this->PDO = new Database();
    }
}