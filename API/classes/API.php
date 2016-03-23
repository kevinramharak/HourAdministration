<?php

require_once "Database.php";
require_once "Employees.class.php";

class API extends Employees
{
    private $PDO;
    private $passwordHash;
    private $vars;
    function __construct()
    {
        $this->PDO = new Database();
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
                $this->registerAccount($this->getVars()['id'], $this->getVars()['firstname'], $this->getVars()['prefix'], $this->getVars()['lastname'], $this->getVars()['birthdate'], $this->getVars()['sex'], $this->getVars()['employeeid'], $this->getVars()['parttimefactor']);
                break;
        }
    }
}