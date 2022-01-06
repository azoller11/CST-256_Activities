<?php
namespace App\Services\Data;



class CustomerDAO {
    public $servername = "localhost";
    public $username = "root";
    public $password = "root";
    public $database_in_use = "cst-236";
    
    // Create connection
    
    function getConn() {
        $conn = new \MySQLi($this->servername, $this->username, $this->password, $this->database_in_use);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }
    
    
    public function addCustomer($firstname, $lastname) {
        $sql = "INSERT INTO Customer (ID, Username, Password) VALUES ('NULL', '".$firstname."', '".$lastname."')";
        if ($this->getConn()->query($sql) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record: " . $this->getConn()->error;
        }
        
        $this->getConn()->close();
    }
    
    
}