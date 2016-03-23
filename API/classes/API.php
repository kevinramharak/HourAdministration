<?php

require_once "Database.php";
require_once "Employees.class.php";
require_once "Permissions.php";

class API
{
    private $employees;
    private $permissions;
    private $PDO;
    private $passwordHash;
    private $vars;
    function __construct()
    {
        $this->PDO = new Database();
        $this->employees = new Employees();
        $this->permissions = new Permissions();
    }

    /**
     * @return Database
     */
    public function getPDO()
    {
        return $this->PDO;
    }

    /**
     * @param Database $PDO
     */
    public function setPDO($PDO)
    {
        $this->PDO = $PDO;
    }

    /**
     * @return mixed
     */
    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    /**
     * @param mixed $passwordHash
     */
    public function setPasswordHash($passwordHash)
    {
        $this->passwordHash = $passwordHash;
    }

    /**
     * @return mixed
     */
    public function getVars()
    {
        return $this->vars;
    }

    /**
     * @param mixed $vars
     */
    public function setVars($vars)
    {
        $this->vars = $vars;
    }

    function action($action) {
        switch($action) {
            case "registerAccount":
                $this->registerAccount(null, $this->getVars()['firstname'], $this->getVars()['prefix'], $this->getVars()['lastname'], $this->getVars()['birthdate'], $this->getVars()['sex'], null, $this->getVars()['parttimefactor']);
                break;
        }
    }
}