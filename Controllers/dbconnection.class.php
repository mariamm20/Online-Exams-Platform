<?php
// data base connection in PDO
class DB {
    private $host ="localhost";
    private $db_user = "root" ;
    private $db_pass ="";
    private $dbname ="e-exam" ;

    protected function  Connection(){
        $dns = 'mysql:host='.$this->host.';dbname='.$this->dbname;
        $pdo = new PDO($dns,$this->db_user,$this->db_pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo ;
    }
} 