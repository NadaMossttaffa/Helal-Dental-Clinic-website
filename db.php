<?php

class db{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $db_name = "clinic";
    public $conn;

    public function connect() {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
        if ($conn)
            return $conn;
        else {
            return false;
        }
  
    }
  }

