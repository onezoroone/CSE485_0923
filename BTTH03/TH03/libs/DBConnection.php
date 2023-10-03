<?php
class DBConnection{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $conn;

    /**
     * @param $host
     * @param $dbname
     * @param $username
     * @param $password
     */
    public function __construct()
    {
        $this->host = DB_HOST;
        $this->dbname = DB_NAME ;
        $this->username = DB_USER;
        $this->password = DB_PASS;

        try{
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}",$this->username,$this->password);
        }catch (PDOException $e){
            $this->conn = null;
        }
    }

    /**
     * @return null
     */
    public function getConn()
    {
        return $this->conn;
    }

}