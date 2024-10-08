<?php 
session_start();

class DB_conn {
    private $DB_host = "localhost";
    private $DB_user = "root";
    private $DB_pass = "";
    private $DB_name = "webbank";

    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->DB_host, $this->DB_user, $this->DB_pass, $this->DB_name);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}

$conn = new DB_conn();
