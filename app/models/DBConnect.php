<?php

class DBConnect
{
    private $dsn;
    private $username;
    private $password;
    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=testmodule2;charset=utf8";
        $this->username = "tiep";
        $this->password = "tiep@123";
    }

    public function connect()
    {
        try {
            $conn = new PDO($this->dsn,$this->username,$this->password);
            return $conn;
        }catch (PDOException $e){
            exit($e->getMessage());
        }
    }
}
