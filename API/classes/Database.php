<?php

class Database extends PDO
{
    // database variabelen
    protected $_ip; // ip-adres
    protected $_user; // gebruikersnaam
    protected $_pass; // wachtwoord
    protected $_db; // database
    protected $_dsn; // database network

    private $_options; // verbindopties
    private $_dbh; // database handle
    private $_error; // foutmeldingen
    private $_stmt; // statement

    // in de construct word de verbinding opgezet
    public function __construct()
    {
        $this->_ip = DB_IP;
        $this->_db = DB_TABLE;
        $this->_user = DB_USER;
        $this->_pass = DB_PASS;
        $this->_dsn = 'mysql: host=' . $this->_ip . '; dbname=' . $this->_db;
        $this->_options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try
        {
            // port is standaard 3306
            $this->_dbh = new PDO($this->_dsn, $this->_user, $this->_pass, $this->_options);
        }

        catch (PDOException $e)
        {
            $this->_error = $e->getMessage();
            exit($this->_error);
        }

    }

    // prepare query en voer binds uit als binds een array is
    protected function setupQuery($query, $binds)
    {
        // prepareer query
        $this->_stmt = $this->_dbh->prepare($query);

        // als binds niet null is maar ook geen array, leeg dan de binds variabel
        if (!empty($binds) && !is_array($binds)) $binds = null;

        // controleer of binds een array is
        if (is_array($binds))
        {
            $keys = array_keys($binds);
            // stop in een foreach
            foreach ($binds as $key => $value)
            {
                // bepaal type van value
                switch (true)
                {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }


                if (strpos($key, ':') === 0)
                {
                    $param = $key;
                }
                // bindValue neemt niet genoegen met 0 als eerste getal, dus doen we een + 1 erbij ( 0 = 1, 1 = 2, etc. )
                else
                {
                    $param = $key + 1;
                }

                $this->_stmt->bindValue($param, $value, $type);
            }
        }

        //$this->_stmt->execute();

        return $this->_stmt;
    }

    // voert setupQuery functie uit, binds moeten als een array gegeven worden (geeft geen gegevens terug, het is een execute)
    public function queryExecute($query, $binds = null) {
        $this->_stmt = $this->setupQuery($query, $binds);
        $this->_stmt->execute();
    }

    // voert setupQuery functie uit met fetch, binds moeten als een array gegeven worden
    public function querySingle($query, $binds = null) {
        $this->_stmt = $this->setupQuery($query, $binds);
        $this->_stmt->execute();
        return $this->_stmt->fetch(PDO::FETCH_ASSOC);
    }

    // voert setupQuery functie uit met een fetchAll, binds moeten als een array gegeven worden
    public function queryMultiple($query, $binds = null) {
        $this->_stmt = $this->setupQuery($query, $binds);
        $this->_stmt->execute();
        return $this->_stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
