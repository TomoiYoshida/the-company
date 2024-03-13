<?php

class Database
{
    private $server_name = "localhost";
    private $username = "root";
    private $password = "root"; //$password = ""; for XMAPP users, $password = "root"; for MAMP users(for mac)
    private $db_name = "the_company";
    protected $conn; //connection to DB

    public function __construct()
    {
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
        //$this->conn holds the connection to the db
        //$this->conn is now the object of the class mysqli
        
        if($this->conn->connect_error){
            die("Unable to connect to the database: " . $this->conn->connect_error);
        }
    }



}
?>